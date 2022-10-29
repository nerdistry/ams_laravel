This is the page where blog posts will appear.

@foreach($all_blog_entries as $single_blog_entry)

<p>
    <h3>The Blog Title is {{$single_blog_entry ->Article_Title}}
</h3>
</p>

<h4>The content is as follows:</h4>
<h6>
{{$single_blog_entry->Article_Content}}
</h6>


@endforeach
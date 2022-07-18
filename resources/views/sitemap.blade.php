<?php header("Content-type: application/xml");
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">

    {{-- static pages--}}
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ \Carbon\Carbon::now()->tz('Asia/Tehran')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>


    <url>
        <loc>{{ url('/about') }}</loc>
        <lastmod>{{ \Carbon\Carbon::now()->tz('Asia/Tehran')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>

    <url>
        <loc>{{ url('/gallery') }}</loc>
        <lastmod>{{ \Carbon\Carbon::now()->tz('Asia/Tehran')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>

    <url>
        <loc>{{ url('/blog') }}</loc>
        <lastmod>{{ \Carbon\Carbon::now()->tz('Asia/Tehran')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>

    <url>
        <loc>{{ url('/contact') }}</loc>
        <lastmod>{{ \Carbon\Carbon::now()->tz('Asia/Tehran')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>

    {{--blog--}}
    @foreach ($posts as $post)

    <url>
        <loc>{{ url('/') }}/blog/{{$post->id}}/{{str_replace(' ','-',$post->title)}}</loc>
        <lastmod>{{ $post->created_at->tz('Asia/Tehran')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
        <image:image>
            <image:loc>{{$post->image}}</image:loc>
            <image:title>{{$post->title}}</image:title>
        </image:image>
    </url>
    @endforeach
</urlset>
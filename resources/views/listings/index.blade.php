{{--   <h1><?php echo $heading; ?></h1>
<?php foreach($listings as $listing): ?>
 <h2><?php echo $listing['title']; ?></h2>
 <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?> 

// when you change the listings to listing blade you are able to clean the code a little bit
// the code in the above which is commented is cleaned and represented below   --}}

<x-layout>
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if(count($listings) == 0)
   <p>No Listings Found</p>
@endif

@foreach($listings as $listing)
<x-listing-card :listing="$listing" />
@endforeach
</div>

<div class="mt-6 p-4"></div>
   {{$listings->links()}}
</x-layout>
@extends('layouts.app')

@section('content')
@include('product-category.partials.section-nav', ['slug' => $response->data[0]->slug, 'parent' =>  $response->data[0]->parent->slug])
<div class="dark-layout product-category-story">
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 story-nav">
              @foreach($response->data[0]->product_category_stories as $story)
              <div>
                @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                  {{ $story->title_en }}
                @else
                  {{ $story->title }}
                @endif
              </div>
              @endforeach
          </div>
        </div>
      </div>
      <div class="story-index">
        <span>1</span>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 story-content-slick">
              @foreach($response->data[0]->product_category_stories as $story)
              <div>
                @if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en')
                  {{ $story->description_en }}
                @else
                  {{ $story->description }}
                @endif
              </div>
              @endforeach
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection
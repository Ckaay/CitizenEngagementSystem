@extends('frontend.layout.app')

@section('title', 'Complaint Status - Citizen Engagement')

@section('content')

<section class="page-heading">
  <div class="container">
    <div class="header-text">
      <h4 style="fonr-size:20px">{{ __('messages.status-title') }}</h4>
      <h1 style="font-size:20px">Track ID: <span style="color:rgba(198, 15, 214, 0.814)">{{ $complaint->tracking_id }}</span></h1>
    </div>
  </div>
</section>

<section class="more-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="section-heading">
          <h6>{{ __('messages.status-info') }}</h6>
          <h4>{{ __('messages.status-fullnames') }} <em>{{ $complaint->full_name }}</em></h4>
        </div>
        <p>{{ $complaint->feedback ?? 'No feedback yet. Please check again later.' }}</p>
      </div>

      <div class="col-lg-6 offset-lg-1 align-self-center">
        <div class="row">
          <div class="col-6">
            <div class="count-area-content">
               <div class="count-digi">{{ __('messages.status-value') }}</div>
              <div class="count-title">{{ ucfirst($complaint->status) }}</div>
            </div>
          </div>
          <div class="col-6">
            <div class="count-area-content">
              <div class="count-digi">{{ __('messages.status-form-email') }}</div>
              <div class="count-title">{{ $complaint->email }}</div>
            </div>
          </div>
          <div class="col-6">
            <div class="count-area-content">
              <div class="count-digi">{{ __('messages.status-form-category') }}</div>
              <div class="count-title">{{ $complaint->category }}</div>
            </div>
          </div>
          <div class="col-6">
            <div class="count-area-content">
              <div class="count-digi">{{ __('messages.status-form-date') }}</div>
              <div class="count-title">{{ $complaint->created_at->format('d/m/Y') }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="{{ route('home') }}" class="btn btn-primary">← {{ __('messages.back-to-home') }}</a>
    </div>
  </div>
</section>

@endsection

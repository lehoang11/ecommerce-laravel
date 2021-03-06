<div class="row">
    <div class="col-xl-12">
        <div class="breadcrumb-holder">
            <ol class="breadcrumb float-left">
                @if (count($breadcrumbs) > 0)
                <li class="breadcrumb-item">{{$breadcrumbs['root']}}</li>
                @if($breadcrumbs['routeLink'])
                <li class="breadcrumb-item">{{$breadcrumbs['routeLink']}}</li>
                @endif
                <li class="breadcrumb-item active">{!!$breadcrumbs['actionLink']!!}</li>
                @else
                <li class="breadcrumb-item active">/</li>
                @endif
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->
<!-- error_message -->
@if (count($errors) > 0)
    <div class="alert alert-warning" role="alert">
      @foreach ($errors->all() as $error)
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span> </button>
      @endforeach
    </div>
@endif

        @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            {!! session('success') !!}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            {!! session('error') !!}
        </div>
        @endif
        @if(session('warning'))
        <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            {!! session('warning') !!}
        </div>
        @endif
        @if(session('info'))
        <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            {!! session('info') !!}
        </div>
        @endif
        @if (session('status'))
        <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            {!! session('status') !!}
        </div>
        @endif
        <!--/error_message -->

        <div class="col-xl-12" id="message_show"></div>

@extends("TTMobile.master-page")

@section('main-content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Thông Tin Liên Hệ</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{ route('index') }}">Home</a> / <span>Liên Hệ</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="beta-map">
		
    <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5177580566988!2d106.69916291411647!3d10.771600262229871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40a3b49e59%3A0xa1bd14e483a602db!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEvhu7kgdGh14bqtdCBDYW8gVGjhuq9uZw!5e0!3m2!1svi!2s!4v1597261135410!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        
        <div class="space50">&nbsp;</div>
        <div class="row">
            <div class="col-sm-8">
                <h2>Thông Tin Liên Hệ</h2>
                <div class="space20">&nbsp;</div>

                <h6 class="contact-title">Địa Chỉ</h6>
                <p>
                    65 Đường Huỳnh Thúc Kháng, Bến Nghé, Quận 1, <br>
                    Thành phố Hồ Chí Minh, Việt Nam <br>
                </p>
                <div class="space20">&nbsp;</div>
                <h6 class="contact-title">Số Điện Thoại</h6>
                <p>
                   086 296 9667
                </p>
                <div class="space20">&nbsp;</div>
                <h6 class="contact-title">Email</h6>
                <p>
                   ttmobile@gmail.com
                </p>
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection

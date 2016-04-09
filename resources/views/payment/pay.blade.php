@extends('base.master')

@section('content')
    <div class="text-center">
        {!! QrCode::encoding('UTF-8')->size(400)->generate("weixin：//wxpay/bizpayurl?appid=wx2421b1c4370ec43b&mch_id=10000100&nonce_str=f6808210402125e30663234f94c87a8c&product_id=1&time_stamp=1415949957&sign=512F68131DD251DA4A45DA79CC7EFE9D

") !!}
        <p>扫描我返回上一页</p>
    </div>
@endsection


@section('script')
    <script src="/js/pingpp-pc.js"></script>
    <script>
        var charge = {!! $charge !!};
        pingppPc.createPayment(charge,function (result,err) {
            //处理错误的信息
        });
    </script>
@endsection

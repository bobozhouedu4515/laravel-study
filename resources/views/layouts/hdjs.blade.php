<script>
    window.hdjs={
        //组件目录必须绝对路径
        base:'{{asset ('org')}}/hdjs',
        //上传文件后台地址
        uploader : '{{route ('util.uploader')}}?',
        //获取文件列表的后台地址
        filesLists : '{{route ('util.fileslists')}}?',
        //require.js配置项（可为空）
        requireJs:{paths:{},shim:{}},
    };
</script>

<script src="{{asset ('org')}}/hdjs/require.js"></script>
<script src="{{asset ('org')}}/hdjs/config.js"></script>

<div class="card" id="rule">
    <div class="card-body">
        <div class="form-group" >

            <label for="exampleInputEmail1">规则名称</label>
            <input type="text" v-model="rule.name"  class="form-control" id="exampleInputEmail1" placeholder="">
        </div>
        <div class="card">
            <div class="card-body" >
                {{--<div class="form-group" v-for="(v,k) in rule.keywords">--}}

                {{--<input type="text" v-model="v.key"  class="form-control" id="exampleInputEmail1" placeholder="">--}}
                {{--</div>--}}
                <label for="exampleInputEmail1">关键词</label>

                <div class="input-group mb-3" v-for="(v,k) in rule.keywords" >
                    <input type="text" v-model="v.key"  class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text" @click="del(k)"    style="cursor: pointer">删除</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-white" type="button" @click="add()" >添加关键词</button>
    </div>
    <textarea hidden name="rule" id="" cols="30" rows="10">@{{rule}}</textarea>
</div>
@push('js')
    <script>
        require(['vue'],function (Vue) {
            new  Vue({
                el:'#rule',
                data:{
                    message:1,
                    rule:{!! json_encode ($ruleData) !!}



                        // name:'',
                        // keywords:[{key:''}]


                },
                methods:{
                    add(){
                        this.rule.keywords.push({key:''})
                    },
                    del(k){
                        if (k>0) {
                            this.rule.keywords.splice(k,1)
                        }

                    }
                }
            })
        })
    </script>

@endpush

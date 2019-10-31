<!-- 电子产品 -->
{hkcms:position action="position" posid="2" order="listorder asc"}
                        {volist name="data" id="vo"}
<div class="container">
    <div class="cat-promote clearfix" style="float: left;">
        <div class="title">{$vo.data.title}</div>
        <div class="container">
            <div class="col-2 item">
                <div class="card">
                     <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title} width="400px" height="300px" />
                </div>
            </div>
            
        </div>
    </div>
</div>
{/volist}
                        {/hkcms:position}

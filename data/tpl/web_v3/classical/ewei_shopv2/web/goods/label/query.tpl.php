<?php defined('IN_IA') or exit('Access Denied');?><div style='max-height:500px;overflow:auto;min-width:850px;'>
    <div class="active" id="sut_shop">
        <span class="help-block" style="font-weight: bold;">您可以直接选择标签组或者选择您需要的标签</span>
        <?php  if(is_array($labels)) { foreach($labels as $row) { ?>
        <div class="page-header" style="padding:0;margin-bottom:10px;">
            <h4>
                <nav class="btn btn-default btn-sm btn-file" data-id="<?php  echo $row['id'];?>" style="font-weight:bold;">
                    <i class="fa fa-folder-open-o"></i> <?php  echo $row['label'];?>
                </nav>
            </h4>
            <div style="padding-left:15px;">
                <?php  if(is_array($row['labelname'])) { foreach($row['labelname'] as $item) { ?>
                <nav onclick='biz.selector.set(this, <?php  echo json_encode(array("id"=>$item,"labelname"=>$item))?>)'
                     data-title="<?php  echo $item;?>" class="btn btn-default btn-sm" title="<?php  echo $item;?>" style="margin-bottom:10px;">
                    <?php  echo $item;?>
                </nav>
                <?php  } } ?>
            </div>
        </div>

        <?php  } } ?>
        <?php  if(count($labels)<=0) { ?>
        <tr>
            <td colspan='2' align='center'>未找到商品</td>
        </tr>
        <?php  } ?>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $(".btn-file").on("click",function(){
           var id = $(this).attr("data-id");
            $.ajax({
                url:'<?php  echo webUrl("goods/label/labelfile")?>',
                data:"id="+id,
                type:'post',
                async : true, //默认为true 异步
                dataType:'json',
                error:function(){
                    alert('error');
                },
                success:function(data){
                    if(data.status>0){
                        var label = data.result.label;
                        for(var i in label){
                            biz.selector.set($("nav[data-title="+label[i]+"]"), {"id":label[i],"labelname":label[i]});
                        }
                    }else{
                        alert(data.result.message)
                    }
                    //biz.selector.set(this, {"id":"","labelname":""});
                }
            });
        });
    })
</script>

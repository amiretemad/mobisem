<?php
/* @var $this AddController */

$this->breadcrumbs = array(
  $this->module->id,
);
?>

<style>
    .middleVertical {
        vertical-align: middle !important;
    }

    .textLeft {
        text-align: left !important;
    }
</style>
<!-- page contents -->
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title bg_lg">
            <span class="icon">
                <i class="icon-signal"></i>
            </span>
            <h5> <?php echo get_class($this) . '->' . $this->action->id; ?></h5>
        </div>
        <div class="widget-content">
            <table class="table table-bordered table-striped with-check">
                <thead>
                <tr style="height: 40px;">
                    <th width="50%" class="middleVertical textLeft">Product Name</th>
                    <th width="20%" class="middleVertical textLeft">Product Price</th>
                    <th width="30%" class="middleVertical">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($productsInfo as $product) { ?>
                    <tr>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td>
                            <button type="button" class="btn btn-danger removeProduct" data-id="<?php echo $product['id']; ?>">
                                remove
                            </button>
                            <div class="ajaxLoader hidden">
                                <i class="icon icon-spinner icon-spin"></i>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script type="text/javascript">

    $(document).ready(function () {

        // Remove Product
        $(".removeProduct").on("click", function () {
            var $this = $(this);
            var id = parseInt($this.data("id"));
            if (!isNaN(id) && id > 0 && confirm("are you sure ?!")) {
                $.ajax({
                    type: "POST",
                    dataType: "JSON",
                    url: "<?php echo Yii::app()->createAbsoluteUrl($this->deleteProductUrl); ?>",
                    data: {productId: id},
                    cache: "false",
                    beforeSend: function () {
                        $this.addClass('hidden').closest("td").find(".ajaxLoader").removeClass("hidden");
                    },
                    success: function (data) {
                        if (data.hasOwnProperty("status") && data.status == true) {
                            $this.closest("tr").hide();
                        }
                    }, complete: function () {
                        $this.removeClass('hidden').closest("td").find(".ajaxLoader").addClass("hidden");
                    }
                });
            }
        });

    });

</script>
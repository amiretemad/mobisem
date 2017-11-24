<?php
/* @var $this IlanController */
/* @var $data Ilan */
?>


<tr>
    <td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?></td>
    <td><?php echo CHtml::encode($data->description); ?></td>
    <td><?php echo CHtml::encode($data->products->name); ?></td>
    <td><?php echo CHtml::encode($data->stock_count); ?></td>
    <td><?php echo CHtml::encode($data->users->email_address); ?></td>
    <td><?php echo date("Y/m/d",strtotime(CHtml::encode($data->create_date))); ?></td>
    <td><?php echo date("Y/m/d",strtotime(CHtml::encode($data->expire_date))); ?></td>
</tr>


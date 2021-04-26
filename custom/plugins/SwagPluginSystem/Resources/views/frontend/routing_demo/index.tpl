{extends file="parent:frontend/index/index.tpl"}







{*


{$delivery = ($sArticle.lieferung|date_format:"%Y%m%d")-($smarty.now|date_format:"%Y%m%d")}


{if ($delivery>0) }

    <p class="delivery--information">
                        <span class="delivery--text delivery--text-available ">
                            <i class="delivery--status-icon delivery--status-available"></i>
                            Delivery in  {$delivery} Days
                            {s name="DeliveryDataDelayed"}{/s}
                        </span>
    </p>
{/if}

{if ($delivery<0) }
    <p class="delivery--information">
                        <span class="delivery--text ">
                            <i class="delivery--status-icon delivery--status-not-available"></i>
                            Delivery Delyed by {$delivery} Days.

                        </span>
    </p>

{/if}

{if ($delivery==0) }

    <p class="delivery--information">
                        <span class="delivery--text delivery--text-available ">
                            <i class="delivery--status-icon delivery--status-available"></i>
                             Delivered on Same day.
                        </span>
    </p>



{/if}

{/block}
*}

{extends file="parent:frontend/routing_demonstration/index.tpl"}

{block name="frontend_index_sidebar"}

{/block}

{block name="frontend_index_content"}
    {$smarty.block.parent}
    <p>Here's some more text</p>

    <ul>
        {foreach $productNames as $productName}
            <li>{$productName}</li>
        {/foreach}
    </ul>

    {action module="widgets" controller="listing" action="topSeller"}
{/block}
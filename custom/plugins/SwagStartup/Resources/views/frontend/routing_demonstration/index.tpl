{extends file="parent:frontend/index/index.tpl"}

{block name="frontend_index_content"}

    <h1>Hello, I am the {$currentAction} action</h1>

    {foreach $productNames as $productName}
        <li>{$productName}</li>
    {/foreach}

    A
{/block}

<!DOCTYPE html>
<html lang="en">

{block name="backend/base/header"}
    {include file="backend/base/header.tpl"}
{/block}

  <body>
    {block name="backend/base/container"}
    <div class="container">

    {block name="backend/base/container_inner"}{/block}

    {action controller=index name=footer}

    </div>
    {/block}
  </body>
</html>

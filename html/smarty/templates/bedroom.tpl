{include file='header.tpl'}

<div class="container">
{foreach from=$bedrooms item='bedroom'}
    {if $bedroom.key == {$smarty.get.key}}
        <img src="{$bedroom['img']}" alt="Sample photo" class="room">
        <div class="desc-box">
        <p>{$bedroom['description']}</p>
        </div>
    {/if}
{/foreach}
</div>

{* footer *}
<div class="text-center p-3" style="background-color: #0D0000; color: #79717A;">
© 2022 Copyright:
<a style="color: #79717A;" href="/">Be-i Interiors</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>
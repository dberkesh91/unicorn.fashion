<div>
<div class="product_single">
    <p><?= $product['name'] ?></p>
    <p><?= $product['id'] ?></p>
</div>

<script type="text/javascript">
   var productId = <?php echo $product['id']; ?>;
</script>

<button class="btn btn-primary __addToCart">Dodaj u korpu</btn>
</div>
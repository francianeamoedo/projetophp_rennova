<script>
  document.querySelectorAll('.quantity-selector').forEach(function(selector) {
    const input = selector.querySelector('input');
    const minusBtn = selector.querySelector('button:first-child');
    const plusBtn = selector.querySelector('button:last-child');

    minusBtn.addEventListener('click', () => {
      let current = parseInt(input.value);
      if (current > 1) input.value = current - 1;
    });

    plusBtn.addEventListener('click', () => {
      input.value = parseInt(input.value) + 1;
    });
  });
</script>
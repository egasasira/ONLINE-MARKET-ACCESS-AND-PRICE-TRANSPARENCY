document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const productList = document.getElementById('product-list');
  
    form.addEventListener('submit', function(event) {
      event.preventDefault();
  
      const productName = document.getElementById('product-name').value;
      const productType = document.getElementById('product-type').value;
      const quantity = document.getElementById('quantity').value;
      const price = document.getElementById('price').value;
  
      const productItem = document.createElement('li');
      productItem.classList.add('product-item');
      productItem.innerHTML = `
        <strong>Product Name:</strong> ${productName}<br>
        <strong>Product Type:</strong> ${productType}<br>
        <strong>Quantity:</strong> ${quantity}<br>
        <strong>Price:</strong> ${price}
      `;
  
      productList.appendChild(productItem);
  
      form.reset();
    });
  });
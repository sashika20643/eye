<div class="loading-container">
    <div class="loading-progress">
      <div class="progress-bar"></div>
      <div class="count">1</div>
    </div>
    <div class="loading-text">Loading</div>
  </div>

  <!-- The rest of your HTML content goes here -->


  <!-- The rest of your HTML content goes here -->
<script>
    window.addEventListener('load', function() {
  let loadingContainer = document.querySelector('.loading-container');
  loadingContainer.style.display = 'none';
});

</script>
<script>
    let count = 1;
let progressBar = document.querySelector('.progress-bar');
let countText = document.querySelector('.count');

let interval = setInterval(function() {
  count++;
  progressBar.style.width = count + '%';
  countText.innerHTML = count;

  if (count === 100) {
    clearInterval(interval);
  }
}, 50);

</script>

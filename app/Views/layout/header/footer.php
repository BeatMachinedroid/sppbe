<footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-12 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="#" class="font-weight-bold" target="_blank">PT Karunia Ulul Azmi</a>
               
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/js/core/popper.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/core/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/plugins/chartjs.min.js'); ?>"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/js/argon-dashboard.min.js?v=2.0.4'); ?>"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
  <script>
    const tanggal = document.getElementById('tanggal');
    const form = document.getElementById('search');

    // Event listeners to trigger form submission on date change
    tanggal.addEventListener('change', submitFormOnChange);
    // endInput.addEventListener('change', submitFormOnChange);
    function submitFormOnChange() {
        form.submit();
    }
    
    
</script>
</body>

</html>
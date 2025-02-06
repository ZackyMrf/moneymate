<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/chart.js'); ?>"></script>

<footer class="footer text-center text-white" style="background: linear-gradient(135deg, #1e3c72, #2a5298); border-top: 3px solid rgba(255,255,255,0.1);">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <div class="row justify-content-center">
                <!-- Facebook -->
                <div class="col-auto">
                    <a href="" class="btn btn-circle btn-md m-1 social-btn" 
                       style="background: linear-gradient(45deg, #3b5998, #8b9dc3);">
                        <i class="fab fa-facebook-f fa-bounce" style="color: white;"></i>
                    </a>
                </div>
                
                <!-- X/Twitter -->
                <div class="col-auto">
                    <a href="https://x.com/zackymrf_/" class="btn btn-circle btn-md m-1 social-btn" 
                       style="background: linear-gradient(45deg, #1da1f2, #0d95e8);">
                        <i class="fa-brands fa-x-twitter fa-shake" style="color: white;"></i>
                    </a>
                </div>
                
                <!-- Instagram -->
                <div class="col-auto">
                    <a href="https://www.instagram.com/zackymrf/" class="btn btn-circle btn-md m-1 social-btn" 
                       style="background: linear-gradient(45deg, #e1306c, #fd1d1d);">
                        <i class="fab fa-instagram fa-flip" style="color: white;"></i>
                    </a>
                </div>
                
                <!-- LinkedIn -->
                <div class="col-auto">
                    <a href="https://www.linkedin.com/in/zackymrf/" class="btn btn-circle btn-md m-1 social-btn" 
                       style="background: linear-gradient(45deg, #0077b5, #005582);">
                        <i class="fab fa-linkedin-in fa-bounce" style="color: white;"></i>
                    </a>
                </div>
                
                <!-- GitHub -->
                <div class="col-auto">
                    <a href="https://github.com/zackymrf" class="btn btn-circle btn-md m-1 social-btn" 
                       style="background: linear-gradient(45deg, #333333, #6e5494);">
                        <i class="fab fa-github fa-shake" style="color: white;"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3 copyright-box" 
         style="background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(5px);">
        © 2025 Copyright by
        <a class="text-white hover-glow" href="#" style="text-decoration: none; font-weight: 600;">
            Zacky Mrf & rulfadev
        </a>
    </div>
</footer>

<style>
.social-btn {
    transition: all 0.3s ease;
    border: 2px solid rgba(255,255,255,0.1);
    position: relative;
    overflow: hidden;
}

.social-btn:hover {
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.social-btn i {
    transition: all 0.3s ease;
}

.social-btn:hover i {
    transform: scale(1.2);
}

.copyright-box {
    transition: background 0.3s ease;
}

.hover-glow {
    transition: all 0.3s ease;
    position: relative;
}

.hover-glow:hover {
    text-shadow: 0 0 10px rgba(255,255,255,0.5);
    transform: scale(1.05);
}

/* Animations */
.fa-bounce { animation: fa-bounce 2s infinite; }
.fa-shake { animation: fa-shake 2s infinite; }
.fa-flip { animation: fa-flip 2s infinite; }
</style>
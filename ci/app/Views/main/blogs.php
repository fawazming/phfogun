    <section class="wrapper bg-soft-primary">
      <div class="container pt-8 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-9 col-lg-8 col-xl-5 mx-auto">
            <h1 class="display-1 mb-3">Al Qudwa</h1>
            <p class="lead px-lg-5 px-xxl-8">Al Qudwa is a dynamic platform where we aim to enlighten, inspire, and engage our readers through insightful articles, thought-provoking discussions, and valuable resources.</p>
            <a href="about-alqudwa" class="btn btn-sm btn-primary rounded-pill">Read More</a>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto mt-n17">
            <div class="blog grid grid-view">
              <div class="row isotope gx-md-8 gy-8 mb-8">
                <?php foreach ($blogs as $key => $blog): ?>
                  <?php $re = '/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i';preg_match($re, $blog->content, $matches, PREG_OFFSET_CAPTURE, 0); $extractedIMG = $matches[1][0]; ?>
                  <?php $cleanText = preg_replace('/<(?:[^"\'>]|".*?"|\'.*?\')*>|<\/?[a-zA-Z]+\b[^>]*>|[\r\n\t]+/s', '', $blog->content);?>
                  <article class="item post col-md-6">
                    <div class="card">
                      <figure class="card-img-top overlay overlay-1 hover-scale"><a href="blog/<?=substr($blog->url, 29)?>"> <img src="<?=$extractedIMG?>" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                          <!-- /.post-category -->
                          <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog/<?=substr($blog->url, 29)?>"><?=$blog->title?></a></h2>
                          <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?=explode('T', $blog->updated)[0] ?></span></li>
                            
                          </ul>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          <p><?=substr($cleanText, 0, 200)?>...</p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /.post -->
                <?php endforeach ?>
                
              </div>
              <!-- /.row -->
            </div>
            <!-- /.blog -->
            <!-- <nav class="d-flex" aria-label="pagination">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                  </a>
                </li>
              </ul>
            </nav> -->
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
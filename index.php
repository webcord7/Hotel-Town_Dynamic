<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rehmani Hotel</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- icon bootstrap link  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- css file  -->
  <link rel="stylesheet" href="style.css">

  <!-- Poppins & Merienda fonts  -->
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 shadow-sm sticky-top ">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">
        <!-- <img src="images/logo.png" class="logo d-none d-lg-block d-xl-block d-xxl-block" alt=""> -->
        Rehmani Hotel
      </a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">About</a>
          </li>


        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
            LogIn
          </button>
        </div>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
  </nav>


  <!-- LogIn Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
            <button type="rest" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-4">

              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">LogIn</button>
              <a href="javascript: void(0)">Forgot Password?</a>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Register Modal -->

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registeration</h5>
            <button type="rest" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with your ID Card that will be required during check-in.</span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1" ></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="text-center  my-1">
              <button type="submit" class="btn btn-dark shadow-none">Register</button>

                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos esse nemo ab doloribus vitae nulla modi quod laborum praesentium, amet consequuntur fugiat. Ratione, vero nesciunt eaque adipisci, doloribus tempora quidem iusto suscipit labore sapiente voluptates? Beatae amet velit libero expedita cum corporis est nulla sed sequi facere, nihil itaque mollitia magni vel. Voluptatibus veritatis amet aliquam quae, et consectetur in laborum, nemo sit quod quasi animi tempora ad explicabo! Ipsum, vel quos! Aliquam, autem. Ipsum non enim quo qui neque sunt labore velit in reiciendis quos eaque laboriosam amet id numquam, illum perferendis provident fuga consectetur ullam, odio fugit. Odio provident quam ratione soluta aperiam! Dicta soluta sequi officia voluptatum numquam blanditiis debitis provident similique. Magnam animi sapiente odio omnis facilis deleniti, cumque explicabo eum, consequuntur ab consequatur eius culpa sint. Repudiandae hic vero ab magnam quos nemo dolor eum, molestias aspernatur corporis! Error quisquam ad quibusdam saepe esse quis cum optio ipsam, ullam nam quasi cupiditate consequatur sequi pariatur velit nisi et id? Eligendi praesentium quasi nemo! Cumque odio qui illo, minima neque voluptatum ipsa maxime at. Laborum ipsum harum assumenda vero! Perferendis possimus cupiditate, eligendi eius dolor labore sunt natus officia ad, minus inventore voluptate, molestias ut illum minima amet voluptatum autem? Nemo autem error fugit animi, sint ullam pariatur voluptatum est excepturi consequuntur iusto laborum nihil dolorum possimus earum reiciendis nisi repellendus culpa! Inventore minima vitae quod ratione enim vero voluptates, vel iure accusamus laboriosam maxime iusto neque nostrum saepe tempore modi delectus id. Quidem tenetur nisi voluptate culpa quibusdam, laborum iste quis commodi praesentium esse nulla nemo asperiores officiis nesciunt corrupti neque. Magnam, expedita temporibus magni quo itaque tempore qui reprehenderit voluptate obcaecati ea, aliquam sunt molestias unde quae aspernatur ratione aperiam, nemo rerum saepe quibusdam veniam veritatis! Corrupti sit quaerat cupiditate consequuntur dolore autem sapiente doloribus dolor, iste beatae possimus quam inventore aliquid quas! Eos vitae laboriosam non facilis quae ipsum, illo doloribus eligendi rem odio voluptatum laudantium optio. Placeat nemo quisquam necessitatibus soluta dicta tempora. Quam, doloremque earum! Modi et quasi quae numquam, expedita nulla voluptatem. Doloremque iure adipisci corporis tenetur error voluptatibus ipsam corrupti aperiam, iusto assumenda, eaque laudantium facere culpa eum cupiditate quos nobis nam? Quae a corrupti aspernatur laboriosam doloremque libero cumque in quidem tempore suscipit, at asperiores facilis veritatis laborum consectetur fuga non eveniet minima perspiciatis sit. Sapiente, est. Aliquid, omnis ad non adipisci porro dolorem consequuntur possimus soluta, quo praesentium reiciendis veniam nostrum. Quam enim quas, doloremque dicta quis voluptate! Quaerat at aliquam facere voluptas odio similique debitis animi possimus officia, commodi minus corrupti tempore iste fuga tenetur soluta in autem dolorum, cum nesciunt vitae quia. Nostrum tempora voluptatem iure ducimus ab numquam laborum consequuntur, autem sed ex, mollitia quod deserunt ipsa ipsum suscipit! Non cumque error recusandae, sequi maiores rem quae aliquam, adipisci officia molestiae esse consequuntur iure minima corporis aliquid unde. Suscipit nemo ea fugit hic eos unde nobis, recusandae error possimus reiciendis. Rerum, minus fugiat molestiae ipsum pariatur consectetur commodi quidem animi libero repudiandae. Fugit exercitationem illum aperiam iste id suscipit hic, recusandae similique deleniti est autem, repellat tenetur obcaecati neque placeat vitae, eligendi doloribus accusantium deserunt dolor tempora fugiat commodi! Totam atque hic eos. Illo iusto eos a asperiores autem voluptate, tenetur in quidem, distinctio voluptatibus odit maxime aliquam neque quasi ea placeat expedita deleniti dignissimos error minima, velit aut. Beatae excepturi, consectetur nisi voluptatum eligendi ex rerum iste? Beatae sit fugit velit officia sint cumque, veniam voluptas totam omnis placeat quia architecto fuga illo quidem! Quia repellendus corporis repudiandae! Deleniti odio dolorum voluptatum eveniet laboriosam est ipsam voluptatibus! Fugiat officiis porro voluptatibus ullam voluptate? Atque exercitationem ipsa ad? Perspiciatis repudiandae necessitatibus porro ipsa rem, consequatur consequuntur quae voluptates odit debitis dolorum laboriosam dolor molestiae inventore doloribus sint illo. Adipisci aliquid itaque placeat! Vitae ut recusandae eum totam modi nam mollitia culpa quo, aliquid magni cupiditate? Quis necessitatibus velit excepturi vel sequi saepe, a aperiam suscipit quo quos ab assumenda distinctio magnam natus nihil cupiditate numquam molestias ratione praesentium facilis alias doloremque voluptate. Fugit incidunt facere saepe corporis tempora ducimus debitis enim consequuntur doloribus! Cupiditate reiciendis ab exercitationem architecto voluptatem molestias, animi quidem perspiciatis quisquam quo, nostrum itaque iusto consequatur voluptates saepe dolorem, doloribus temporibus. Nostrum ipsa consequuntur minima obcaecati excepturi provident ratione quis architecto animi fugiat, porro itaque fuga blanditiis tempore corporis praesentium aperiam voluptate? Perferendis fuga sapiente numquam suscipit eum fugiat id voluptatum dicta eaque in blanditiis saepe ipsa adipisci voluptate laboriosam vitae consequuntur sed consectetur at dolorem omnis, cum atque ad dolore. Magnam illo repellat aperiam dolor architecto placeat iusto totam, voluptas perferendis optio soluta dolorem veniam temporibus molestiae similique minus earum, in debitis incidunt! Aspernatur adipisci id iusto dolorem architecto nam debitis. Odio minus cupiditate culpa tempore magnam qui dolore impedit, corrupti ea rem atque veritatis incidunt deserunt. Rem, fugiat quae! Quas hic tempore tenetur. Sed quisquam ipsum, quasi corporis commodi dolore autem corrupti quod vel, harum id aut. Et esse quidem pariatur, minima facilis mollitia impedit reprehenderit nulla cumque, aperiam possimus deleniti suscipit repudiandae in fugit! Est blanditiis sunt neque molestias provident! Facilis ducimus deserunt beatae animi assumenda, dolorem fuga commodi iste voluptatem, eveniet alias. Omnis sint molestiae sunt sequi veniam enim soluta natus repudiandae unde provident dolorum debitis ad pariatur quam officiis animi, maxime distinctio dolor sapiente dolore aut velit sed? Fugit laudantium odit numquam, ipsa, obcaecati, animi fugiat labore asperiores hic temporibus quibusdam minima harum! Exercitationem quam quasi vitae nesciunt, laborum accusantium sint beatae magni quia provident? Voluptate maiores corporis ea veritatis aut quaerat obcaecati eveniet repellendus debitis vero rerum iste quisquam, accusantium numquam modi inventore laudantium magnam cupiditate natus provident eum fuga dolores. Qui reiciendis corporis voluptatum impedit, voluptates cumque ipsa, ex asperiores odio laudantium libero laborum perspiciatis optio placeat! Animi rem fugit sapiente consequatur quis sed enim atque sit dignissimos magni explicabo aut alias perferendis libero ex quos maxime quisquam doloribus, nobis inventore recusandae? Pariatur ullam, dolorum, consequatur velit illo aspernatur harum voluptates ipsa magnam enim eum odit vel accusamus? Dolores rerum, totam soluta dignissimos voluptas deleniti. Ipsum, voluptatibus officia? Illo harum cumque, accusamus veritatis blanditiis iusto nisi est dolore esse distinctio vitae adipisci odit, ratione velit voluptates eveniet. Praesentium accusamus incidunt consequuntur rem, eligendi aliquam repellat expedita suscipit deserunt modi soluta temporibus accusantium quia cumque reiciendis consectetur nobis! Temporibus similique sed facilis alias, minus assumenda animi repudiandae molestiae mollitia, facere quisquam magnam, quibusdam quaerat. Saepe maiores debitis voluptatum? Illum harum, qui aspernatur blanditiis error sit tempora doloribus consectetur id distinctio temporibus, necessitatibus laboriosam velit dolores quod deserunt maxime omnis ipsa quo excepturi? Incidunt provident numquam perferendis illo autem quibusdam minus quam eligendi repellat fuga ad, tenetur tempore voluptate quasi harum porro cupiditate beatae possimus molestias. Explicabo, alias dolorum quibusdam excepturi vitae culpa unde quidem. Architecto animi adipisci alias earum, facere quos. Aut non excepturi dolore consequuntur modi soluta quas et cupiditate expedita, dolorem ut fugiat doloremque quam aliquid iste iusto voluptas ratione tenetur repellendus nesciunt nihil? Voluptas modi laboriosam facere quo aut incidunt culpa, et dolorum, non in, illum eligendi exercitationem. Debitis ut quam eveniet blanditiis voluptas, asperiores maiores libero quibusdam? Incidunt ut natus pariatur dolor doloribus perspiciatis voluptate accusamus debitis magni necessitatibus sed architecto minus ab aut nam aspernatur error, amet quisquam a fugit, tempora eveniet. Illum, similique eum natus quam at, voluptates id omnis optio aliquid voluptas labore voluptatum. Beatae, expedita rerum culpa itaque perspiciatis atque quisquam, natus reiciendis iusto saepe dolore cum optio accusamus ratione perferendis blanditiis excepturi animi deleniti. Porro tenetur magni cumque ab optio quasi vitae rem magnam dolore aspernatur molestiae illum esse dignissimos quaerat aliquam omnis eum, inventore aut reprehenderit molestias. Cupiditate dolorem laboriosam magnam, nostrum veniam nam, tempora reprehenderit, praesentium distinctio similique molestiae! Inventore quisquam commodi accusamus tenetur a quidem repellendus deleniti earum rem tempora deserunt minus adipisci consectetur, doloremque non placeat perferendis maxime quo! Voluptatum nostrum blanditiis iure enim, numquam dolorem commodi dignissimos harum est velit saepe magnam nobis earum ipsam! Officia dolorem animi incidunt architecto magnam exercitationem, possimus consequuntur, cupiditate perferendis repellat itaque sunt quaerat ducimus labore aliquid nisi? Magni sit ipsam eligendi officiis, corporis cupiditate non asperiores maiores est explicabo. Iure vitae, minima exercitationem est, ipsam dolores perspiciatis laboriosam alias ea quo reiciendis, cupiditate quae. Atque veritatis ipsa quisquam, autem laudantium dicta soluta aperiam commodi mollitia, delectus quasi perspiciatis dolores, maiores nobis officia at sunt aut sit aliquid earum similique corrupti nisi? Consectetur, labore. Fugiat aut beatae illum earum eveniet unde laborum delectus ullam, cumque accusamus, possimus error, commodi velit perferendis itaque in ut magnam! Quos quasi quod fugiat itaque expedita cupiditate amet, saepe in reiciendis ad odit omnis commodi nobis unde, qui cum suscipit nesciunt iure magni veritatis corporis harum excepturi. Quidem velit sequi distinctio ut qui possimus magnam inventore fugit voluptas quam molestias tenetur soluta hic repellendus facere, dolor suscipit adipisci atque quo illum ipsam minima placeat. Sed ratione obcaecati earum explicabo corporis nisi ipsum vero, asperiores esse dignissimos expedita minima reiciendis culpa nemo placeat dolore quia! Reprehenderit praesentium, neque officiis accusamus suscipit, ad expedita, voluptatum nobis similique illum quae accusantium quod a consequuntur corporis vel maxime iste dolorem distinctio inventore alias reiciendis? Tempore unde, ex porro impedit sequi culpa sunt temporibus omnis doloribus? Quia fugiat nobis omnis, dolorem iste voluptate minus fuga expedita dolore nulla eum. Architecto doloribus, error hic quaerat dolore, earum at illo, ut tenetur rem et obcaecati! Tenetur, culpa. Reprehenderit in cumque autem corrupti maxime. Quibusdam sint ducimus laboriosam, voluptatum placeat quia! Id asperiores, voluptas omnis quibusdam eos ea nulla adipisci autem commodi necessitatibus atque iste impedit laudantium perspiciatis hic! Facilis repudiandae minus quibusdam ab aliquam, iusto pariatur tempore ut facere fugit ullam ratione illo, adipisci tempora modi placeat quo inventore, molestias debitis eius deserunt. Temporibus, suscipit optio accusantium culpa minus a voluptatem qui, commodi mollitia tempore maiores vel nesciunt dignissimos molestiae quo praesentium quia omnis deleniti! Doloremque cum pariatur beatae esse a, quae aliquid rerum obcaecati iure architecto amet eum labore blanditiis non nihil fugit repellat aspernatur ut vero nesciunt. Asperiores facere quis, beatae numquam, odio nemo repellendus sapiente possimus, vel sequi omnis nobis dolorum. Nulla harum, laborum id enim quam veniam quaerat neque illo. Quo iste, corporis, est nobis dignissimos, quibusdam maxime rem assumenda quos similique sunt laudantium expedita in necessitatibus veniam nisi velit? Odio voluptatem placeat sint hic atque aliquid culpa adipisci recusandae ad nisi excepturi iusto in libero, aliquam architecto iste. Quia, repellendus culpa. Ipsa ullam porro beatae sunt dolore. Aliquid corporis rem tempore, quos delectus impedit accusamus nemo magni explicabo hic dolore fugiat, nihil quod. Neque quos ea iste necessitatibus consectetur, saepe quasi, doloremque incidunt blanditiis labore asperiores soluta inventore dolor, eligendi aliquam repellendus quas libero voluptatem magni eos facere! Tenetur corporis velit beatae ipsa esse deleniti, ad odio, minima dolorem nostrum rem reiciendis impedit eligendi sunt doloribus eos atque! Facilis asperiores aspernatur architecto commodi officiis at quas laboriosam deleniti libero unde, quidem, recusandae sunt voluptates ullam ab deserunt vero odit fugiat facere expedita! Quam repellendus culpa modi labore? Accusamus delectus rerum, ipsam eum ratione similique ex asperiores dolore quia eos fuga laborum architecto molestias eaque, eveniet non aliquid? Amet sequi magni natus. Tempore aut quod quasi sunt voluptates recusandae eum quis facilis laboriosam quos perferendis earum impedit odio perspiciatis fugit rerum, voluptate quisquam autem porro tenetur id debitis? Veritatis nulla natus amet quaerat enim accusamus veniam obcaecati aliquid numquam voluptates debitis est perferendis vero minus cupiditate aut, a delectus dicta molestiae. Ex odit laborum animi quas repellat deleniti ratione distinctio excepturi, repudiandae laudantium minima aspernatur ut autem enim, fugit dicta nesciunt voluptates ullam natus tempora incidunt id! Illum sapiente consequuntur odio velit ut! Ad qui rerum doloremque, aspernatur quidem tenetur nesciunt, illo laudantium iusto maiores officiis natus, necessitatibus dolor! Repudiandae provident iure error saepe ea voluptate fuga, dignissimos delectus itaque pariatur voluptates deleniti laudantium esse distinctio dolores, non enim libero totam obcaecati! Dolores illo natus facilis consectetur sit asperiores omnis, soluta eligendi voluptates iste esse praesentium veritatis itaque ut voluptatibus id voluptas aliquam consequuntur suscipit rem. Similique magni earum, officiis aspernatur architecto quam consequuntur atque, ad quia deserunt aliquam minima tenetur deleniti maiores delectus, autem ipsa magnam. Corrupti, eveniet dicta ullam debitis asperiores veritatis. Numquam veniam commodi distinctio doloremque voluptatem in. Est eius ipsum exercitationem obcaecati numquam quae aspernatur nostrum autem, iusto laboriosam? Repellat illo, dolor suscipit, enim voluptatum voluptas, facere consequatur ducimus sapiente ullam nostrum corrupti? Ratione, placeat dolore neque dignissimos quaerat ea provident omnis repudiandae animi recusandae labore at natus dolorem unde consequatur dolores aut sint atque. Deleniti iusto, possimus mollitia facere incidunt cupiditate illo voluptate cumque doloremque perspiciatis vitae! Consectetur in obcaecati cupiditate ducimus voluptatibus at, reiciendis error tempore mollitia voluptates consequatur quaerat. Hic optio itaque eos minus, explicabo harum quasi, fugit ducimus dolorum iure pariatur qui placeat inventore velit, obcaecati voluptate ratione. At, dolorem unde aperiam, velit molestiae ad dolorum qui vitae ullam ea eveniet, animi sequi? Laborum quos odit omnis eveniet placeat. Cupiditate, deleniti voluptatibus voluptatum voluptatem quis facere eius a maiores sed molestias inventore voluptas excepturi, deserunt explicabo possimus et quidem hic, ad esse quibusdam! Soluta, ipsum tenetur? Esse autem porro saepe nulla et consequuntur aut est, quo adipisci quaerat error eaque molestiae quod ipsa nostrum maxime optio! Blanditiis, doloremque? Dolores assumenda sit officiis tempore, consectetur autem, nisi officia laudantium itaque pariatur ex eaque. Recusandae ratione laborum autem ipsum quisquam! Magni veritatis amet cumque pariatur blanditiis voluptate repellat exercitationem, dolor ad consequatur aliquam cupiditate beatae error odio. Aperiam magnam facere rerum voluptatibus quisquam. Totam, in sunt qui est dolorem cupiditate voluptatibus dolorum accusamus fuga incidunt. Ipsum, dicta qui. Officiis hic accusamus quas expedita cum voluptatum a mollitia qui voluptatem quae voluptates odit obcaecati corrupti saepe error ducimus excepturi optio sed, amet inventore vero dolorum placeat doloribus dicta. Inventore saepe iusto eligendi asperiores similique fugiat modi facere, ratione autem ex minus nam aspernatur beatae velit pariatur! Cum dignissimos voluptas odit id maiores hic odio ex, ipsa maxime necessitatibus!





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
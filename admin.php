<?php include('include/header.php');?>
<style>
    .profile-img{
        width:200px;
    }
    .skill li{
        background-color:white;
        border-bottom: 2px solid #ccc;
    }
</style>
<div class="container">
  <div class="row">
    <div class="col-3">
       <img src="custo.jpg" class="profile-img">
       <h5>Anjali Sharma</h5>
    </div>
    <div class="col-9">
      <div class="card border-primary">
        <div class="card-header">
            About 
            <a href="#" style="float:right;"  data-bs-toggle="modal" data-bs-target="#aboutModal">Edit</a>
        </div>
        <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem explicabo omnis expedita obcaecati delectus voluptate ea quibusdam voluptates amet, id architecto illum optio eaque nobis, quisquam ullam ipsa aut quas.
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-3">
         <div class="row">
        <div class="card border-info">
            <div class="card-header">
                Skils
                <a href="#" style="float:right;" data-bs-toggle="modal" data-bs-target="#skillmodal">Add</a>
            </div>
            <div class="card-body">
            <ul class="list-group skill">
                <li class="list-group-item">Web design</li>
                <li class="list-group-item">Web Development with PHP</li>
                <li class="list-group-item">Java </li>
                <li class="list-group-item">C/C++</li>
                <li class="list-group-item">Android Mobile application</li>
                </ul>
            </div>
        </div>
        </div>
        <br/>
        <div class="row">
        <div class="card border-success">
            <div class="card-header">
                Education
                <a href="#" style="float:right;" data-bs-toggle="modal" data-bs-target="#educationmodal">Add</a>
            </div>
            <div class="card-body">
            <ul class="list-group skill">
                <li class="list-group-item">CSIT</li>
                <li class="list-group-item">+2</li>
                </ul>
            </div>
        </div>
        </div>
    </div>



    <div class="col-md-8 md-offset-1">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Experience
                    <a href="#" style="float:right;" data-bs-toggle="modal" data-bs-target="#expmodal">Add</a>
                </div>
                <div class="card-body">
                       <div class="exp border-info">
                       <h5>Java Developer</h5>
                        <hr/>
                        <small>ABC Company</small><br/><small>Join Date: 2021/01/01</small> , <small>Left Date: 2022/02/02</small>
                       </div>
                       <div class="exp border-info">
                       <h5>Java Developer</h5>
                        <hr/>
                        <small>ABC Company</small><br/><small>Join Date: 2021/01/01</small> , <small>Left Date: 2022/02/02</small>
                       </div>
                       <div class="exp border-info">
                       <h5>Java Developer</h5>
                        <hr/>
                        <small>ABC Company</small><br/><small>Join Date: 2021/01/01</small> , <small>Left Date: 2022/02/02</small>
                       </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<!--All are modal -->
<div class="modal fade" id="aboutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">About</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<!--skill modal -->
<div class="modal fade" id="skillmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Skill</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<!--education modal -->
<div class="modal fade" id="educationmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Skill</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


<!--experience modal -->
<div class="modal fade" id="expmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Experience</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<?php include('include/footer.php');?>
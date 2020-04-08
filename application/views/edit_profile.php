<style>
    .share-text-box {
        align-items: center;
        margin-bottom: 20px;
    }
    .share-text-field {
        width: 60% !important;
        margin: 0 auto !important;
    }

    .textbox {
        background-color: #f1f1f1;
        -webkit-box-shadow: inset 0px 1px 10px 0px rgba(85, 85, 85, 0.2);
        box-shadow: inset 0px 1px 10px 0px rgba(85, 85, 85, 0.2);
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        transition: all 0.4s ease;
        width: 60% !important;
        margin: 0 auto !important;
    }
    .btn-share {
        
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        line-height: 1;
        padding: 11px 25px;
        margin-right: 2px;
        border-radius: 40px;
        background-color: #dc4734;
        text-transform: uppercase;
        
    }

    .btn-share:hover {
        background-color: #333333;
        color: #fff;
    }
    .avatar-upload {
    position: relative;
    max-width: 205px;
    margin: 50px auto;
    }
    .avatar-upload .avatar-edit {
    position: absolute;
    right: 12px;
    z-index: 1;
    top: 10px;
    }
    .avatar-upload .avatar-edit input {
    display: none;
    }
    .avatar-upload .avatar-edit input + label {
    display: inline-block;
    width: 34px;
    height: 34px;
    margin-bottom: 0;
    border-radius: 100%;
    background: #FFFFFF;
    border: 1px solid transparent;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    font-weight: normal;
    transition: all 0.2s ease-in-out;
    }
    .avatar-upload .avatar-edit input + label:hover {
    background: #f1f1f1;
    border-color: #d6d6d6;
    }
    .avatar-upload .avatar-edit input + label:after {
    content: "\f040";
    font-family: 'FontAwesome';
    color: #757575;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    text-align: center;
    margin: auto;
    }
    .avatar-upload .avatar-preview {
    width: 192px;
    height: 192px;
    position: relative;
    border-radius: 100%;
    border: 6px solid #F8F8F8;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }
    .avatar-upload .avatar-preview > div {
    width: 100%;
    height: 100%;
    border-radius: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    }
    .avatar-upload-c {
  position: relative;
  max-width: 350px;
  margin: 50px auto;
}
.avatar-upload-c .avatar-edit {
  position: absolute;
  right: 0;
  z-index: 1;
  top: 10px;
}
.avatar-upload-c .avatar-edit input {
  display: none;
}
.avatar-upload-c .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload-c .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload-c .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload-c .avatar-preview {
  width: 350px;
  height: 192px;
  position: relative;
  border-radius: 5%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload-c .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 0%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}


</style>
<main>
    <div class="main-wrapper pt-80">
        <div class="edit-form">
            <div class="row" style="margin: 0px;">
                <div class="col-md-3">
                    <div class="card">
                        <h4>Sidebar</h4>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <form action="<?php echo base_url('user/edit_profile/'); ?>" enctype="multipart/form-data"  method="post">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' name="profile_image" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <?php if($user->profile_image != "") { ?>
                                        
                                        <div id="imagePreview" style="background-image: url('<?php echo base_url('uploads/'.$user->profile_image); ?>');">
                                        </div>
                                    <?php } else { ?>
                                    <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="share-text-box d-flex">
                                <label for="" style="width: 7%;">Name</label>
                                <input type="text" name="name" value="<?php echo $user->name; ?>" class="share-text-field" aria-disabled="true" placeholder="Your Name" />
                            </div>
                            <div class="share-text-box d-flex">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control textbox" placeholder="Say Something about yourself" cols="30" rows="10"><?php echo $user->description; ?></textarea>
                            </div> 
                            <div class="share-text-box d-flex">
                                <label for="">Cover Image</label>
                                <div class="avatar-upload-c">
                                <div class="avatar-edit">
                                    <input type='file' name="cover" id="imageUpload-c" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload-c"></label>
                                </div>
                                <div class="avatar-preview">
                                <?php if($user->profile_image != "") { ?>
                                    <div id="imagePreview-c" style="background-image: url('<?php echo base_url('uploads/'.$user->cover); ?>');">
                                    </div>
                                    <?php } else { ?>
                                    <div id="imagePreview-c" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            </div>


                            <button class="btn-share" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</main>

<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

function readURLc(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview-c').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview-c').hide();
            $('#imagePreview-c').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload-c").change(function() {
    readURLc(this);
});
</script>
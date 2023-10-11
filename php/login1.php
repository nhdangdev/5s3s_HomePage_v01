<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include_once('./config.php');
        $extend_head = '<link rel="stylesheet" href="'.$cms_asset_path.'/css/login1.css" />';
        include_once($cms_views_path.'/head.php');
    ?>
    <title>Document</title>
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <?php include_once("./loading_screen.php") ?>
    <div class="grid" style="background-image: linear-gradient(#E56C67, #56336D,#273067, #0F1434);">
      <div class="container">
        <!-- begin: login form -->
        <form class="col">
            <div class="row" style="margin-bottom: var(--margin-bottom);">
                <div class="col" style="flex:1;display: flex; align-items: center;"><hr style="width: 100%"></div>
                <div class="col">
                    <div class="circle-border">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg"  height="3em" viewBox="0 0 448 512">
                                <path 
                                    fill="#D2D2D2" 
                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="col" style="flex:1;display: flex; align-items: center;"><hr style="width: 100%"></div>
            </div>
          <!-- user name input -->
          <div class="row form__group">
            <div  class="input__icon">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg"  height="1em" viewBox="0 0 448 512">
                    <path 
                        fill="#D2D2D2" 
                        d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/>
                </svg>
                </i>
            </div>
            <input class="form__input" type="text" placeholder="USERNAME" />
          </div>

          <!-- password input -->
          <div class="row form__group">
            <div class="input__icon">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <path 
                            fill="#D2D2D2" 
                            d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/>
                    </svg>
                </i>
            </div>
            <input
              class="form__input"
              type="password"
              placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"
            />
          </div>

          <!-- submit button -->
          <div class="row">
            <input 
            class="form__input submit-btn "
            type="submit" />
          </div>

          <!-- remember me check box and forget password -->
          <div class="row" style = "margin-bottom: var(--margin-bottom);">
            <div class="col l-6 c-6" style="padding-left: 0; display: flex; align-items: center;">
              <div class="checkbox-custom">
                <input type="checkbox" id="checkbox" />
                <label for="checkbox"></label>
              </div>
              <span class= "text" style="margin-left: 30px;">Remember me</span>
            </div>
            <div class="col l-6 c-6" style="text-align: right; padding-right: 0; line-height: 24px;">
              <a><i>Forgot your password?</i></a>
            </div>
          </div>          
        </form>
        <!-- end: login form -->
        <hr>
      </div>
    </div>
  </body>
</html>

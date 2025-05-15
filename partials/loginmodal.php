 <!-- Button trigger modal -->

 <!-- Modal -->
 <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id=" LoginModalLabel">Login to iDiscuss</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="/forum/partials/_handleLogin.php" method="post">
                 <div class="modal-body">

                     <div class="form-group">
                         <label for="loginEmail">Username</label>
                         <input type="text" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
                         <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                     </div>
                     <div class="form-group">
                         <label for="loginPass">Password</label>
                         <input type="password" class="form-control" id="loginPass" name="loginPass">
                     </div>
                     <!-- <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1">Check me out</label>
                     </div> -->
                     <button type="submit" class="btn btn-primary">Submit</button>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                 </div>
             </form>
         </div>
     </div>
 </div>
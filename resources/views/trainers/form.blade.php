@csrf
            <div class="form-group ">
              <label for="nametrainer">Name trainer</label>
              <input type="text" class="form-control"  name="name" id="nametrainer">

            </div>


            <div class="form-group ">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <div class="form-group">

               <label for="slug">add your slug</label>
               <input type="text" class="form-control" id="slug" name="slug">
            </div>

            <div class="form-group">
               <label for="avatar">Avatar Trainer</label>
                <input type="file" id="avatar"  name="avatar">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <div class="form-group">
                <label for="description">description trainer
               <textarea id="description"class="form-control" name="description"></textarea>
            </div>

            <button class="btn btn-block btn-primary">Create</button>
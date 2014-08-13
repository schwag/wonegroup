
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="name" name="name" class="form-control" id="inputName" placeholder="Enter name" required pattern="[a-zA-Z0-9 ]+"/>
  </div>
    <div class="form-group" style="display:none;">
    <label for="otherName">Name</label>
    <input type="name" name="othername" class="form-control" id="otherName" placeholder="other name" />
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required />
  </div>
  <div class="form-group">
    <label for="inputPhone">Phone Number</label>
    <input type="tel" name="phone" class="form-control" id="inputPhone" placeholder="Phone Number" required pattern="[0-9 /./-]+"/>
  </div>
  <div class="form-group">
    <label for="inputMessage">Message</label>
    <textarea class="form-control" id="inputMessage" name="message" placeholder="Message" required ></textarea>
  </div>
  <button id="formSubmit" type="submit" class="btn btn-success formButton" name="submit">Submit</button>




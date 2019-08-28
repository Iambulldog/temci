
<style>
    .newuser:hover {
        cursor: pointer;
        color: #19bc9c;
    }
    .divmain{
        width: 100%;
    }
    .field-n{
        padding-left: 5%;
        width:45%;
        float: left;
    }
 @media (max-width: 480px) {
    .divmain{
        width: 100%;
    }
    .field-n .login-f{
        padding-left: 5%;
        width:80%;
        float: left;
    }
}
.message_pass{
    padding-left:5%;
    width:70%;
    
}
.message_pass span{
    font-size: 0.78em;
}
}
</style>

<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<div class="main" id="user_all">



    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="widget widget-nopad">
                        <div class="widget-header"> <i class="icon-list-alt"></i>
                            <h3> รายชื่อทั้งหมด </h3>
                            <i class="icon-user newuser" data-toggle="modal" data-target="#myModal">+ เพิ่มผู้ใช้</i>
                        </div>
                        <div class="widget-content">

                        

                            <div class="search-wrapper">
                                <select class="" name="state" id="maxRows">                                                       
                                    <option value="5" >5</option>
                                    <option value="10" >10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="5000" >Show ALL Rows</option> 
                                 </select>
                                <input type="text" v-model="search" placeholder="Search title.."/>
                                   
                            </div>
                            <table class="table table-striped table-bordered " id="Tabla">
                                <thead>
                                    <tr class="fc-grid">
                                        <th> ลำดับ </th>
                                        <th>ชื่อผู้ใช้</th>
                                        <th>ชื่อ</th>
                                        <th>สกุล</th>
                                        <th> ชื่อเล่น</th>
                                        <th>โทร</th>
                                        <th>จัดการรหัสผ่าน</th>
                                        <th>เข้าใช้ล่าสุด</th>
                                        <th>ไอพี</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(u,i) in filteredList">
                                        <td style="text-align:center;">{{i+1}}</td>
                                        <td> {{u.username}} </td>
                                        <td> {{u.name}} </td>
                                        <td> {{u.sername}} </td>
                                        <td> {{u.nickname}} </td>
                                        <td> {{u.tel}} </td>
                                        <td style="text-align:center;"> <i class="icon-refresh newuser"></i></td>
                                        <td> {{u.last_login}} </td>
                                        <td> {{u.last_ip}} </td>
                                    </tr>
                                </tbody>
                            </table>

                                        <div>                                       
                                            <nav>
                                                <ul class="pagination"></ul>
                                            </nav>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <form id="form_add_user" @submit.prevent="submit_adduser" >
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create New User</h4>
                </div>
                <div class="modal-body">
                            <div class="divmain"> 
                                <div class="field-n">
                                    <label for="firstname">First Name:</label>
                                    <input type="text" id="firstname" autocomplete="off" required v-model="dataNew.firstname" name="firstname" value="" placeholder="First Name" class="login-f" />
                                </div>                         
                                <div class="field-n">
                                    <label for="lastname">Last Name:</label>	
                                    <input type="text" id="lastname" autocomplete="off" v-model="dataNew.lastname" name="lastname" value="" placeholder="Last Name" class="login-f" />
                                </div> 
                            </div>  
                            <div class="divmain"> 
                                <div class="field-n">
                                    <label for="nickname">NickName:</label>	
                                    <input type="text" id="nickname" autocomplete="off" v-model="dataNew.nickname" name="nickname" value="" placeholder="Nick Name" class="login-f" />
                                </div> 
                                <div class="field-n">
                                    <label for="tel">Tel.:</label>
                                    <input type="text" id="tel" autocomplete="off" v-model="dataNew.tel" name="tel" value="" placeholder="tel" class="login-f"/>
                                </div> 
                            </div>     
                            <div class="divmain" >
                            <div style="padding-left:5%;">
                                    <label  for="email">Username</label>
                                    <input type="text" autocomplete="username" id="username" required v-model="dataNew.username" name="username" value="" placeholder="Username" class="login-f"/>
                            </div>  
                            </div>  
                            <div class="divmain">  
                                <div class="field-n">
                                    <label for="password">Password:</label>                                    
                                    <input type="password" autocomplete="new-password"  id="password" 
                                           @keyup="checkpass" required 
                                           v-model="dataNew.password" name="password" value="" placeholder="Password" class="login-f"
                                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                           title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                           />                          
                                </div> 
                                <div class="field-n">
                                    <label for="confirm_password">Confirm Password:</label>
                                    <input type="password" autocomplete="new-password" id="confirm_password" required v-model="dataNew.confirm_password" @keyup="checkpass" name="confirm_password" value="" placeholder="Confirm Password" class="login-f"/>
                                </div>
                            </div>   
                            <div class="message_pass" >
                                <span v-html="message_pass" v-bind:style="{ color: activeColorP}"></span>    
                                <span v-html="message_con_pass" v-bind:style="{ color: activeColorC}"></span>                           
                            </div>   
                        
                </div>   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="save_adduser" disabled="true">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                    
                </div>
            </div>
           
        </div>
    </div>
    </form>
    <!-- modal -->

</div>


<script>



    var user_all = new Vue({
        el: '#user_all',
        data: {
            search: '',
            userAll: [],
            dataNew:{
                firstname:'',
                lastname:'',
                nickname:'',
                tel:'',
                username:'',
                password:'',
                confirm_password:'',
            },
            message_pass:`Must contain at least one number and one uppercase and lowercase letter,<br> and at least 8 or more characters
                          <br>
                          ต้องมีตัวเลขอย่างน้อยหนึ่งตัว และตัวพิมพ์ใหญ่ และตัวพิมพ์เล็กหนึ่งตัว <br>และอย่างน้อย 8 ตัวอักษรขึ้นไป
                         `,
             activeColorP: 'red',
             message_con_pass:``,
             activeColorC: 'red',
        },
        mounted: function() {
            this.GET_USER();
        },
        computed: {
            filteredList() {
                return this.userAll.filter(user => {
                    return user.username.toLowerCase()                           
                            .includes(this.search.toLowerCase())
                            ||
                            user.name.toLowerCase()                           
                            .includes(this.search.toLowerCase())
                     })
            }
        },
        methods: {
                checkpass:function(){
                    let ptt = (/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,})$/.test(this.dataNew.password));
                   if( ptt ){
                        this.message_pass =`Password can be used  <br> รหัสผ่านสามารถใช้ได้`;
                        this.activeColorP = 'green';
                   }else{
                    this.message_pass =`Must contain at least one number and one uppercase and lowercase letter,<br> and at least 8 or more characters
                                        <br>
                                        ต้องมีตัวเลขอย่างน้อยหนึ่งตัว และตัวพิมพ์ใหญ่ และตัวพิมพ์เล็กหนึ่งตัว <br>และอย่างน้อย 8 ตัวอักษรขึ้นไป`;
                    this.activeColorP = 'red';
                   }
                   if(this.dataNew.confirm_password != this.dataNew.password && this.dataNew.confirm_password != ''){
                        this.message_con_pass =  ` <br>  Passwords do not match   รหัสผ่านไม่ตรงกัน`;
                         this.activeColorC = 'red';
                   }else if(this.dataNew.confirm_password == ''){
                    this.message_con_pass =  ``;
                   }else if(this.dataNew.confirm_password == this.dataNew.password){
                    this.activeColorC = 'green';
                    this.message_con_pass =  ` <br>  Password is match  รหัสผ่านตรงกัน`;
                    $('#save_adduser').attr('disabled',false);
                   }
            
                },
                GET_USER:function(){
                    $.ajax({        //== ดึงข้อมูลผู้ใช้จาก function my_user ของ controller
                            type: "POST",
                            url: 'backend/my_user',
                            data: {},
                            success: function(data){
                                console.log(data);
                                this.userAll = data;
                            }.bind(this),
                            dataType: 'json'
                    });                   
                },
                submit_adduser: function(e) {   
                    $.ajax({        //== ส่งข้อมูลผู้ใช้ใหม่ไป function add_user ของ controller
                            type: "POST",
                            url: 'backend/add_user',
                            data: this.dataNew,
                            success: function(data){
                                console.log(data);
                                this.GET_USER();
                            }.bind(this),
                            dataType: 'json'
                    });
                   
                    $("[data-dismiss=modal]").trigger({ type: "click" });
                },
                
        },
        watch:{
           userAll:function(){
                setTimeout(() => {
                    $('#maxRows option:first').prop('selected', true).trigger('change');
                }, 100);
                     getPagination('#Tabla');
           }
        }
    });
    // this.$http.post('path', {'data': '1'})  
        // .then(resp => resp.json()) 
        //     .then(
        //         data => {
        //             console.log(data);   
        //             // success callback
        //         }, 
        //         data => {
        //             // error callback
        //         }
        //     )
        //     .bind(this);


function getPagination(table) {

$('#maxRows').on('change', function(e) {
  $('.pagination').html(''); // reset pagination
  var trnum = 0; // reset tr counter
  var maxRows = parseInt($(this).val()); // get Max Rows from select option
  var totalRows = $(table + ' tbody tr').length; // numbers of rows
  $(table + ' tr:gt(0)').each(function() { // each TR in  table and not the header
    trnum++; // Start Counter
    if (trnum > maxRows) { // if tr number gt maxRows

      $(this).hide(); // fade it out
    }
    if (trnum <= maxRows) {
      $(this).show();
    } // else fade in Important in case if it ..
  }); //  was fade out to fade it in
  if (totalRows > maxRows) { // if tr total rows gt max rows option
    var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
    //	numbers of pages
    for (var i = 1; i <= pagenum;) { // for each page append pagination li
      
      $('.pagination').append('<li class"wp" data-page="' + i + '"><button>' + (i++) + '</button></li>').show();
    } // end for i
  } // end if row count > max rows
  $('.pagination li:first-child').addClass('active'); // add active class to the first li
  $('.pagination li').on('click', function() { // on click each page
    var pageNum = $(this).attr('data-page'); // get it's number
    var trIndex = 0; // reset tr counter
    $('.pagination li').removeClass('active'); // remove active class from all li
    $(this).addClass('active'); // add active class to the clicked
    $(table + ' tr:gt(0)').each(function() { // each tr in table not the header
      trIndex++; // tr index counter
      // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
      if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
        $(this).hide();
      } else {
        $(this).show();
      } //else fade in
    }); // end of for each tr in table
  }); // end of on click pagination list


});

// end of on select change



// END OF PAGINATION
}



</script>


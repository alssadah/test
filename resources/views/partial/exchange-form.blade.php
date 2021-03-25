


 <form class="form-horizontal"    id="contact-form00"   action="{{route('ExchangeForm.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label class="control-label" for="fullname"> الاسم الرباعي     </label>
                <input type="text"  class="form-control" name="fullname"   pattern="^([- \w\d\u00c0-\u024f]+)$" id="fullname"   style="width:100%"    onfocusout="checkname()"    placeholder="الاسم الرباعي" >

            </div>


           <div class="form-group">
                <label class="control-label" for="fullname">أسم المحل    </label>
                <input type="text"  class="form-control" name="project_name"   pattern="^([- \w\d\u00c0-\u024f]+)$" id="fullname"   style="width:100%"    onfocusout="checkname()"    placeholder="أسم المحل" >

            </div>


            <div class="form-group">
                    <label class="control-label" for="email">  البريد الإلكتروني       </label>
                    <input type="email"  class="form-control" name="email" id="email"   style="width:100%"        placeholder="البريد الإلكتروني" >

            </div>


            <div class="form-group">
                <label class="control-label"  for="city">المحافظه  </label>

                <select class="form-control" name="city"  id="city" style="width:100%"   >
                        <option selected value="">اختر المحافظ المتواجد فيها </option>
                        <option value="1">أمانة العاصمة</option>
                        <option value="2">صنعاء</option>
                        <option value="3">عدن</option>
                        <option value="4" >تعز</option>
                        <option value="5">عمران</option>
                        <option value="6">الحديدة</option>
                        <option value="7">البيضاء</option>

                    <option value="8">الجوف</option>
                    <option value="9">المحويت</option>

                            <option value="10">ذمار</option>
                            <option value="11">حجة</option>
                            <option value="12">إب</option>
                            <option value="13">مأرب</option>
                            <option value="14">ريمة</option>
                            <option value="15">صعدة</option>


                            <option value="16">أبين</option>
                            <option value="17">الضالع</option>
                            <option value="18">المهرة</option>
                            <option value="19">حضرموت</option>

                            <option value="20">لحج</option>
                            <option value="21">شبوة</option>
                            <option value="22">أرخبيل سقطرى</option>
                    </select>
            </div>

            <div class="form-group">
                <label class="control-label" for="email">العنوان  </label>
                <input type="text" class="form-control" name="address" id="address"  style="width:100%"     placeholder="العنوان" >

            </div>

        <div id="others"  style="display: none;">
            <div class="form-group">
                <label class="control-label " for="email"> كيف تعرفت على المؤسسة؟   </label>
                <input type="text"  class="form-control" name="other_referred"    id="other_referred"   style="width:100%"     placeholder="" >

            </div>

        </div>


        <div class="form-group">

                 <label class="control-label " for="email">  البطاقة الشخصية  </label>

                <input type='file'  class="form-control" id="idCard" name="idCard" />
                <img id="idCard_perview"   />



            </div>


            <div class="form-group">

                    <label class="control-label " for="email">  ترخيص البنك </label>

                   <input type='file'  class="form-control" id="bank_license" name="bank_license" />
                    <img id="bank_license_perview" />

                </div>

               <div class="form-group">

                    <label class="control-label " for="email">  السجل التجاري </label>

                   <input type='file'  class="form-control" id="commercial_card" name="commercial_card" />
                   <img id="commercial_card_perview"   />



               </div>


        </div>



            <input type="hidden" class="form-control" name="account_id"   value="{{$request->account_id}}">

            <input type="hidden" class="form-control" name="account_type"   value="{{$request->account_type}}">


            <div class=" ">

                <label>

                    <a href="https://nmfy.org/nano-terms/"  target="_blank">
                    أوفق على الشروط والاحكام
                    </a>
                    <input type="checkbox" name="terms"       id="terms"   onclick="termsagree()"  >


            </label>

            </div>

            <br>


        <input id="submit" type="submit" value="حفظ" name="submit" class="btn btn-primary" disabled0>


</form>




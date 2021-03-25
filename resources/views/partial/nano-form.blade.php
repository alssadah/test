 

        
 <form class="form-horizontal"    id="contact-form"   
             
                             action="{{route('nanoForm.store')}}" method="post" novalidate>
        @csrf
        <div class="form-group">
            <label class="control-label" for="fullname"> الاسم الرباعي     </label>
            <input type="text"  class="form-control" name="fullname"   pattern="^([- \w\d\u00c0-\u024f]+)$" id="fullname"   style="width:100%"    onfocusout="checkname()"    placeholder="الاسم الرباعي" >
            
        </div>  
            
            <div class="form-group">
                <label class="control-label" for="email">  البريد الإلكتروني       </label>
                <input type="email"  class="form-control" name="email" id="email"   style="width:100%"        placeholder="البريد الإلكتروني" >
                
           </div>  
    
       {{-- <div class="form-group">
                <label class="control-label" for="fullname">رقم البطاقة الشخصيه     </label>
                <input type="number"  class="form-control" name="idcard"    id="idcard"   style="width:100%"  onfocusout="isIdcard()"   onwheel="this.blur()"  placeholder="رقم البطاقة الشخصيه " >
                
        </div>   --}}
    

                        
                        <div class="form-group  form-inline">
                            <label class="control-label  ml-20" for="email">تاريخ الميلاد    </label>
                        
                            <select id="day" name="p_day"     class="form-control ml-20"   >
                                    <option selected value="">اليوم</option>
                                        <?php 
                                            for($i = 1; $i <= 31; $i++) {
                                        echo "<option  value = '$i'  >$i</option>";
                                            } 
                                    ?>
        
                                </select> 
                       
                        <select id="month" name="p_month"    class="form-control ml-20"    >
                                <option selected value="">الشهر</option>

                                <option   value="1">يناير </option>
                                <option   value="2"> فبراير</option>
                                <option   value="3">مارس </option>
                                <option   value="4"> ابريل</option>
                                <option   value="5">مايو </option>
                                <option   value="6">يونيو </option>
                                <option   value="7">يوليو </option>
                                <option   value="8">أغسطس </option>
                                <option   value="9">سبتمبر </option>
                                <option   value="10"> أكتوبر</option>
                                <option   value="11">نوفمبر </option>
                                <option   value="12">ديسمبر</option>

                        </select>
                    
                           

                        <select id="year" name="p_year"   class="form-control ml-20"   >
                                <option selected value="">السنة</option>

                                <?php 
                                    for($i = 2010 ; $i >= 1900; $i--) {
                                echo "<option value='$i'>$i</option>";
                                    } 
                            ?>

                        </select> 

                            
                        </div>   
    
            <div class="form-group">
            <label class="control-label  ml-20" for="gender"> النوع</label><br>
            
            <label class="checkbox-inline ml-20 "><input type="radio"   name="gender"  value="2"   >انثى</label>
            <label class="checkbox-inline ml-20"><input type="radio"   name="gender"  value="1"    >ذكر </label>
            
        
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

                    <div class="form-group">
            <label class="control-label " for="email">     الوظيفة  </label>
                <select class="form-control" name="is_employee" id="is_employee" style="width:100%"    >
                <option  value=""> الوظيفة   </option>
                    <option value="1"  >بدون</option>
                    <option value="2">طالب</option>
                    <option value="3">موظف حكومي </option>
                    <option value="4">موظف خاص </option>
                    <option value="5">موظف منظمات دولية</option>                                                                                                            
                    <option value="6">صاحب مشروع </option>
                </select>
            </div> 


            <div id="capitaldiv"  style="display: none;">    
                
                            <div class="form-group">
                                <label class="control-label " for="email">      رأس المال   </label>
                                    <select class="form-control" name="capital" id="capital" style="width:100%"     >
                                <option  value="0"> رأس المال  </option> 
                                        <option value="1"  >أقل من 5000$</option>
                                        <option value="2">أكبر من 5000$ </option>
                                        
                                    </select>
                                </div> 


                                <div class="form-group">
                                        <label class="control-label " for="emp_count">  عدد الموظفين  </label>
                                            <select class="form-control" name="emp_count" id="emp_count" style="width:100%"     >
                                                <option value="0"> عدد الموظفين   </option> 
                                                <option value="1"  >3-1 </option>
                                            <option  value="2">7-4 </option>
                                            <option  value="3"> اكبر من 7 </option>
                                                
                                            </select>
                                    </div> 

            </div> 
          <!-- capitaldiv -->

            <div id="experiencediv"  style="display: none;">    

                            <div class="form-group">
                                <label class="control-label " for="email">    الخبرة </label>
                                        <select class="form-control" name="experience" id="experience" style="width:100%"     >
                                            <option  value="0"> الخبرة </option> 
                                            <option value="1"  >أقل من سنة  </option>
                                            <option value="2">سنه الى ثلاث سنوات   </option>
                                            <option value="3"> أكبر من ثلاث سنوات </option>
                                            
                                        </select>
                                </div> 
            </div> 
                <!-- experiencediv -->
                <div class="form-group">
                            <label class="control-label " for="email">   الدخل الشهري  </label>
                                <select class="form-control" name="monthly_income" id="monthly_income" style="width:100%"    >
                                    <option  value="">  الدخل الشهري  </option> 
                                    <option value="1"> لايوجد </option>
                                    <option value="2"  > أقل من 200$ </option>
                                    <option value="3">  $200 - $500    </option>
                                    <option value="4"> اكثر من 500$ </option>
                                    
                                </select>
                </div> 
            
    
    <div class="form-group">
      <label class="control-label " for="marital_status"> الحالة الاجتماعية  </label>
        <select class="form-control" id="marital_status" name="marital_status" style="width:100%"    >
           <option  value=""> الحالة الاجتماعية  </option>
            <option value="1">عازب</option>
            <option value="2">متزوج</option>
            <option value="3">مطلق</option>
            <option value="4">ارمل</option>
        </select>
    </div> 
   
    <div class="form-group">
      <label class="control-label " for="email"> المستوى التعليمي  </label>
        <select class="form-control" id="education" name="education" style="width:100%"   > 
            <option >المستوى التعليمي</option>
            <option value="1">أمي</option>
            <option value="2">ثانوي</option>
            <option value="3">دبلوم عالي </option>
            <option value="4"  >بكالوريوس</option>
            <option value="5">ماجستير </option>
            <option value="6">دكتوراه </option>
        </select>
    </div>  
  



    <div class="form-group">
      <label class="control-label " for="email">  نوع السكن  </label><br>
      
      <label class="checkbox-inline ml-20 "><input type="radio" name="housing"  value="2"    >ايجار</label>
      <label class="checkbox-inline ml-20"><input type="radio" name="housing"  value="1"    >ملك </label>
      
      
    </div>  

      <div class="form-group">
            <label class="control-label " for="email">  هل تملك سيارة </label><br>
            
            <label class="checkbox-inline ml-20"><input type="radio" name="has_car"  value="1"     >نعم</label>
            <label class="checkbox-inline ml-20"><input type="radio" name="has_car"  value="0"   >لا </label>
            
            
     </div>  

                <div class="form-group">
                    <label class="control-label " for="email">     عدد  أصدقائك في الفيس بوك    </label>
                        <select class="form-control" id="followers" name="followers" style="width:100%"    >
                        
                        <option  value="">   عدد  أصدقائك في الفيس بوك    </option>
                            <option value="1">أقل من 1000 صديق</option>
                            <option value="2"  > 1000 صديق - 3000 صديق</option>
                            <option value="3">أكثر من 3000 صديق</option>
                                
                            
                            
                        </select>
                </div> 



            <div class="form-group">
                <label class="control-label " for="email"> كيف تعرفت على المؤسسة؟   </label>
                    <select class="form-control" id="referred_platform" name="referred_platform" style="width:100%"    >
                    
                    <option  value="">كيف تعرفت على المؤسسة؟   </option>
                    <option value="1">الترويج الميداني  </option>
                    <option value="2">عبر صديق او قريب </option>
                    <option value="3">عبر الفيسبوك </option>
                    <option value="4">عبر برنامج الغله</option>
                    <option value="5">عميل لدى المؤسسة  </option>
                    <option value="6">غير ذلك  </option>
                                                                
                    </select>
            </div> 

        <div id="others"  style="display: none;">    
            <div class="form-group">
                <label class="control-label " for="email"> كيف تعرفت على المؤسسة؟   </label>
                <input type="text"  class="form-control" name="other_referred"    id="other_referred"   style="width:100%"     placeholder="" >
                
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


        <input id="su" type="submit" value="حفظ" name="submit" class="btn btn-primary" disabled0>   


</form>    

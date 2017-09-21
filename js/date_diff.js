 var date_difference ={

  diff_days : function(from_date,to_date){

            var f_d = from_date.substring(0,2) ;
                f_m = from_date.substring(3,5) ;
                f_y = from_date.substring(6,10) ;

                to_d = to_date.substring(0,2) ;
                to_m = to_date.substring(3,5) ;
                to_y = to_date.substring(6,10) ;

                f_date = f_m+'/'+f_d+'/'+f_y;
                t_date = to_m+'/'+to_d+'/'+to_y;
               
                var d1 = new Date(f_date);
                var d2 = new Date(t_date);
                var timeDiff = d2.getTime() - d1.getTime();
                var DaysDiff = timeDiff / (1000 * 3600 * 24);
                return DaysDiff;
    }

  }
<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?1690                ?0                  	;0	>>1690
1    5     ECHO/40                   ?0        1:'        
		var rClearing = false;

		function api(rID, rType) {
			$.getJSON("./api?action=line_activity&sub=" + rType + "&uuid=" + rID, function(data) {
				if (data.result === true) {
					if (rType == "kill") {
						$.toast("' ?0                  	;0
2    6     FETCH_DIM_R/81            $16=      16?0                 2:'connection_has_been_killed'	;0
3    6     ECHO/40                   ?0        $16                  ?0                  	;0
4    7     ECHO/40                   ?0        3:'");
					}
					$("#datatable-activity").DataTable().ajax.reload(null, false);
				} else {
					$.toast("' ?0                  	;0
5    8     FETCH_DIM_R/81            $17=      16?0                 4:'error_occured'   	;0
6    8     ECHO/40                   ?0        $17                  ?0                  	;0
7    9     ECHO/40                   ?0        5:'");
				}
			});
		}
		function refreshTable() {
			$("#datatable-activity").DataTable().ajax.reload( null, false );
		}
		function getStream() {
			return $("#live_stream").val();
		}
		function getLine() {
			return $("#live_line").val();
		}
        function getUser() {
			return $("#live_user").val();
		}
		function clearFilters() {
			window.rClearing = true;
            $("#live_search").val("").trigger(\'change\');
			$("#live_stream").val("").trigger(\'change\');
			$(\'#live_line\').val("").trigger(\'change\');
            $(\'#live_user\').val("").trigger(\'change\');
			$(\'#live_show_entries\').val("' ?0                  	;0
8    10    GOTO/253                  ?0        ?1156                ?6                  	;0
9    13    ECHO/40                   ?0        7:'				],
                ' ?0                  	;0
10   14    BOOL_NOT/13               #18=      16?1                 ?0                  	;0
11   14    JMPZ/43                   ?0        #18                  ?13                 	;0	>>13
12   15    GOTO/253                  ?0        ?14                  ?8                  	;0
13   17    ECHO/40                   ?0        9:'scrollX: true,'   ?0                  	;0	<<11
14   19    GOTO/253                  ?0        ?1574                ?10                 	;0
15   22    ECHO/40                   ?0        11:'				'            ?0                  	;0
16   23    FETCH_STATIC_PROP_R/173   $19=      12:'rSettings'       13:'XUI'            	;0
17   23    FETCH_DIM_R/81            $20=      $19                  15:'redis_handler'  	;0
18   23    JMPZ/43                   ?0        $20                  ?20                 	;0	>>20
19   24    GOTO/253                  ?0        ?1441                ?16                 	;0
20   26    ECHO/40                   ?0        17:'				order: [[ '  ?0                  	;0	<<18
21   27    FETCH_STATIC_PROP_IS/176  $21=      18:'rRequest'        19:'XUI'            	;0
22   27    ISSET_ISEMPTY_DIM_OBJ/115 #22=      $21                  21:'order'          	;33554432
23   27    JMPZ/43                   ?0        #22                  ?31                 	;0	>>31
24   27    INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'intval'         	;1
25   27    FETCH_STATIC_PROP_FUNC_ARG/177 $23=      24:'rRequest'        25:'XUI'            	;1
26   27    FETCH_DIM_FUNC_ARG/93     $24=      $23                  27:'order'          	;1
27   27    SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
28   27    DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
29   27    QM_ASSIGN/22              #26=      $25                  ?0                  	;0
30   27    JMP/42                    ?0        ?32                  ?0                  	;0	>>32
31   27    QM_ASSIGN/22              #26=      28:4                 ?0                  	;0	<<23
32   27    ECHO/40                   ?0        #26                  ?0                  	;0	<<30
33   28    GOTO/253                  ?0        ?1419                ?29                 	;0
34   30    FETCH_DIM_R/81            $27=      16?2                 30:'credits'        	;0
35   30    ECHO/40                   ?0        $27                  ?0                  	;0
36   31    ECHO/40                   ?0        31:' - rData.data.cost_credits, 0));
                        $("#exp_date").val(rData.data.exp_date);
                        if (' ?0                  	;0
37   32    FETCH_DIM_R/81            $28=      16?2                 32:'credits'        	;0
38   32    ECHO/40                   ?0        $28                  ?0                  	;0
39   33    ECHO/40                   ?0        33:' - rData.data.cost_credits < 0) {
                            $("#credits-cost").hide();
                            $("#no-credits").show()
                            $(".purchase").prop(\'disabled\', true);
                        } else {
                            $("#credits-cost").show();
                            $("#no-credits").hide()
                            $(".purchase").prop(\'disabled\', false);
                        }
                        $(rData.bouquets).each(function(rIndex) {
                            if ((window.rUserBouquet.length > 0) && (window.rUserPackage == parseInt($("#package").val()))) {
                                if (window.rUserBouquet.includes(parseInt(rData.bouquets[rIndex].id))) {
                                    var rChecked = "checked";
                                } else {
                                    var rChecked = "";
                                }
                            } else {
                                var rChecked = "checked";
                            }
							rTable.row.add([' ?0                  	;0
40   34    FETCH_DIM_R/81            $29=      16?3                 34:'allow_change_bouquets'	;0
41   34    JMPZ/43                   ?0        $29                  ?43                 	;0	>>43
42   35    GOTO/253                  ?0        ?225                 ?35                 	;0
43   37    GOTO/253                  ?0        ?223                 ?36                 	;0	<<41
44   39    INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'intval'         	;1
45   39    FETCH_DIM_FUNC_ARG/93     $30=      16?4                 39:'default_entries'	;1
46   39    SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
47   39    DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
48   39    ECHO/40                   ?0        $31                  ?0                  	;0
49   40    ECHO/40                   ?0        40:'; }
			var rTable = $("#datatable-streampage").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>"
					}
				},
				drawCallback: function() {
                    bindHref(); refreshTooltips();
                    if ($("#datatable-streampage").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-streampage").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-streampage").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
				},
				createdRow: function(row, data, index) {
					$(row).addClass(\'stream-\' + data[0]);
				},
				responsive: false,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "streams",
						d.category = getCategory();
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [0,1,4,5]},
					' ?0                  	;0
50   41    FETCH_STATIC_PROP_R/173   $32=      41:'rSettings'       42:'XUI'            	;0
51   41    FETCH_DIM_R/81            $33=      $32                  44:'redis_handler'  	;0
52   41    JMPZ/43                   ?0        $33                  ?54                 	;0	>>54
53   42    GOTO/253                  ?0        ?1684                ?45                 	;0
54   44    ECHO/40                   ?0        46:'					{"orderable": false, "targets": [1,5]},
					' ?0                  	;0	<<52
55   45    GOTO/253                  ?0        ?1685                ?47                 	;0
56   46    GOTO/253                  ?0        ?1684                ?48                 	;0
57   49    ECHO/40                   ?0        49:'                $(".credits .entry").html($.number(data.credits_assigned, 0));
                ' ?0                  	;0
58   51    ECHO/40                   ?0        50:'                if (Date.now() - rStart < 1000) {
                    setTimeout(getStats, 1000 - (Date.now() - rStart));
                } else {
                    getStats();
                }
            }).fail(function() {
                setTimeout(getStats, 1000);
            });
        }
        
        $(document).ready(function() {
            $("#manage_lines").on("click", function() {
                $(".bs-type-modal-center").modal("show");
            });            
            getStats();
        });
        
		' ?0                  	;0
59   53    GOTO/253                  ?0        ?668                 ?51                 	;0
60   55    FETCH_STATIC_PROP_R/173   $34=      52:'rSettings'       53:'XUI'            	;0
61   55    FETCH_DIM_R/81            $35=      $34                  55:'redis_handler'  	;0
62   55    JMPZ/43                   ?0        $35                  ?64                 	;0	>>64
63   56    GOTO/253                  ?0        ?66                  ?56                 	;0
64   58    ECHO/40                   ?0        57:'					{"orderable": false, "targets": [1,5]},
					' ?0                  	;0	<<62
65   59    GOTO/253                  ?0        ?1090                ?58                 	;0
66   61    ECHO/40                   ?0        59:'					{"orderable": false, "targets": [1,4,5]},
					' ?0                  	;0
67   62    GOTO/253                  ?0        ?1090                ?60                 	;0
68   64    ASSIGN/38                 ?20       16?5                 61:false            	;0
69   66    FE_RESET_R/77             $37=      16?6                 ?167                	;0
70   66    FE_FETCH_R/78             ?0        $37                  16?7                	;167	>>167	<<166
71   67    NOP/0                     ?0        ?0                   ?0                  	;1
72   67    GOTO/253                  ?0        ?104                 ?62                 	;0
73   69    INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'count'          	;1
74   69    INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'json_decode'    	;2
75   69    FETCH_DIM_FUNC_ARG/93     $38=      16?8                 67:'bouquet_movies' 	;1
76   69    SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
77   69    SEND_VAL_EX/116           ?96       68:true              ?2                  	;0
78   69    DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
79   69    SEND_VAR_NO_REF_EX/50     ?80       $39                  ?1                  	;0
80   69    DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
81   69    ECHO/40                   ?0        $40                  ?0                  	;0
82   70    ECHO/40                   ?0        69:', '              ?0                  	;0
83   71    INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'count'          	;1
84   71    INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'json_decode'    	;2
85   71    FETCH_DIM_FUNC_ARG/93     $41=      16?8                 74:'bouquet_series' 	;1
86   71    SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
87   71    SEND_VAL_EX/116           ?96       75:true              ?2                  	;0
88   71    DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
89   71    SEND_VAR_NO_REF_EX/50     ?80       $42                  ?1                  	;0
90   71    DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
91   71    ECHO/40                   ?0        $43                  ?0                  	;0
92   72    ECHO/40                   ?0        76:', '              ?0                  	;0
93   73    INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'count'          	;1
94   73    INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'json_decode'    	;2
95   73    FETCH_DIM_FUNC_ARG/93     $44=      16?8                 81:'bouquet_radios' 	;1
96   73    SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
97   73    SEND_VAL_EX/116           ?96       82:true              ?2                  	;0
98   73    DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
99   73    SEND_VAR_NO_REF_EX/50     ?80       $45                  ?1                  	;0
100  73    DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
101  73    ECHO/40                   ?0        $46                  ?0                  	;0
102  74    NOP/0                     ?0        ?0                   ?0                  	;1
103  74    GOTO/253                  ?0        ?144                 ?83                 	;0
104  76    INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'B47Fb5320e43f112'	;1
105  76    SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
106  76    DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
107  76    ASSIGN/38                 ?32       16?8                 $47                 	;0
108  77    INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'strlen'         	;1
109  77    SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
110  77    DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
111  77    IS_SMALLER/19             #50=      88:0                 $49                 	;0
112  77    BOOL_NOT/13               #51=      #50                  ?0                  	;0
113  77    JMPZ/43                   ?0        #51                  ?116                	;0	>>116
114  78    NOP/0                     ?0        ?0                   ?0                  	;1
115  78    GOTO/253                  ?0        ?145                 ?89                 	;0
116  80    ECHO/40                   ?0        90:'					rTable.row.add([' ?0                  	;0	<<113
117  81    JMPZ/43                   ?0        16?5                 ?120                	;0	>>120
118  82    NOP/0                     ?0        ?0                   ?0                  	;1
119  82    GOTO/253                  ?0        ?161                 ?91                 	;0
120  84    ECHO/40                   ?0        16?7                 ?0                  	;0	<<117
121  85    NOP/0                     ?0        ?0                   ?0                  	;1
122  85    GOTO/253                  ?0        ?159                 ?92                 	;0
123  87    ECHO/40                   ?0        93:', \''            ?0                  	;0
124  88    INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'str_replace'    	;3
125  88    SEND_VAL_EX/116           ?80       96:'\''              ?1                  	;0
126  88    SEND_VAL_EX/116           ?96       97:'\\\''            ?2                  	;0
127  88    FETCH_DIM_FUNC_ARG/93     $52=      16?8                 98:'bouquet_name'   	;3
128  88    SEND_VAR_EX/66            ?112      $52                  ?3                  	;0
129  88    DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
130  88    ECHO/40                   ?0        $53                  ?0                  	;0
131  89    ECHO/40                   ?0        99:'\', '            ?0                  	;0
132  90    INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'count'         	;1
133  90    INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'json_decode'   	;2
134  90    FETCH_DIM_FUNC_ARG/93     $54=      16?8                 104:'bouquet_channels'	;1
135  90    SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
136  90    SEND_VAL_EX/116           ?96       105:true             ?2                  	;0
137  90    DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
138  90    SEND_VAR_NO_REF_EX/50     ?80       $55                  ?1                  	;0
139  90    DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
140  90    ECHO/40                   ?0        $56                  ?0                  	;0
141  91    ECHO/40                   ?0        106:', '             ?0                  	;0
142  92    NOP/0                     ?0        ?0                   ?0                  	;1
143  92    GOTO/253                  ?0        ?73                  ?107                	;0
144  94    ECHO/40                   ?0        108:']);
					'     ?0                  	;0
145  97    NOP/0                     ?0        ?0                   ?0                  	;1
146  97    GOTO/253                  ?0        ?166                 ?109                	;0
147  99    INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'in_array'      	;2
148  99    SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
149  99    SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
150  99    DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
151  99    BOOL_NOT/13               #58=      $57                  ?0                  	;0
152  99    JMPZ/43                   ?0        #58                  ?155                	;0	>>155
153  100   NOP/0                     ?0        ?0                   ?0                  	;1
154  100   GOTO/253                  ?0        ?156                 ?112                	;0
155  102   ECHO/40                   ?0        113:'checked'        ?0                  	;0	<<152
156  104   ECHO/40                   ?0        114:'></input>"'     ?0                  	;0
157  106   NOP/0                     ?0        ?0                   ?0                  	;1
158  106   GOTO/253                  ?0        ?123                 ?115                	;0
159  108   NOP/0                     ?0        ?0                   ?0                  	;1
160  108   GOTO/253                  ?0        ?157                 ?116                	;0
161  110   ECHO/40                   ?0        117:'"<input class=\'big_checkbox\' type=\'checkbox\' name=\'bouquets_selected[]\' value=\'' ?0                  	;0
162  111   ECHO/40                   ?0        16?7                 ?0                  	;0
163  112   ECHO/40                   ?0        118:'\' '            ?0                  	;0
164  113   NOP/0                     ?0        ?0                   ?0                  	;1
165  113   GOTO/253                  ?0        ?147                 ?119                	;0
166  114   JMP/42                    ?0        ?70                  ?0                  	;0	>>70
167  114   FE_FREE/127               ?0        $37                  ?0                  	;0	<<69
168  117   ECHO/40                   ?0        120:'                ' ?0                  	;0
169  118   GOTO/253                  ?0        ?877                 ?121                	;0
170  120   ECHO/40                   ?0        122:'; }
			var rTable = $("#datatable-streampage").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>"
					}
				},
				drawCallback: function() {					bindHref(); refreshTooltips();
                    if ($("#datatable-streampage").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-streampage").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-streampage").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
				},
				createdRow: function(row, data, index) {
					$(row).addClass(\'stream-\' + data[0]);
				},
				responsive: false,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "radios",
						d.category = getCategory();
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [0,1,4,5]},
					' ?0                  	;0
171  121   FETCH_STATIC_PROP_R/173   $59=      123:'rSettings'      124:'XUI'           	;0
172  121   FETCH_DIM_R/81            $60=      $59                  126:'redis_handler' 	;0
173  121   JMPZ/43                   ?0        $60                  ?175                	;0	>>175
174  122   GOTO/253                  ?0        ?177                 ?127                	;0
175  124   ECHO/40                   ?0        128:'					{"orderable": false, "targets": [1,5]},
					' ?0                  	;0	<<173
176  125   GOTO/253                  ?0        ?1109                ?129                	;0
177  127   GOTO/253                  ?0        ?1108                ?130                	;0
178  129   GOTO/253                  ?0        ?1010                ?131                	;0
179  131   ECHO/40                   ?0        132:'        
		function getReseller() {
			return $("#reseller").val();
		}
		function getRange() {
			return $("#range").val();
		}
        function refreshTable() {
			$("#datatable-activity").DataTable().ajax.reload( null, false );
		}
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
			$(\'#range\').daterangepicker({
				singleDatePicker: false,
				showDropdowns: true,
				locale: {
					format: \'YYYY-MM-DD\'
				},
				autoUpdateInput: false
			}).val("");
			$(\'#range\').on(\'apply.daterangepicker\', function(ev, picker) {
				$(this).val(picker.startDate.format(\'YYYY-MM-DD\') + \' - \' + picker.endDate.format(\'YYYY-MM-DD\'));
				$("#datatable-activity").DataTable().ajax.reload( null, false );
			});
			$(\'#range\').on(\'cancel.daterangepicker\', function(ev, picker) {
				$(this).val(\'\');
				$("#datatable-activity").DataTable().ajax.reload( null, false );
			});
			$(\'#range\').on(\'change\', function() {
				$("#datatable-activity").DataTable().ajax.reload( null, false );
			});
			$("#datatable-activity").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>"
					},
					infoFiltered: ""
				},
				drawCallback: function() {
					bindHref(); refreshTooltips();
				},
				responsive: false,
				processing: true,
				serverSide: true,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "reg_user_logs",
						d.range = getRange(),
						d.reseller = getReseller()
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [4,5,6]},
                    {"visible": false, "targets": [0]}
				],
				"order": [[ 6, "desc" ]],
				pageLength: ' ?0                  	;0
180  132   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'intval'        	;1
181  132   FETCH_DIM_FUNC_ARG/93     $61=      16?4                 135:'default_entries'	;1
182  132   SEND_VAR_EX/66            ?80       $61                  ?1                  	;0
183  132   DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
184  132   JMP_SET/152               #63=      $62                  ?186                	;0
185  132   QM_ASSIGN/22              #63=      136:10               ?0                  	;0
186  132   ECHO/40                   ?0        #63                  ?0                  	;0
187  133   ECHO/40                   ?0        137:'			});
			$("#datatable-activity").css("width", "100%");
			$(\'#log_search\').keyup(function(){
				$(\'#datatable-activity\').DataTable().search($(this).val()).draw();
			})
			$(\'#show_entries\').change(function(){
				$(\'#datatable-activity\').DataTable().page.len($(this).val()).draw();
			})
			$(\'#reseller\').change(function(){
				$("#datatable-activity").DataTable().ajax.reload( null, false );
			})
		});
        
		' ?0                  	;0
188  134   GOTO/253                  ?0        ?1010                ?138                	;0
189  136   FETCH_STATIC_PROP_IS/176  $64=      139:'rRequest'       140:'XUI'           	;0
190  136   ISSET_ISEMPTY_DIM_OBJ/115 #65=      $64                  142:'order'         	;33554432
191  136   JMPZ/43                   ?0        #65                  ?199                	;0	>>199
192  136   INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'intval'        	;1
193  136   FETCH_STATIC_PROP_FUNC_ARG/177 $66=      145:'rRequest'       146:'XUI'           	;1
194  136   FETCH_DIM_FUNC_ARG/93     $67=      $66                  148:'order'         	;1
195  136   SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
196  136   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
197  136   QM_ASSIGN/22              #69=      $68                  ?0                  	;0
198  136   JMP/42                    ?0        ?200                 ?0                  	;0	>>200
199  136   QM_ASSIGN/22              #69=      149:0                ?0                  	;0	<<191
200  136   ECHO/40                   ?0        #69                  ?0                  	;0	<<198
201  137   ECHO/40                   ?0        150:', "'            ?0                  	;0
202  138   INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'in_array'      	;2
203  138   INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'strtolower'    	;1
204  138   FETCH_STATIC_PROP_FUNC_ARG/177 $70=      155:'rRequest'       156:'XUI'           	;1
205  138   FETCH_DIM_FUNC_ARG/93     $71=      $70                  158:'dir'           	;1
206  138   SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
207  138   DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
208  138   SEND_VAR_NO_REF_EX/50     ?80       $72                  ?1                  	;0
209  138   SEND_VAL_EX/116           ?96       159:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
210  138   DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
211  138   JMPZ/43                   ?0        $73                  ?219                	;0	>>219
212  138   INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'strtolower'    	;1
213  138   FETCH_STATIC_PROP_FUNC_ARG/177 $74=      162:'rRequest'       163:'XUI'           	;1
214  138   FETCH_DIM_FUNC_ARG/93     $75=      $74                  165:'dir'           	;1
215  138   SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
216  138   DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
217  138   QM_ASSIGN/22              #77=      $76                  ?0                  	;0
218  138   JMP/42                    ?0        ?220                 ?0                  	;0	>>220
219  138   QM_ASSIGN/22              #77=      166:'desc'           ?0                  	;0	<<211
220  138   ECHO/40                   ?0        #77                  ?0                  	;0	<<218
221  139   ECHO/40                   ?0        167:'" ]],
				pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
			});
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
			$("#datatable-users").css("width", "100%");
			$(\'#reg_search\').keyup(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#reg_search").val()) {
						setParam("search", $("#reg_search").val());
					} else {
						delParam("search");
					}
					checkClear();
					doSearch($(this).val());
				}
			});
			$(\'#reg_show_entries\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#reg_show_entries").val()) {
						setParam("entries", $("#reg_show_entries").val());
					} else {
						delParam("entries");
					}
					checkClear();
					rTable.page.len($(this).val()).draw();
				}
			});
			$(\'#reg_filter\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#reg_filter").val()) {
						setParam("filter", $("#reg_filter").val());
					} else {
						delParam("filter");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
			$(\'#reg_reseller\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#reg_reseller").val()) {
						setParam("owner", $("#reg_reseller").val());
					} else {
						delParam("owner");
					}
					checkClear();
					$("#datatable-users").DataTable().ajax.reload( null, false );
				}
			});
            $("#credits").keyup(function() {
                updateCredits();
            });
			if ($(\'#reg_search\').val()) {
				rTable.search($(\'#reg_search\').val()).draw();
			}
            checkClear();
		});

		' ?0                  	;0
222  141   GOTO/253                  ?0        ?178                 ?168                	;0
223  143   ECHO/40                   ?0        169:'rData.bouquets[rIndex].id' ?0                  	;0
224  144   GOTO/253                  ?0        ?226                 ?170                	;0
225  146   ECHO/40                   ?0        171:'"<input class=\'big_checkbox\' type=\'checkbox\' name=\'bouquets_selected[]\' value=\'" + rData.bouquets[rIndex].id + "\' " + rChecked + "></input>"' ?0                  	;0
226  148   GOTO/253                  ?0        ?820                 ?172                	;0
227  150   INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'is_array'      	;1
228  150   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
229  150   DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
230  150   BOOL_NOT/13               #79=      $78                  ?0                  	;0
231  150   JMPZ/43                   ?0        #79                  ?233                	;0	>>233
232  151   GOTO/253                  ?0        ?240                 ?175                	;0
233  153   INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'json_decode'   	;2	<<231
234  153   FETCH_DIM_FUNC_ARG/93     $80=      16?10                178:'bouquet'       	;1
235  153   SEND_VAR_EX/66            ?80       $80                  ?1                  	;0
236  153   SEND_VAL_EX/116           ?96       179:true             ?2                  	;0
237  153   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
238  153   ASSIGN/38                 ?66       16?9                 $81                 	;0
239  154   GOTO/253                  ?0        ?69                  ?180                	;0
240  156   INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'json_decode'   	;2
241  156   FETCH_DIM_FUNC_ARG/93     $83=      16?10                183:'bouquet'       	;1
242  156   SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
243  156   SEND_VAL_EX/116           ?96       184:true             ?2                  	;0
244  156   DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
245  156   ASSIGN/38                 ?69       16?6                 $84                 	;0
246  157   GOTO/253                  ?0        ?68                  ?185                	;0
247  159   ECHO/40                   ?0        186:'                pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
            });
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
            $("#datatable-streampage").css("width", "100%");
            $(\'#episodes_search\').keyup(function(){
                if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#episodes_search").val()) {
						setParam("search", $("#episodes_search").val());
					} else {
						delParam("search");
					}
					checkClear();
                    doSearch($(this).val());
                }
            })
            $(\'#episodes_show_entries\').change(function(){
                if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#stream_show_entries").val()) {
						setParam("entries", $("#stream_show_entries").val());
					} else {
						delParam("entries");
					}
                    rTable.page.len($(this).val()).draw();
                }
            })
            $(\'#episodes_series\').change(function(){
                if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#episodes_series").val()) {
						setParam("series", $("#episodes_series").val());
					} else {
						delParam("series");
					}
					checkClear();
                    rTable.ajax.reload( null, false );
                }
            })
            $(\'#series_category_id\').change(function(){
                if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#series_category_id").val()) {
						setParam("category", $("#series_category_id").val());
					} else {
						delParam("category");
					}
					checkClear();
                    rTable.ajax.reload( null, false );
                }
            })
            if ($(\'#episodes_search\').val()) {
                rTable.search($(\'#episodes_search\').val()).draw();
            }
            checkClear();
        });
        
		' ?0                  	;0
248  161   GOTO/253                  ?0        ?572                 ?187                	;0
249  163   ECHO/40                   ?0        188:'        
        var rClearing = false;

		function api(rID, rType, rConfirm=false) {
            if ((rType == "delete") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Delete",
                    cancelButton: "Cancel",
                    content: "' ?0                  	;0
250  164   GOTO/253                  ?0        ?1234                ?189                	;0
251  167   ECHO/40                   ?0        190:'        
		var rClearing = false;

        function openImage(elem) {
			rPath = $(elem).data("src");
			if (rPath) {
                $.magnificPopup.open({
                    items: {
                        src: \'./resize.php?maxw=768&maxh=768&url=\' + rPath,
                        type: \'image\'
                    }
                });
			}
		}
        function api(rID, rType, rConfirm=false) {
            if ((rType == "purge") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Kill",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to kill all connections to this station? This will include any connections from your subresellers too.",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
			} else {
                rConfirm = true;
            }
            if (rConfirm) {
                $.getJSON("./api?action=connections&sub=" + rType + "&stream_id=" + rID, function(data) {
                    if (data.result == true) {
                        if (rType == "purge") {
                            $.toast("All connections have been killed.");
                        }
                        refreshTable(); setTimeout(refreshTable, 5000);
                    } else {
                        $.toast("An error occured while processing your request.");
                    }
                }).fail(function() {
                    $.toast("An error occured while processing your request.");
                });
            }
		}
		function refreshTable() {
			$("#datatable-streampage").DataTable().ajax.reload( null, false );
		}
		function getCategory() {
			return $("#station_category_id").val();
		}
		function clearFilters() {
			window.rClearing = true;
			$("#station_search").val("").trigger(\'change\');
			$(\'#station_category_id\').val("").trigger(\'change\');
			$(\'#station_show_entries\').val("' ?0                  	;0
252  168   INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'intval'        	;1
253  168   FETCH_DIM_FUNC_ARG/93     $86=      16?4                 193:'default_entries'	;1
254  168   SEND_VAR_EX/66            ?80       $86                  ?1                  	;0
255  168   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
256  168   JMP_SET/152               #88=      $87                  ?258                	;0
257  168   QM_ASSIGN/22              #88=      194:10               ?0                  	;0
258  168   ECHO/40                   ?0        #88                  ?0                  	;0
259  169   ECHO/40                   ?0        195:'").trigger(\'change\');
			window.rClearing = false;
			$(\'#datatable-streampage\').DataTable().search($("#station_search").val());
			$(\'#datatable-streampage\').DataTable().page.len($(\'#station_show_entries\').val());
			$("#datatable-streampage").DataTable().page(0).draw(\'page\');
			$("#datatable-streampage").DataTable().ajax.reload( null, false );
            delParams(["search", "category", "page", "entries"]);
			checkClear();
		}
        function checkClear() {
			if (!hasParams(["search", "category"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
        var rSearch;
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
			var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
260  170   INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'intval'        	;1
261  170   FETCH_DIM_FUNC_ARG/93     $89=      16?4                 198:'default_entries'	;1
262  170   SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
263  170   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
264  170   ECHO/40                   ?0        $90                  ?0                  	;0
265  171   GOTO/253                  ?0        ?170                 ?199                	;0
266  173   ECHO/40                   ?0        200:'            getPackage();
            $("form").submit(function(e){
                e.preventDefault();
				$("#allowed_ua option").prop(\'selected\', true);
				$("#allowed_ips option").prop(\'selected\', true);
                $(\':input[type="submit"]\').prop(\'disabled\', true);
                submitForm(window.rCurrentPage, new FormData($("form")[0]));
			});
		});
        
		' ?0                  	;0
267  175   GOTO/253                  ?0        ?514                 ?201                	;0
268  177   ECHO/40                   ?0        202:'        
		function api(rID, rType, rConfirm=false) {
            if ((rType == "delete") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Delete",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to delete this ticket?",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
			} else {
                rConfirm = true;
            }
            if (rConfirm) {
                $.getJSON("./api?action=ticket&sub=" + rType + "&ticket_id=" + rID, function(data) {
                    if (data.result == true) {
                        reloadPage();
                    } else {
                        $.toast("An error occured while processing your request.");
                    }
                }).fail(function() {
                    $.toast("An error occured while processing your request.");
                });
            }
		}
		$(document).ready(function() {
			$("#tickets-table").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>"
					}
				},
				drawCallback: function() {
                    bindHref(); refreshTooltips();
				},
				order: [[ 0, "desc" ]]
			});
			$("#tickets-table").css("width", "100%");
		});
        
		' ?0                  	;0
269  178   GOTO/253                  ?0        ?514                 ?203                	;0
270  181   ECHO/40                   ?0        204:'				order: [[ ' ?0                  	;0
271  182   FETCH_STATIC_PROP_IS/176  $91=      205:'rRequest'       206:'XUI'           	;0
272  182   ISSET_ISEMPTY_DIM_OBJ/115 #92=      $91                  208:'order'         	;33554432
273  182   JMPZ/43                   ?0        #92                  ?281                	;0	>>281
274  182   INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'intval'        	;1
275  182   FETCH_STATIC_PROP_FUNC_ARG/177 $93=      211:'rRequest'       212:'XUI'           	;1
276  182   FETCH_DIM_FUNC_ARG/93     $94=      $93                  214:'order'         	;1
277  182   SEND_VAR_EX/66            ?80       $94                  ?1                  	;0
278  182   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
279  182   QM_ASSIGN/22              #96=      $95                  ?0                  	;0
280  182   JMP/42                    ?0        ?282                 ?0                  	;0	>>282
281  182   QM_ASSIGN/22              #96=      215:2                ?0                  	;0	<<273
282  182   ECHO/40                   ?0        #96                  ?0                  	;0	<<280
283  183   ECHO/40                   ?0        216:', "'            ?0                  	;0
284  184   INIT_FCALL_BY_NAME/59     ?0        ?0                   217:'in_array'      	;2
285  184   INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'strtolower'    	;1
286  184   FETCH_STATIC_PROP_FUNC_ARG/177 $97=      221:'rRequest'       222:'XUI'           	;1
287  184   FETCH_DIM_FUNC_ARG/93     $98=      $97                  224:'dir'           	;1
288  184   SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
289  184   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
290  184   SEND_VAR_NO_REF_EX/50     ?80       $99                  ?1                  	;0
291  184   SEND_VAL_EX/116           ?96       225:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
292  184   DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
293  184   JMPZ/43                   ?0        $100                 ?301                	;0	>>301
294  184   INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'strtolower'    	;1
295  184   FETCH_STATIC_PROP_FUNC_ARG/177 $101=     228:'rRequest'       229:'XUI'           	;1
296  184   FETCH_DIM_FUNC_ARG/93     $102=     $101                 231:'dir'           	;1
297  184   SEND_VAR_EX/66            ?80       $102                 ?1                  	;0
298  184   DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
299  184   QM_ASSIGN/22              #104=     $103                 ?0                  	;0
300  184   JMP/42                    ?0        ?302                 ?0                  	;0	>>302
301  184   QM_ASSIGN/22              #104=     232:'asc'            ?0                  	;0	<<293
302  184   ECHO/40                   ?0        #104                 ?0                  	;0	<<300
303  185   GOTO/253                  ?0        ?1680                ?233                	;0
304  187   ECHO/40                   ?0        234:'        <footer class="footer">
            ' ?0                  	;0
305  188   JMPZ/43                   ?0        16?1                 ?307                	;0	>>307
306  189   GOTO/253                  ?0        ?308                 ?235                	;0
307  191   ECHO/40                   ?0        236:'<a href="#" class="scrollToTop"><button type="button" class="btn btn-success waves-effect waves-light"><i class="fas fa-caret-up"></i></button></a>' ?0                  	;0	<<305
308  193   ECHO/40                   ?0        237:'            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 copyright text-center">' ?0                  	;0
309  194   GOTO/253                  ?0        ?1468                ?238                	;0
310  197   INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'json_decode'   	;2
311  197   FETCH_DIM_FUNC_ARG/93     $105=     16?10                241:'bouquet'       	;1
312  197   SEND_VAR_EX/66            ?80       $105                 ?1                  	;0
313  197   SEND_VAL_EX/116           ?96       242:true             ?2                  	;0
314  197   DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
315  197   ASSIGN/38                 ?91       16?6                 $106                	;0
316  198   ASSIGN/38                 ?92       16?5                 243:false           	;0
317  200   FE_RESET_R/77             $109=     16?6                 ?415                	;0
318  200   FE_FETCH_R/78             ?0        $109                 16?7                	;415	>>415	<<414
319  201   NOP/0                     ?0        ?0                   ?0                  	;1
320  201   GOTO/253                  ?0        ?345                 ?244                	;0
321  203   ECHO/40                   ?0        245:', \''           ?0                  	;0
322  204   INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'str_replace'   	;3
323  204   SEND_VAL_EX/116           ?80       248:'\''             ?1                  	;0
324  204   SEND_VAL_EX/116           ?96       249:'\\\''           ?2                  	;0
325  204   FETCH_DIM_FUNC_ARG/93     $110=     16?8                 250:'bouquet_name'  	;3
326  204   SEND_VAR_EX/66            ?112      $110                 ?3                  	;0
327  204   DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
328  204   ECHO/40                   ?0        $111                 ?0                  	;0
329  205   ECHO/40                   ?0        251:'\', '           ?0                  	;0
330  206   INIT_FCALL_BY_NAME/59     ?0        ?0                   252:'count'         	;1
331  206   INIT_FCALL_BY_NAME/59     ?0        ?0                   254:'json_decode'   	;2
332  206   FETCH_DIM_FUNC_ARG/93     $112=     16?8                 256:'bouquet_channels'	;1
333  206   SEND_VAR_EX/66            ?80       $112                 ?1                  	;0
334  206   SEND_VAL_EX/116           ?96       257:true             ?2                  	;0
335  206   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
336  206   SEND_VAR_NO_REF_EX/50     ?80       $113                 ?1                  	;0
337  206   DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
338  206   ECHO/40                   ?0        $114                 ?0                  	;0
339  207   ECHO/40                   ?0        258:', '             ?0                  	;0
340  208   NOP/0                     ?0        ?0                   ?0                  	;1
341  208   GOTO/253                  ?0        ?364                 ?259                	;0
342  210   ECHO/40                   ?0        260:']);
					'     ?0                  	;0
343  213   NOP/0                     ?0        ?0                   ?0                  	;1
344  213   GOTO/253                  ?0        ?414                 ?261                	;0
345  215   INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'b47fb5320E43f112'	;1
346  215   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
347  215   DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
348  215   ASSIGN/38                 ?100      16?8                 $115                	;0
349  216   INIT_FCALL_BY_NAME/59     ?0        ?0                   264:'strlen'        	;1
350  216   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
351  216   DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
352  216   IS_SMALLER/19             #118=     266:0                $117                	;0
353  216   BOOL_NOT/13               #119=     #118                 ?0                  	;0
354  216   JMPZ/43                   ?0        #119                 ?357                	;0	>>357
355  217   NOP/0                     ?0        ?0                   ?0                  	;1
356  217   GOTO/253                  ?0        ?343                 ?267                	;0
357  219   ECHO/40                   ?0        268:'					rTable.row.add([' ?0                  	;0	<<354
358  220   JMPZ/43                   ?0        16?5                 ?361                	;0	>>361
359  221   NOP/0                     ?0        ?0                   ?0                  	;1
360  221   GOTO/253                  ?0        ?409                 ?269                	;0
361  223   ECHO/40                   ?0        16?7                 ?0                  	;0	<<358
362  224   NOP/0                     ?0        ?0                   ?0                  	;1
363  224   GOTO/253                  ?0        ?407                 ?270                	;0
364  226   INIT_FCALL_BY_NAME/59     ?0        ?0                   271:'count'         	;1
365  226   INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'json_decode'   	;2
366  226   FETCH_DIM_FUNC_ARG/93     $120=     16?8                 275:'bouquet_movies'	;1
367  226   SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
368  226   SEND_VAL_EX/116           ?96       276:true             ?2                  	;0
369  226   DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
370  226   SEND_VAR_NO_REF_EX/50     ?80       $121                 ?1                  	;0
371  226   DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
372  226   ECHO/40                   ?0        $122                 ?0                  	;0
373  227   ECHO/40                   ?0        277:', '             ?0                  	;0
374  228   INIT_FCALL_BY_NAME/59     ?0        ?0                   278:'count'         	;1
375  228   INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'json_decode'   	;2
376  228   FETCH_DIM_FUNC_ARG/93     $123=     16?8                 282:'bouquet_series'	;1
377  228   SEND_VAR_EX/66            ?80       $123                 ?1                  	;0
378  228   SEND_VAL_EX/116           ?96       283:true             ?2                  	;0
379  228   DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
380  228   SEND_VAR_NO_REF_EX/50     ?80       $124                 ?1                  	;0
381  228   DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
382  228   ECHO/40                   ?0        $125                 ?0                  	;0
383  229   ECHO/40                   ?0        284:', '             ?0                  	;0
384  230   INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'count'         	;1
385  230   INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'json_decode'   	;2
386  230   FETCH_DIM_FUNC_ARG/93     $126=     16?8                 289:'bouquet_radios'	;1
387  230   SEND_VAR_EX/66            ?80       $126                 ?1                  	;0
388  230   SEND_VAL_EX/116           ?96       290:true             ?2                  	;0
389  230   DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
390  230   SEND_VAR_NO_REF_EX/50     ?80       $127                 ?1                  	;0
391  230   DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
392  230   ECHO/40                   ?0        $128                 ?0                  	;0
393  231   NOP/0                     ?0        ?0                   ?0                  	;1
394  231   GOTO/253                  ?0        ?342                 ?291                	;0
395  233   INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'in_array'      	;2
396  233   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
397  233   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
398  233   DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
399  233   BOOL_NOT/13               #130=     $129                 ?0                  	;0
400  233   JMPZ/43                   ?0        #130                 ?403                	;0	>>403
401  234   NOP/0                     ?0        ?0                   ?0                  	;1
402  234   GOTO/253                  ?0        ?404                 ?294                	;0
403  236   ECHO/40                   ?0        295:'checked'        ?0                  	;0	<<400
404  238   ECHO/40                   ?0        296:'></input>"'     ?0                  	;0
405  240   NOP/0                     ?0        ?0                   ?0                  	;1
406  240   GOTO/253                  ?0        ?321                 ?297                	;0
407  242   NOP/0                     ?0        ?0                   ?0                  	;1
408  242   GOTO/253                  ?0        ?405                 ?298                	;0
409  244   ECHO/40                   ?0        299:'"<input class=\'big_checkbox\' type=\'checkbox\' name=\'bouquets_selected[]\' value=\'' ?0                  	;0
410  245   ECHO/40                   ?0        16?7                 ?0                  	;0
411  246   ECHO/40                   ?0        300:'\' '            ?0                  	;0
412  247   NOP/0                     ?0        ?0                   ?0                  	;1
413  247   GOTO/253                  ?0        ?395                 ?301                	;0
414  248   JMP/42                    ?0        ?318                 ?0                  	;0	>>318
415  248   FE_FREE/127               ?0        $109                 ?0                  	;0	<<317
416  250   GOTO/253                  ?0        ?694                 ?302                	;0
417  252   GOTO/253                  ?0        ?419                 ?303                	;0
418  254   ECHO/40                   ?0        304:'        
        function generateCode() {
			var result           = \'\';
			var characters       = \'ABCDEF0123456789\';
			var charactersLength = characters.length;
			for ( var i = 0; i < 32; i++ ) {
				result += characters.charAt(Math.floor(Math.random() * charactersLength));
			}
			$("#api_key").val(result);
		}
        function clearCode() {
            $("#api_key").val("");
        }
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
            $("form").submit(function(e){
                e.preventDefault();
                $(\':input[type="submit"]\').prop(\'disabled\', true);
                submitForm(window.rCurrentPage, new FormData($("form")[0]));
            });
		});
        
		' ?0                  	;0
419  256   GOTO/253                  ?0        ?59                  ?305                	;0
420  257   GOTO/253                  ?0        ?1042                ?306                	;0
421  259   ECHO/40                   ?0        307:'        function navigate(rPage) {
            window.location.href = rPage;
        }
        function reloadPage() {
            location.reload();
        }
        ' ?0                  	;0
422  260   GOTO/253                  ?0        ?424                 ?308                	;0
423  262   ECHO/40                   ?0        309:'        function reloadMenu() {
            $(".navigation-menu a").each(function() {
                ($(this).removeClass("active"), $(this).parent().removeClass("active"), $(this).parent().parent().removeClass("in"), $(this).parent().parent().prev().removeClass("active"), $(this).parent().parent().parent().removeClass("active"), $(this).parent().parent().parent().parent().removeClass("in"), $(this).parent().parent().parent().parent().parent().removeClass("active"));
            });
            $(".navigation-menu a").each(function() {
                var rURL = window.location.href.split(/[?#]/)[0];
                if (this.href == rURL) {
                    ($(this).addClass("active"), $(this).parent().addClass("active"), $(this).parent().parent().addClass("in"), $(this).parent().parent().prev().addClass("active"), $(this).parent().parent().parent().addClass("active"), $(this).parent().parent().parent().parent().addClass("in"), $(this).parent().parent().parent().parent().parent().addClass("active"));
                }
            });
            setTimeout(fadeRipple, 350);
        }
        function fadeRipple() {
            $(".waves-ripple").attr("style", "");
        }
        function resetKnobs() {
            $(\'[data-plugin="knob"]\').each(function(t, i) {
                $(this).knob({
                    \'format\' : function (value) {
                        return value + \'%\';
                    }
                })
            });
            $(\'[data-plugin="peity-line"]\').each(function(t, i) {
                $(this).peity("line", $(this).data());
            });
        }
        function killTimeouts() {
            var highestTimeoutId = setTimeout(";");
            for (var i = 0 ; i < highestTimeoutId ; i++) {
                clearTimeout(i); 
            }
        }
        function navigate(rURL) {
            if ((window.rCurrentPage) && (rURL == window.rCurrentPage + "#")) {
                return false;
            }
			if (rURL.split("#")[0].split("?")[0] == "epg_view") {
				window.location.href = rURL;
				window.location.reload();
				return;
			}
            $(".wrapper").off().find("*").off();
            $(".modal").off().find("*").off();
            $(".submenu").hide();
            window.rCurrentPage = rURL.split("/").reverse()[0].split("?")[0].split(".")[0];
            setURL(rURL, false);
            killTimeouts();
            reloadMenu();
            $.magnificPopup.close();
            $(\'.modal\').modal(\'hide\');
            $(".modal-backdrop").hide();
            $(".wrapper").fadeOut();
            $("#status").fadeIn();
            $(".jq-toast-single").remove();
            $(\'html, body\').animate({scrollTop : 0},400);
            $("#header_stats").show();
            $.get(rURL, function(rData) {
                if ($(rData).filter("title").data("id") == "login") {
                    window.location.href = \'./login?referrer=\' + encodeURIComponent(location.href.split("/").slice(-1)[0]);
                }
                var rTables = $.fn.dataTable.fnTables(true);
                $(rTables).each(function () {
                    $(this).DataTable().destroy(true);
                });
                document.title = $(rData).filter("title").text();
                $(".wrapper").replaceWith($(rData).filter(".wrapper"));
                $("#scripts").replaceWith($(rData).filter("#scripts"));
                $("#topnav-custom").replaceWith($(rData).filter("#topnav").find("#topnav-custom"));
                jQuery.ready();
                resetKnobs();
                bindHref();
                refreshTooltips();
                if ($(".nav")) {
                    $(".nav:first").find(".nav-link:first").trigger("click");
                }
                $(".wrapper").fadeIn();
                $("#status").fadeOut();
            }).fail(function() {
                window.location.href = rURL;
            });
        }
        function reloadPage() {
            navigate(window.location.href);
        }
        ' ?0                  	;0
424  264   GOTO/253                  ?0        ?1100                ?310                	;0
425  266   GOTO/253                  ?0        ?1223                ?311                	;0
426  268   ECHO/40                   ?0        312:'        var rUserPackage = ' ?0                  	;0
427  269   INIT_FCALL_BY_NAME/59     ?0        ?0                   313:'intval'        	;1
428  269   FETCH_DIM_FUNC_ARG/93     $131=     16?10                315:'package_id'    	;1
429  269   SEND_VAR_EX/66            ?80       $131                 ?1                  	;0
430  269   DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
431  269   JMP_SET/152               #133=     $132                 ?433                	;0
432  269   QM_ASSIGN/22              #133=     316:'null'           ?0                  	;0
433  269   ECHO/40                   ?0        #133                 ?0                  	;0
434  270   ECHO/40                   ?0        317:';
        var rUserBouquet = [' ?0                  	;0
435  271   GOTO/253                  ?0        ?1206                ?318                	;0
436  273   GOTO/253                  ?0        ?1072                ?319                	;0
437  275   ECHO/40                   ?0        320:'				order: [[ ' ?0                  	;0
438  276   FETCH_STATIC_PROP_IS/176  $134=     321:'rRequest'       322:'XUI'           	;0
439  276   ISSET_ISEMPTY_DIM_OBJ/115 #135=     $134                 324:'order'         	;33554432
440  276   JMPZ/43                   ?0        #135                 ?448                	;0	>>448
441  276   INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'intval'        	;1
442  276   FETCH_STATIC_PROP_FUNC_ARG/177 $136=     327:'rRequest'       328:'XUI'           	;1
443  276   FETCH_DIM_FUNC_ARG/93     $137=     $136                 330:'order'         	;1
444  276   SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
445  276   DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
446  276   QM_ASSIGN/22              #139=     $138                 ?0                  	;0
447  276   JMP/42                    ?0        ?449                 ?0                  	;0	>>449
448  276   QM_ASSIGN/22              #139=     331:2                ?0                  	;0	<<440
449  276   ECHO/40                   ?0        #139                 ?0                  	;0	<<447
450  277   ECHO/40                   ?0        332:', "'            ?0                  	;0
451  278   GOTO/253                  ?0        ?1052                ?333                	;0
452  280   GOTO/253                  ?0        ?695                 ?334                	;0
453  282   ECHO/40                   ?0        335:'        
        ' ?0                  	;0
454  283   ISSET_ISEMPTY_CV/197      #140=     16?10                ?0                  	;33554432
455  283   JMPZ/43                   ?0        #140                 ?457                	;0	>>457
456  284   GOTO/253                  ?0        ?426                 ?336                	;0
457  286   ECHO/40                   ?0        337:'        var rUserPackage = null;
        var rUserBouquet = [];
        ' ?0                  	;0	<<455
458  287   GOTO/253                  ?0        ?425                 ?338                	;0
459  289   ECHO/40                   ?0        339:'; }
			var rTable = $("#datatable-activity").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>"
					},
					infoFiltered: ""
				},
				drawCallback: function() {					bindHref(); refreshTooltips();
                    if ($("#datatable-activity").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-activity").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-activity").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
				},
				responsive: false,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "line_activity";
						d.range = getRange();
						d.line = getLine();
						d.stream = getStream();
						d.user = getUser();
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [4,5,6,7,8]},
                    {"className": "ellipsis", "targets": [2]}
				],
                ' ?0                  	;0
460  290   BOOL_NOT/13               #141=     16?1                 ?0                  	;0
461  290   JMPZ/43                   ?0        #141                 ?463                	;0	>>463
462  291   GOTO/253                  ?0        ?464                 ?340                	;0
463  293   ECHO/40                   ?0        341:'scrollX: true,' ?0                  	;0	<<461
464  295   ECHO/40                   ?0        342:'				order: [[ ' ?0                  	;0
465  296   GOTO/253                  ?0        ?1522                ?343                	;0
466  298   FETCH_STATIC_PROP_IS/176  $142=     344:'rRequest'       345:'XUI'           	;0
467  298   ISSET_ISEMPTY_DIM_OBJ/115 #143=     $142                 347:'order'         	;33554432
468  298   JMPZ/43                   ?0        #143                 ?476                	;0	>>476
469  298   INIT_FCALL_BY_NAME/59     ?0        ?0                   348:'intval'        	;1
470  298   FETCH_STATIC_PROP_FUNC_ARG/177 $144=     350:'rRequest'       351:'XUI'           	;1
471  298   FETCH_DIM_FUNC_ARG/93     $145=     $144                 353:'order'         	;1
472  298   SEND_VAR_EX/66            ?80       $145                 ?1                  	;0
473  298   DO_FCALL_BY_NAME/131      $146=     ?0                   ?0                  	;0
474  298   QM_ASSIGN/22              #147=     $146                 ?0                  	;0
475  298   JMP/42                    ?0        ?477                 ?0                  	;0	>>477
476  298   QM_ASSIGN/22              #147=     354:2                ?0                  	;0	<<468
477  298   ECHO/40                   ?0        #147                 ?0                  	;0	<<475
478  299   ECHO/40                   ?0        355:', "'            ?0                  	;0
479  300   INIT_FCALL_BY_NAME/59     ?0        ?0                   356:'in_array'      	;2
480  300   INIT_FCALL_BY_NAME/59     ?0        ?0                   358:'strtolower'    	;1
481  300   FETCH_STATIC_PROP_FUNC_ARG/177 $148=     360:'rRequest'       361:'XUI'           	;1
482  300   FETCH_DIM_FUNC_ARG/93     $149=     $148                 363:'dir'           	;1
483  300   SEND_VAR_EX/66            ?80       $149                 ?1                  	;0
484  300   DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
485  300   SEND_VAR_NO_REF_EX/50     ?80       $150                 ?1                  	;0
486  300   SEND_VAL_EX/116           ?96       364:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
487  300   DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
488  300   JMPZ/43                   ?0        $151                 ?496                	;0	>>496
489  300   INIT_FCALL_BY_NAME/59     ?0        ?0                   365:'strtolower'    	;1
490  300   FETCH_STATIC_PROP_FUNC_ARG/177 $152=     367:'rRequest'       368:'XUI'           	;1
491  300   FETCH_DIM_FUNC_ARG/93     $153=     $152                 370:'dir'           	;1
492  300   SEND_VAR_EX/66            ?80       $153                 ?1                  	;0
493  300   DO_FCALL_BY_NAME/131      $154=     ?0                   ?0                  	;0
494  300   QM_ASSIGN/22              #155=     $154                 ?0                  	;0
495  300   JMP/42                    ?0        ?497                 ?0                  	;0	>>497
496  300   QM_ASSIGN/22              #155=     371:'asc'            ?0                  	;0	<<488
497  300   ECHO/40                   ?0        #155                 ?0                  	;0	<<495
498  301   ECHO/40                   ?0        372:'" ]],
				'    ?0                  	;0
499  303   GOTO/253                  ?0        ?1243                ?373                	;0
500  305   ASSIGN/38                 ?140      16?6                 374:NULL            	;0
501  306   GOTO/253                  ?0        ?513                 ?375                	;0
502  308   INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'json_decode'   	;2
503  308   INIT_FCALL_BY_NAME/59     ?0        ?0                   378:'fDdf8Da6Ab3Fe47B'	;1
504  308   FETCH_DIM_FUNC_ARG/93     $157=     16?10                380:'package_id'    	;1
505  308   SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
506  308   DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
507  308   SEPARATE/156              $158=     $158                 ?0                  	;0
508  308   FETCH_DIM_FUNC_ARG/93     $159=     $158                 381:'bouquets'      	;1
509  308   SEND_VAR_EX/66            ?80       $159                 ?1                  	;0
510  308   SEND_VAL_EX/116           ?96       382:true             ?2                  	;0
511  308   DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
512  308   ASSIGN/38                 ?145      16?6                 $160                	;0
513  310   GOTO/253                  ?0        ?227                 ?383                	;0
514  313   GOTO/253                  ?0        ?1073                ?384                	;0
515  315   ECHO/40                   ?0        385:'        
		var rClearing = false;

        function openImage(elem) {
            var rImage = $(elem).data("src");
            if (rImage) {
                $.magnificPopup.open({
                    items: {
                        src: \'./resize.php?maxw=768&maxh=768&url=\' + rImage,
                        type: \'image\'
                    }
                });
            }
        }
        function api(rID, rType, rConfirm=false) {
            if ((rType == "purge") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Kill",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to kill all connections to this channel? This will include any connections from your subresellers too.",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
			} else {
                rConfirm = true;
            }
            if (rConfirm) {
                $.getJSON("./api?action=connections&sub=" + rType + "&stream_id=" + rID, function(data) {
                    if (data.result == true) {
                        if (rType == "purge") {
                            $.toast("All connections have been killed.");
                        }
                        refreshTable(); setTimeout(refreshTable, 5000);
                    } else {
                        $.toast("An error occured while processing your request.");
                    }
                }).fail(function() {
                    $.toast("An error occured while processing your request.");
                });
            }
		}
		function getCategory() {
			return $("#stream_category_id").val();
		}
		function clearFilters() {
			window.rClearing = true;
			$("#stream_search").val("").trigger(\'change\');
			$(\'#stream_category_id\').val("").trigger(\'change\');
			$(\'#stream_show_entries\').val("' ?0                  	;0
516  316   INIT_FCALL_BY_NAME/59     ?0        ?0                   386:'intval'        	;1
517  316   FETCH_DIM_FUNC_ARG/93     $162=     16?4                 388:'default_entries'	;1
518  316   SEND_VAR_EX/66            ?80       $162                 ?1                  	;0
519  316   DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
520  316   JMP_SET/152               #164=     $163                 ?522                	;0
521  316   QM_ASSIGN/22              #164=     389:10               ?0                  	;0
522  316   ECHO/40                   ?0        #164                 ?0                  	;0
523  317   GOTO/253                  ?0        ?1561                ?390                	;0
524  319   ECHO/40                   ?0        391:'			$("#act_range").val("' ?0                  	;0
525  320   INIT_FCALL_BY_NAME/59     ?0        ?0                   392:'str_replace'   	;3
526  320   SEND_VAL_EX/116           ?80       394:'"'              ?1                  	;0
527  320   SEND_VAL_EX/116           ?96       395:'\\"'            ?2                  	;0
528  320   INIT_FCALL_BY_NAME/59     ?0        ?0                   396:'htmlspecialchars'	;1
529  320   FETCH_STATIC_PROP_FUNC_ARG/177 $165=     398:'rRequest'       399:'XUI'           	;1
530  320   FETCH_DIM_FUNC_ARG/93     $166=     $165                 401:'range'         	;1
531  320   SEND_VAR_EX/66            ?80       $166                 ?1                  	;0
532  320   DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
533  320   SEND_VAR_NO_REF_EX/50     ?112      $167                 ?3                  	;0
534  320   DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
535  320   ECHO/40                   ?0        $168                 ?0                  	;0
536  321   ECHO/40                   ?0        402:'").trigger(\'change\');
			' ?0                  	;0
537  323   ECHO/40                   ?0        403:'			$(\'#act_search\').keyup(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#act_search").val()) {
						setParam("search", $("#act_search").val());
					} else {
						delParam("search");
					}
					checkClear();
					rTable.search($(this).val()).draw();
				}
			});
			$(\'#act_show_entries\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#live_show_entries").val()) {
						setParam("entries", $("#live_show_entries").val());
					} else {
						delParam("entries");
					}
					checkClear();
					rTable.page.len($(this).val()).draw();
				}
			});
			$(\'#act_line\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#act_line").val()) {
						setParam("line", $("#act_line").val());
					} else {
						delParam("line");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
            $(\'#act_stream\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#act_stream").val()) {
						setParam("stream", $("#act_stream").val());
					} else {
						delParam("stream");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
            $(\'#act_user\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#act_user").val()) {
						setParam("user", $("#act_user").val());
					} else {
						delParam("user");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
            if ($(\'#act_search\').val()) {
				rTable.search($(\'#act_search\').val()).draw();
			}
            checkClear();
		});
        
		' ?0                  	;0
538  324   GOTO/253                  ?0        ?760                 ?404                	;0
539  326   FETCH_STATIC_PROP_IS/176  $169=     405:'rRequest'       406:'XUI'           	;0
540  326   ISSET_ISEMPTY_DIM_OBJ/115 #170=     $169                 408:'order'         	;33554432
541  326   JMPZ/43                   ?0        #170                 ?549                	;0	>>549
542  326   INIT_FCALL_BY_NAME/59     ?0        ?0                   409:'intval'        	;1
543  326   FETCH_STATIC_PROP_FUNC_ARG/177 $171=     411:'rRequest'       412:'XUI'           	;1
544  326   FETCH_DIM_FUNC_ARG/93     $172=     $171                 414:'order'         	;1
545  326   SEND_VAR_EX/66            ?80       $172                 ?1                  	;0
546  326   DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
547  326   QM_ASSIGN/22              #174=     $173                 ?0                  	;0
548  326   JMP/42                    ?0        ?550                 ?0                  	;0	>>550
549  326   QM_ASSIGN/22              #174=     415:0                ?0                  	;0	<<541
550  326   ECHO/40                   ?0        #174                 ?0                  	;0	<<548
551  327   ECHO/40                   ?0        416:', "'            ?0                  	;0
552  328   INIT_FCALL_BY_NAME/59     ?0        ?0                   417:'in_array'      	;2
553  328   INIT_FCALL_BY_NAME/59     ?0        ?0                   419:'strtolower'    	;1
554  328   FETCH_STATIC_PROP_FUNC_ARG/177 $175=     421:'rRequest'       422:'XUI'           	;1
555  328   FETCH_DIM_FUNC_ARG/93     $176=     $175                 424:'dir'           	;1
556  328   SEND_VAR_EX/66            ?80       $176                 ?1                  	;0
557  328   DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
558  328   SEND_VAR_NO_REF_EX/50     ?80       $177                 ?1                  	;0
559  328   SEND_VAL_EX/116           ?96       425:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
560  328   DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
561  328   JMPZ/43                   ?0        $178                 ?569                	;0	>>569
562  328   INIT_FCALL_BY_NAME/59     ?0        ?0                   426:'strtolower'    	;1
563  328   FETCH_STATIC_PROP_FUNC_ARG/177 $179=     428:'rRequest'       429:'XUI'           	;1
564  328   FETCH_DIM_FUNC_ARG/93     $180=     $179                 431:'dir'           	;1
565  328   SEND_VAR_EX/66            ?80       $180                 ?1                  	;0
566  328   DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
567  328   QM_ASSIGN/22              #182=     $181                 ?0                  	;0
568  328   JMP/42                    ?0        ?570                 ?0                  	;0	>>570
569  328   QM_ASSIGN/22              #182=     432:'desc'           ?0                  	;0	<<561
570  328   ECHO/40                   ?0        #182                 ?0                  	;0	<<568
571  329   ECHO/40                   ?0        433:'" ]],
				pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
			});
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
			$("#datatable-users").css("width", "100%");
			$(\'#e2_search\').keyup(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#e2_search").val()) {
						setParam("search", $("#e2_search").val());
					} else {
						delParam("search");
					}
					checkClear();
					doSearch($(this).val());
				}
			});
			$(\'#e2_show_entries\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#e2_show_entries").val()) {
						setParam("entries", $("#e2_show_entries").val());
					} else {
						delParam("entries");
					}
					checkClear();
					rTable.page.len($(this).val()).draw();
				}
			});
			$(\'#e2_filter\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#e2_filter").val()) {
						setParam("filter", $("#e2_filter").val());
					} else {
						delParam("filter");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
			$(\'#e2_reseller\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#e2_reseller").val()) {
						setParam("owner", $("#e2_reseller").val());
					} else {
						delParam("owner");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
			if ($(\'#e2_search\').val()) {
				rTable.search($(\'#e2_search\').val()).draw();
			}
			checkClear();
		});
        
        ' ?0                  	;0
572  331   GOTO/253                  ?0        ?417                 ?434                	;0
573  333   FETCH_STATIC_PROP_IS/176  $183=     435:'rRequest'       436:'XUI'           	;0
574  333   ISSET_ISEMPTY_DIM_OBJ/115 #184=     $183                 438:'order'         	;33554432
575  333   JMPZ/43                   ?0        #184                 ?583                	;0	>>583
576  333   INIT_FCALL_BY_NAME/59     ?0        ?0                   439:'intval'        	;1
577  333   FETCH_STATIC_PROP_FUNC_ARG/177 $185=     441:'rRequest'       442:'XUI'           	;1
578  333   FETCH_DIM_FUNC_ARG/93     $186=     $185                 444:'order'         	;1
579  333   SEND_VAR_EX/66            ?80       $186                 ?1                  	;0
580  333   DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
581  333   QM_ASSIGN/22              #188=     $187                 ?0                  	;0
582  333   JMP/42                    ?0        ?584                 ?0                  	;0	>>584
583  333   QM_ASSIGN/22              #188=     445:4                ?0                  	;0	<<575
584  333   ECHO/40                   ?0        #188                 ?0                  	;0	<<582
585  334   ECHO/40                   ?0        446:', "'            ?0                  	;0
586  335   INIT_FCALL_BY_NAME/59     ?0        ?0                   447:'in_array'      	;2
587  335   INIT_FCALL_BY_NAME/59     ?0        ?0                   449:'strtolower'    	;1
588  335   FETCH_STATIC_PROP_FUNC_ARG/177 $189=     451:'rRequest'       452:'XUI'           	;1
589  335   FETCH_DIM_FUNC_ARG/93     $190=     $189                 454:'dir'           	;1
590  335   SEND_VAR_EX/66            ?80       $190                 ?1                  	;0
591  335   DO_FCALL_BY_NAME/131      $191=     ?0                   ?0                  	;0
592  335   SEND_VAR_NO_REF_EX/50     ?80       $191                 ?1                  	;0
593  335   SEND_VAL_EX/116           ?96       455:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
594  335   DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
595  335   JMPZ/43                   ?0        $192                 ?603                	;0	>>603
596  335   INIT_FCALL_BY_NAME/59     ?0        ?0                   456:'strtolower'    	;1
597  335   FETCH_STATIC_PROP_FUNC_ARG/177 $193=     458:'rRequest'       459:'XUI'           	;1
598  335   FETCH_DIM_FUNC_ARG/93     $194=     $193                 461:'dir'           	;1
599  335   SEND_VAR_EX/66            ?80       $194                 ?1                  	;0
600  335   DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
601  335   QM_ASSIGN/22              #196=     $195                 ?0                  	;0
602  335   JMP/42                    ?0        ?604                 ?0                  	;0	>>604
603  335   QM_ASSIGN/22              #196=     462:'desc'           ?0                  	;0	<<595
604  335   ECHO/40                   ?0        #196                 ?0                  	;0	<<602
605  336   ECHO/40                   ?0        463:'" ]],
				'    ?0                  	;0
606  337   GOTO/253                  ?0        ?1681                ?464                	;0
607  338   GOTO/253                  ?0        ?270                 ?465                	;0
608  340   FETCH_STATIC_PROP_R/173   $197=     466:'rSettings'      467:'XUI'           	;0
609  340   FETCH_DIM_R/81            $198=     $197                 469:'redis_handler' 	;0
610  340   JMPZ/43                   ?0        $198                 ?612                	;0	>>612
611  341   GOTO/253                  ?0        ?614                 ?470                	;0
612  343   ECHO/40                   ?0        471:'					{"orderable": false, "targets": [1,5]},
					' ?0                  	;0	<<610
613  344   GOTO/253                  ?0        ?9                   ?472                	;0
614  346   ECHO/40                   ?0        473:'					{"orderable": false, "targets": [1,4,5]},
					' ?0                  	;0
615  347   GOTO/253                  ?0        ?9                   ?474                	;0
616  349   ECHO/40                   ?0        475:'					{"visible": false, "targets": [1]}
				],
                ' ?0                  	;0
617  350   BOOL_NOT/13               #199=     16?1                 ?0                  	;0
618  350   JMPZ/43                   ?0        #199                 ?620                	;0	>>620
619  351   GOTO/253                  ?0        ?621                 ?476                	;0
620  353   ECHO/40                   ?0        477:'scrollX: true,' ?0                  	;0	<<618
621  355   ECHO/40                   ?0        478:'				order: [[ ' ?0                  	;0
622  356   GOTO/253                  ?0        ?539                 ?479                	;0
623  358   ECHO/40                   ?0        480:'            $(".navigation-menu li").mouseenter(function() {
                $(this).find(".submenu").show();
            });
            delParam("status");
            $(window).on("popstate", function () {
                if (window.rRealURL) {
                    if (window.rRealURL.split("/").reverse()[0].split("?")[0].split(".")[0] != window.location.href.split("/").reverse()[0].split("?")[0].split(".")[0]) {
                        navigate(window.location.href.split("/").reverse()[0]);
                    }
                }
            });
            ' ?0                  	;0
624  360   ECHO/40                   ?0        481:'		});
        
		' ?0                  	;0
625  361   IS_EQUAL/17               #200=     16?11                482:'credit_logs'   	;0
626  361   JMPZ/43                   ?0        #200                 ?628                	;0	>>628
627  362   GOTO/253                  ?0        ?669                 ?483                	;0
628  364   IS_EQUAL/17               #201=     16?11                484:'dashboard'     	;0	<<626
629  364   JMPZ/43                   ?0        #201                 ?631                	;0	>>631
630  365   GOTO/253                  ?0        ?1042                ?485                	;0
631  367   GOTO/253                  ?0        ?801                 ?486                	;0	<<629
632  369   FETCH_STATIC_PROP_IS/176  $202=     487:'rRequest'       488:'XUI'           	;0
633  369   ISSET_ISEMPTY_DIM_OBJ/115 #203=     $202                 490:'order'         	;33554432
634  369   JMPZ/43                   ?0        #203                 ?642                	;0	>>642
635  369   INIT_FCALL_BY_NAME/59     ?0        ?0                   491:'intval'        	;1
636  369   FETCH_STATIC_PROP_FUNC_ARG/177 $204=     493:'rRequest'       494:'XUI'           	;1
637  369   FETCH_DIM_FUNC_ARG/93     $205=     $204                 496:'order'         	;1
638  369   SEND_VAR_EX/66            ?80       $205                 ?1                  	;0
639  369   DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
640  369   QM_ASSIGN/22              #207=     $206                 ?0                  	;0
641  369   JMP/42                    ?0        ?643                 ?0                  	;0	>>643
642  369   QM_ASSIGN/22              #207=     497:0                ?0                  	;0	<<634
643  369   ECHO/40                   ?0        #207                 ?0                  	;0	<<641
644  370   ECHO/40                   ?0        498:', "'            ?0                  	;0
645  371   INIT_FCALL_BY_NAME/59     ?0        ?0                   499:'in_array'      	;2
646  371   INIT_FCALL_BY_NAME/59     ?0        ?0                   501:'strtolower'    	;1
647  371   FETCH_STATIC_PROP_FUNC_ARG/177 $208=     503:'rRequest'       504:'XUI'           	;1
648  371   FETCH_DIM_FUNC_ARG/93     $209=     $208                 506:'dir'           	;1
649  371   SEND_VAR_EX/66            ?80       $209                 ?1                  	;0
650  371   DO_FCALL_BY_NAME/131      $210=     ?0                   ?0                  	;0
651  371   SEND_VAR_NO_REF_EX/50     ?80       $210                 ?1                  	;0
652  371   SEND_VAL_EX/116           ?96       507:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
653  371   DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
654  371   JMPZ/43                   ?0        $211                 ?662                	;0	>>662
655  371   INIT_FCALL_BY_NAME/59     ?0        ?0                   508:'strtolower'    	;1
656  371   FETCH_STATIC_PROP_FUNC_ARG/177 $212=     510:'rRequest'       511:'XUI'           	;1
657  371   FETCH_DIM_FUNC_ARG/93     $213=     $212                 513:'dir'           	;1
658  371   SEND_VAR_EX/66            ?80       $213                 ?1                  	;0
659  371   DO_FCALL_BY_NAME/131      $214=     ?0                   ?0                  	;0
660  371   QM_ASSIGN/22              #215=     $214                 ?0                  	;0
661  371   JMP/42                    ?0        ?663                 ?0                  	;0	>>663
662  371   QM_ASSIGN/22              #215=     514:'desc'           ?0                  	;0	<<654
663  371   ECHO/40                   ?0        #215                 ?0                  	;0	<<661
664  372   ECHO/40                   ?0        515:'" ]],
				pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
			});
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
			$("#datatable-users").css("width", "100%");
			$(\'#mag_search\').keyup(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#mag_search").val()) {
						setParam("search", $("#mag_search").val());
					} else {
						delParam("search");
					}
					checkClear();
					doSearch($(this).val());
				}
			});
			$(\'#mag_show_entries\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#mag_show_entries").val()) {
						setParam("entries", $("#mag_show_entries").val());
					} else {
						delParam("entries");
					}
					checkClear();
					rTable.page.len($(this).val()).draw();
				}
			});
			$(\'#mag_filter\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#mag_filter").val()) {
						setParam("filter", $("#mag_filter").val());
					} else {
						delParam("filter");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
			$(\'#mag_reseller\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#mag_reseller").val()) {
						setParam("owner", $("#mag_reseller").val());
					} else {
						delParam("owner");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
			$("#message_type").change(function(){
				if ($(this).val() == "send_msg") {
					$("#send_msg_form").show();
					$("#play_channel_form").hide();
					$("#message_submit").attr("disabled", false);
				} else if ($(this).val() == "play_channel") {
					$("#send_msg_form").hide();
					$("#play_channel_form").show();
					$("#message_submit").attr("disabled", false);
				} else {
					$("#send_msg_form").hide();
					$("#play_channel_form").hide();
					if ($(this).val() == "") {
						$("#message_submit").attr("disabled", true);
					} else {
						$("#message_submit").attr("disabled", false);
					}
				}
			});
			$(\'#selected_channel\').select2({
			  ajax: {
				url: \'./api\',
				dataType: \'json\',
				data: function (params) {
				  return {
					search: params.term,
					action: \'streamlist\',
					page: params.page
				  };
				},
				processResults: function (data, params) {
				  params.page = params.page || 1;
				  return {
					results: data.items,
					pagination: {
						more: (params.page * 100) < data.total_count
					}
				  };
				},
				cache: true
			  },
			  placeholder: \'' ?0                  	;0
665  373   FETCH_DIM_R/81            $216=     16?0                 516:'start_typing'  	;0
666  373   ECHO/40                   ?0        $216                 ?0                  	;0
667  374   GOTO/253                  ?0        ?1628                ?517                	;0
668  376   GOTO/253                  ?0        ?1594                ?518                	;0
669  378   ECHO/40                   ?0        519:'        
		function getReseller() {
			return $("#reseller").val();
		}
		function getRange() {
			return $("#range").val();
		}

		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
			$(\'#range\').daterangepicker({
				singleDatePicker: false,
				showDropdowns: true,
				locale: {
					format: \'YYYY-MM-DD\'
				},
				autoUpdateInput: false
			}).val("");
			$(\'#range\').on(\'apply.daterangepicker\', function(ev, picker) {
				$(this).val(picker.startDate.format(\'YYYY-MM-DD\') + \' - \' + picker.endDate.format(\'YYYY-MM-DD\'));
				$("#datatable-activity").DataTable().ajax.reload( null, false );
			});
			$(\'#range\').on(\'cancel.daterangepicker\', function(ev, picker) {
				$(this).val(\'\');
				$("#datatable-activity").DataTable().ajax.reload( null, false );
			});
			$(\'#range\').on(\'change\', function() {
				$("#datatable-activity").DataTable().ajax.reload( null, false );
			});
			$("#datatable-activity").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>"
					},
					infoFiltered: ""
				},
				drawCallback: function() {
					bindHref(); refreshTooltips();
				},
				responsive: false,
				processing: true,
				serverSide: true,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "credits_log",
						d.range = getRange(),
						d.reseller = getReseller()
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [0,3,5]}
				],
				"order": [[ 0, "desc" ]],
				pageLength: ' ?0                  	;0
670  379   INIT_FCALL_BY_NAME/59     ?0        ?0                   520:'intval'        	;1
671  379   FETCH_DIM_FUNC_ARG/93     $217=     16?4                 522:'default_entries'	;1
672  379   SEND_VAR_EX/66            ?80       $217                 ?1                  	;0
673  379   DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
674  379   JMP_SET/152               #219=     $218                 ?676                	;0
675  379   QM_ASSIGN/22              #219=     523:10               ?0                  	;0
676  379   ECHO/40                   ?0        #219                 ?0                  	;0
677  380   ECHO/40                   ?0        524:'			});
			$("#datatable-activity").css("width", "100%");
			$(\'#log_search\').keyup(function(){
				$(\'#datatable-activity\').DataTable().search($(this).val()).draw();
			})
			$(\'#show_entries\').change(function(){
				$(\'#datatable-activity\').DataTable().page.len($(this).val()).draw();
			})
			$(\'#reseller\').change(function(){
				$("#datatable-activity").DataTable().ajax.reload( null, false );
			})
		});
        
		' ?0                  	;0
678  381   GOTO/253                  ?0        ?1594                ?525                	;0
679  384   ECHO/40                   ?0        526:'        
		var rClearing = false;

        function addCredits(rID, rUsername, rCredits, rIndirect=false) {
			$(\'.creditsModal\').data(\'id\', rID);
            $(\'.creditsModal\').data(\'credits\', rCredits);
            $("#credits_reason").val("");
            $("#credits").val("");
            if (rIndirect) {
                $("#indirect").show();
            } else {
                $("#indirect").hide();
            }
            updateCredits();
            $("#creditsModal").html("User: " + rUsername + " - Credits: " + rCredits.toLocaleString());
            $(\'.creditsModal\').modal(\'show\');
        }
        function updateCredits() {
            rCredits = $("#credits").val();
            if (!Number.isInteger(parseInt(rCredits))) {
                rCredits = 0;
            }
            $("#cost_credits").html(rCredits);
            $("#remaining_credits").html(($("#total_credits").data("credits") - rCredits).toLocaleString());
            if ((parseInt(rCredits) != 0) && (parseInt($("#total_credits").data("credits")) - parseInt(rCredits) >= 0) && (parseInt($(\'.creditsModal\').data(\'credits\')) + parseInt(rCredits) >= 0)) {
                $("#credits_submit").prop("disabled", false);
            } else {
                $("#credits_submit").prop("disabled", true);
            }
        }
        function submitCredits() {
            var rID = $(\'.creditsModal\').data(\'id\');
            var rReason = $("#credits_reason").val();
            var rCredits = $("#credits").val();
            $.getJSON("./api?action=adjust_credits&id=" + encodeURIComponent(rID) + "&reason=" + encodeURIComponent(rReason) + "&credits=" + encodeURIComponent(rCredits), function(data) {
                if (data.result === true) {
                    $.toast("Credits have been adjusted.");
                    refreshCredits();
                    refreshTable();
                } else {
                    $.toast("Credits could not be adjusted. Please ensure you have enough credits for this action.");
                }
            });
            $(\'.creditsModal\').modal(\'hide\');
        }
		function api(rID, rType, rConfirm=false) {
            if ((rType == "delete") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Delete",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to delete this user?",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
			} else {
                rConfirm = true;
            }
            if (rConfirm) {
                $.getJSON("./api?action=reg_user&sub=" + rType + "&user_id=" + rID, function(data) {
                    if (data.result === true) {
                        if (rType == "delete") {
                            $.toast("User has been deleted, any credits assigned have been returned to you.");
                            refreshCredits();
                        } else if (rType == "enable") {
                            $.toast("User has been enabled.");
                        } else if (rType == "disable") {
                            $.toast("User has been disabled.");
                        }
                        $("#datatable-users").DataTable().ajax.reload(null, false);
                    } else {
                        $.toast("An error occured while processing your request.");
                    }
                });
            }
		}
		function getFilter() {
			return $("#reg_filter").val();
		}
		function getReseller() {
			return $("#reg_reseller").val();
		}
		function clearFilters() {
			window.rClearing = true;
			$("#reg_search").val("").trigger(\'change\');
			$(\'#reg_filter\').val("").trigger(\'change\');
			$(\'#reg_reseller\').val("").trigger(\'change\');
			$(\'#reg_show_entries\').val("' ?0                  	;0
680  385   INIT_FCALL_BY_NAME/59     ?0        ?0                   527:'intval'        	;1
681  385   FETCH_DIM_FUNC_ARG/93     $220=     16?4                 529:'default_entries'	;1
682  385   SEND_VAR_EX/66            ?80       $220                 ?1                  	;0
683  385   DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
684  385   JMP_SET/152               #222=     $221                 ?686                	;0
685  385   QM_ASSIGN/22              #222=     530:10               ?0                  	;0
686  385   ECHO/40                   ?0        #222                 ?0                  	;0
687  386   ECHO/40                   ?0        531:'").trigger(\'change\');
			window.rClearing = false;
			$(\'#datatable-users\').DataTable().search($("#reg_search").val());
			$(\'#datatable-users\').DataTable().page.len($(\'#reg_show_entries\').val());
			$("#datatable-users").DataTable().page(0).draw(\'page\');
			$("#datatable-users").DataTable().ajax.reload( null, false );
            delParams(["search", "filter", "owner", "page", "entries"]);
			checkClear();
		}
        function checkClear() {
			if (!hasParams(["search", "filter", "owner"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
		function refreshTable() {
			$("#datatable-users").DataTable().ajax.reload( null, false );
		}
        var rSearch;
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
			var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
688  387   INIT_FCALL_BY_NAME/59     ?0        ?0                   532:'intval'        	;1
689  387   FETCH_DIM_FUNC_ARG/93     $223=     16?4                 534:'default_entries'	;1
690  387   SEND_VAR_EX/66            ?80       $223                 ?1                  	;0
691  387   DO_FCALL_BY_NAME/131      $224=     ?0                   ?0                  	;0
692  387   ECHO/40                   ?0        $224                 ?0                  	;0
693  388   GOTO/253                  ?0        ?1621                ?535                	;0
694  391   ECHO/40                   ?0        536:'                rTable.draw();
            }
        }
        function clearISP() {
            $("#isp_clear").val("");
        }
        function clearDevice() {
			$("#device-info input").each(function() {
				if (!$(this).hasClass("sticky")) {
					$(this).val("");
				}
			});
		}
		$(document).ready(function() {
			$(\'select.select2\').select2({width: \'100%\'})
            $("#package").change(function() {
                getPackage();
            });
            $("#datatable-review").DataTable({
                language: {
                    paginate: {
                        previous: "<i class=\'mdi mdi-chevron-left\'>",
                        next: "<i class=\'mdi mdi-chevron-right\'>"
                    }
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                },
                columnDefs: [
                    {"className": "dt-center", "targets": [0,2,3,4,5]}
                ],
                responsive: false,
                bInfo: false,
                searching: false,
                paging: false,
                order: [[ 1, "asc" ]]
            });
			$("#add_ip").click(function() {
				if (($("#ip_field").val()) && (isValidIP($("#ip_field").val()))) {
					var o = new Option($("#ip_field").val(), $("#ip_field").val());
					$("#allowed_ips").append(o);
					$("#ip_field").val("");
				} else {
					$.toast("Please enter a valid IP address.");
				}
			});
			$("#remove_ip").click(function() {
                if ($(\'#allowed_ips option:selected\').length > 0) {
                    $(\'#allowed_ips option:selected\').remove();
                } else {
                    $.toast("Please select an IP address to remove.");
                }
			});
            $("#mac").on("input", function(e) {
                var rRegex = /([a-f0-9]{2})([a-f0-9]{2})/i, rString = e.target.value.replace(/[^a-f0-9]/ig, "");
                while (rRegex.test(rString)) {
                    rString = rString.replace(rRegex, \'$1\' + \':\' + \'$2\');
                }
                e.target.value = rString.slice(0, 17).toUpperCase();
            });
            getPackage();
            $("form").submit(function(e){
                e.preventDefault();
				$("#allowed_ips option").prop(\'selected\', true);
                $(\':input[type="submit"]\').prop(\'disabled\', true);
                submitForm(window.rCurrentPage, new FormData($("form")[0]));
			});
		});

		' ?0                  	;0
695  393   GOTO/253                  ?0        ?1033                ?537                	;0
696  395   GOTO/253                  ?0        ?1                   ?538                	;0
697  397   FETCH_DIM_R/81            $225=     16?2                 539:'credits'       	;0
698  397   ECHO/40                   ?0        $225                 ?0                  	;0
699  398   ECHO/40                   ?0        540:', 0));
                $("#exp_date").val(\'' ?0                  	;0
700  399   INIT_FCALL_BY_NAME/59     ?0        ?0                   541:'date'          	;2
701  399   FETCH_DIM_R/81            $226=     16?4                 543:'date_format'   	;0
702  399   CONCAT/8                  #227=     $226                 544:' H:i'          	;0
703  399   SEND_VAL_EX/116           ?80       #227                 ?1                  	;0
704  399   FETCH_DIM_FUNC_ARG/93     $228=     16?10                545:'exp_date'      	;2
705  399   SEND_VAR_EX/66            ?96       $228                 ?2                  	;0
706  399   DO_FCALL_BY_NAME/131      $229=     ?0                   ?0                  	;0
707  399   ECHO/40                   ?0        $229                 ?0                  	;0
708  400   ECHO/40                   ?0        546:'\');
                $("#package_cost").val("");
                $("#package_duration").val("");
                $("#package_info").hide();
                $("#package_warning").hide();
                $("#submit_button").val("Save");
                ' ?0                  	;0
709  401   FETCH_DIM_R/81            $230=     16?3                 547:'allow_change_bouquets'	;0
710  401   ASSIGN/38                 $231=     16?5                 $230                	;0
711  401   JMPZ/43                   ?0        $231                 ?713                	;0	>>713
712  402   GOTO/253                  ?0        ?502                 ?548                	;0
713  404   GOTO/253                  ?0        ?500                 ?549                	;0	<<711
714  406   JMPZ/43                   ?0        16?1                 ?716                	;0	>>716
715  407   GOTO/253                  ?0        ?717                 ?550                	;0
716  409   ECHO/40                   ?0        551:'            headerStats();
            ' ?0                  	;0	<<714
717  411   ECHO/40                   ?0        552:'            bindHref(); refreshTooltips();
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $(\'.scrollToTop\').fadeIn();
                } else {
                    $(\'.scrollToTop\').fadeOut();
                }
            });
            $(".scrollToTop").unbind("click");
            $(\'.scrollToTop\').click(function(){
                $(\'html, body\').animate({scrollTop : 0},800);
                return false;
            });
            $(".nextb").unbind("click");
            $(".nextb").click(function() {
                var rPos = 0; var rActive = null;
                $(".nav .nav-item").each(function() {
                    if ($(this).find(".nav-link").hasClass("active")) {
                        rActive = rPos;
                    }
                    if (rActive !== null && rPos > rActive && !$(this).find("a").hasClass("disabled") && $(this).is(":visible")) {
                        $(this).find(".nav-link").trigger("click");
                        return false;
                    }
                    rPos += 1;
                });
            });
            $(".prevb").unbind("click");
            $(".prevb").click(function() {
                var rPos = 0; var rActive = null;
                $($(".nav .nav-item").get().reverse()).each(function() {
                    if ($(this).find(".nav-link").hasClass("active")) {
                        rActive = rPos;
                    }
                    if (rActive !== null && rPos > rActive && !$(this).find("a").hasClass("disabled") && $(this).is(":visible")) {
                        $(this).find(".nav-link").trigger("click");
                        return false;
                    }
                    rPos += 1;
                });
            });
            (function($) {
                $.fn.inputFilter = function(inputFilter) {
                    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
                        if (inputFilter(this.value)) {
                            this.oldValue = this.value;
                            this.oldSelectionStart = this.selectionStart;
                            this.oldSelectionEnd = this.selectionEnd;
                        } else if (this.hasOwnProperty("oldValue")) {
                            this.value = this.oldValue;
                            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                        }
                    });
                };
            }(jQuery));
            ' ?0                  	;0
718  412   FETCH_DIM_R/81            $232=     16?4                 553:'js_navigate'   	;0
719  412   BOOL_NOT/13               #233=     $232                 ?0                  	;0
720  412   JMPZ/43                   ?0        #233                 ?722                	;0	>>722
721  413   GOTO/253                  ?0        ?624                 ?554                	;0
722  415   GOTO/253                  ?0        ?623                 ?555                	;0	<<720
723  417   IS_EQUAL/17               #234=     16?11                556:'line'          	;0
724  417   JMPZ/43                   ?0        #234                 ?726                	;0	>>726
725  418   GOTO/253                  ?0        ?761                 ?557                	;0
726  420   IS_EQUAL/17               #235=     16?11                558:'line_activity' 	;0	<<724
727  420   JMPZ/43                   ?0        #235                 ?729                	;0	>>729
728  421   GOTO/253                  ?0        ?1650                ?559                	;0
729  423   IS_EQUAL/17               #236=     16?11                560:'epg_view'      	;0	<<727
730  423   JMPZ/43                   ?0        #236                 ?732                	;0	>>732
731  424   GOTO/253                  ?0        ?913                 ?561                	;0
732  426   IS_EQUAL/17               #237=     16?11                562:'lines'         	;0	<<730
733  426   BOOL_NOT/13               #238=     #237                 ?0                  	;0
734  426   JMPZ/43                   ?0        #238                 ?736                	;0	>>736
735  427   GOTO/253                  ?0        ?1195                ?563                	;0
736  429   ECHO/40                   ?0        564:'        
		var rClearing = false;

		function api(rID, rType, rConfirm=false) {
            if ((rType == "delete") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Delete",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to delete this line?",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
            } else if ((rType == "kill") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Kill",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to kill this connection?",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
            } else if ((rType == "kill_line") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Kill",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to kill all connections for this line?",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
			} else {
                rConfirm = true;
            }
            if (rConfirm) {
                $.getJSON("./api?action=line&sub=" + rType + "&user_id=" + rID, function(data) {
                    if (data.result === true) {
                        if (rType == "delete") {
                            $.toast("Line has been deleted.");
                        } else if (rType == "enable") {
                            $.toast("Line has been enabled.");
                        } else if (rType == "disable") {
                            $.toast("Line has been disabled.");
                        } else if (rType == "kill_line") {
                            $.toast("All connections for this line have been killed.");
                        } else if (rType == "kill") {
                            $.toast("Connection has been killed.");
                        } else if (rType == "reset_isp") {
                            $.toast("ISP has been reset.");
                        }
                        $("#datatable-users").DataTable().ajax.reload(null, false);
                    } else {
                        $.toast("An error occured while processing your request.");
                    }
                });
            }
		}
		function download(username, password) {
			$("#download_type").val("").trigger("change");
            $("#output_type").val("").trigger("change");
			$("#download_button").attr("disabled", true);
			$(\'.downloadModal\').data(\'username\', username);
			$(\'.downloadModal\').data(\'password\', password);
			$(\'.downloadModal\').modal(\'show\');
		}
		function doDownload() {
			if ($("#download_url").val()) {
				window.open($("#download_url").val());
			}
		}
		function copyDownload() {
			$("#download_url").select();
			document.execCommand("copy");
		}
		function getFilter() {
			return $("#user_filter").val();
		}
		function getReseller() {
			return $("#user_reseller").val();
		}
		function clearFilters() {
			window.rClearing = true;
			$("#user_search").val("").trigger(\'change\');
			$(\'#user_filter\').val("").trigger(\'change\');
			$(\'#user_reseller\').val("").trigger(\'change\');
			$(\'#user_show_entries\').val("' ?0                  	;0	<<734
737  430   GOTO/253                  ?0        ?1247                ?565                	;0
738  432   INIT_FCALL_BY_NAME/59     ?0        ?0                   566:'intval'        	;1
739  432   FETCH_DIM_FUNC_ARG/93     $239=     16?4                 568:'default_entries'	;1
740  432   SEND_VAR_EX/66            ?80       $239                 ?1                  	;0
741  432   DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
742  432   JMP_SET/152               #241=     $240                 ?744                	;0
743  432   QM_ASSIGN/22              #241=     569:10               ?0                  	;0
744  432   ECHO/40                   ?0        #241                 ?0                  	;0
745  433   ECHO/40                   ?0        570:'").trigger(\'change\');
			window.rClearing = false;
			$(\'#datatable-users\').DataTable().search($("#mag_search").val());
			$(\'#datatable-users\').DataTable().page.len($(\'#mag_show_entries\').val());
			$("#datatable-users").DataTable().page(0).draw(\'page\');
			$("#datatable-users").DataTable().ajax.reload( null, false );
            delParams(["search", "filter", "owner", "page", "entries"]);
			checkClear();
		}
        function checkClear() {
			if (!hasParams(["search", "filter", "owner"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
		function refreshTable() {
			$("#datatable-users").DataTable().ajax.reload( null, false );
		}
		function message(id, mac) {
			$(\'.messageModal\').data(\'id\', id);
			$("#messageModal").text("Send Event - " + mac.toUpperCase());
			$("#message_type").val("").trigger("change");
			$("#message").val("");
			$("#selected_channel").val("");
			$("#send_msg_form").hide();
			$("#play_channel_form").hide();
			$(\'.messageModal\').modal(\'show\');
		}
        var rSearch;
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
			var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
746  434   INIT_FCALL_BY_NAME/59     ?0        ?0                   571:'intval'        	;1
747  434   FETCH_DIM_FUNC_ARG/93     $242=     16?4                 573:'default_entries'	;1
748  434   SEND_VAR_EX/66            ?80       $242                 ?1                  	;0
749  434   DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
750  434   ECHO/40                   ?0        $243                 ?0                  	;0
751  435   ECHO/40                   ?0        574:'; }
			var rTable = $("#datatable-users").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>",
					},
					infoFiltered: ""
				},
				drawCallback: function() {					bindHref(); refreshTooltips();
                    if ($("#datatable-users").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-users").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-users").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
				},
				createdRow: function(row, data, index) {
					$(row).addClass(\'user-\' + data[0]);
				},
				responsive: false,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "mags",
						d.filter = getFilter(),
						d.reseller = getReseller()
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [0,2,3,5,6,7,8,9]},
					' ?0                  	;0
752  436   FETCH_STATIC_PROP_R/173   $244=     575:'rSettings'      576:'XUI'           	;0
753  436   FETCH_DIM_R/81            $245=     $244                 578:'redis_handler' 	;0
754  436   JMPZ/43                   ?0        $245                 ?756                	;0	>>756
755  437   GOTO/253                  ?0        ?1008                ?579                	;0
756  439   GOTO/253                  ?0        ?1006                ?580                	;0	<<754
757  442   ECHO/40                   ?0        581:'				pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
			});
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
			$("#datatable-streampage").css("width", "100%");
			$(\'#station_search\').keyup(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#station_search").val()) {
						setParam("search", $("#station_search").val());
					} else {
						delParam("search");
					}
					checkClear();
					doSearch($(this).val());
				}
			})
			$(\'#station_show_entries\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#station_show_entries").val()) {
						setParam("entries", $("#station_show_entries").val());
					} else {
						delParam("entries");
					}
					rTable.page.len($(this).val()).draw();
				}
			})
			$(\'#station_category_id\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#station_category_id").val()) {
						setParam("category", $("#station_category_id").val());
					} else {
						delParam("category");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			})
			if ($(\'#station_search\').val()) {
				rTable.search($(\'#station_search\').val()).draw();
			}
            checkClear();
		});
        
		' ?0                  	;0
758  444   GOTO/253                  ?0        ?1244                ?582                	;0
759  446   GOTO/253                  ?0        ?977                 ?583                	;0
760  449   GOTO/253                  ?0        ?267                 ?584                	;0
761  451   ECHO/40                   ?0        585:'        
        ' ?0                  	;0
762  452   ISSET_ISEMPTY_CV/197      #246=     16?10                ?0                  	;33554432
763  452   JMPZ/43                   ?0        #246                 ?765                	;0	>>765
764  453   GOTO/253                  ?0        ?1339                ?586                	;0
765  455   GOTO/253                  ?0        ?1337                ?587                	;0	<<763
766  457   ECHO/40                   ?0        588:'				order: [[ ' ?0                  	;0
767  458   FETCH_STATIC_PROP_IS/176  $247=     589:'rRequest'       590:'XUI'           	;0
768  458   ISSET_ISEMPTY_DIM_OBJ/115 #248=     $247                 592:'order'         	;33554432
769  458   JMPZ/43                   ?0        #248                 ?777                	;0	>>777
770  458   INIT_FCALL_BY_NAME/59     ?0        ?0                   593:'intval'        	;1
771  458   FETCH_STATIC_PROP_FUNC_ARG/177 $249=     595:'rRequest'       596:'XUI'           	;1
772  458   FETCH_DIM_FUNC_ARG/93     $250=     $249                 598:'order'         	;1
773  458   SEND_VAR_EX/66            ?80       $250                 ?1                  	;0
774  458   DO_FCALL_BY_NAME/131      $251=     ?0                   ?0                  	;0
775  458   QM_ASSIGN/22              #252=     $251                 ?0                  	;0
776  458   JMP/42                    ?0        ?778                 ?0                  	;0	>>778
777  458   QM_ASSIGN/22              #252=     599:4                ?0                  	;0	<<769
778  458   ECHO/40                   ?0        #252                 ?0                  	;0	<<776
779  459   ECHO/40                   ?0        600:', "'            ?0                  	;0
780  460   INIT_FCALL_BY_NAME/59     ?0        ?0                   601:'in_array'      	;2
781  460   INIT_FCALL_BY_NAME/59     ?0        ?0                   603:'strtolower'    	;1
782  460   FETCH_STATIC_PROP_FUNC_ARG/177 $253=     605:'rRequest'       606:'XUI'           	;1
783  460   FETCH_DIM_FUNC_ARG/93     $254=     $253                 608:'dir'           	;1
784  460   SEND_VAR_EX/66            ?80       $254                 ?1                  	;0
785  460   DO_FCALL_BY_NAME/131      $255=     ?0                   ?0                  	;0
786  460   SEND_VAR_NO_REF_EX/50     ?80       $255                 ?1                  	;0
787  460   SEND_VAL_EX/116           ?96       609:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
788  460   DO_FCALL_BY_NAME/131      $256=     ?0                   ?0                  	;0
789  460   JMPZ/43                   ?0        $256                 ?797                	;0	>>797
790  460   INIT_FCALL_BY_NAME/59     ?0        ?0                   610:'strtolower'    	;1
791  460   FETCH_STATIC_PROP_FUNC_ARG/177 $257=     612:'rRequest'       613:'XUI'           	;1
792  460   FETCH_DIM_FUNC_ARG/93     $258=     $257                 615:'dir'           	;1
793  460   SEND_VAR_EX/66            ?80       $258                 ?1                  	;0
794  460   DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
795  460   QM_ASSIGN/22              #260=     $259                 ?0                  	;0
796  460   JMP/42                    ?0        ?798                 ?0                  	;0	>>798
797  460   QM_ASSIGN/22              #260=     616:'desc'           ?0                  	;0	<<789
798  460   ECHO/40                   ?0        #260                 ?0                  	;0	<<796
799  461   ECHO/40                   ?0        617:'" ]],
				'    ?0                  	;0
800  462   GOTO/253                  ?0        ?436                 ?618                	;0
801  464   IS_EQUAL/17               #261=     16?11                619:'edit_profile'  	;0
802  464   JMPZ/43                   ?0        #261                 ?804                	;0	>>804
803  465   GOTO/253                  ?0        ?418                 ?620                	;0
804  467   IS_EQUAL/17               #262=     16?11                621:'enigmas'       	;0	<<802
805  467   JMPZ/43                   ?0        #262                 ?807                	;0	>>807
806  468   GOTO/253                  ?0        ?249                 ?622                	;0
807  470   IS_EQUAL/17               #263=     16?11                623:'episodes'      	;0	<<805
808  470   JMPZ/43                   ?0        #263                 ?810                	;0	>>810
809  471   GOTO/253                  ?0        ?1034                ?624                	;0
810  473   IS_EQUAL/17               #264=     16?11                625:'live_connections'	;0	<<808
811  473   JMPZ/43                   ?0        #264                 ?813                	;0	>>813
812  474   GOTO/253                  ?0        ?696                 ?626                	;0
813  476   IS_EQUAL/17               #265=     16?11                627:'mag'           	;0	<<811
814  476   JMPNZ_EX/47               #265=     #265                 ?817                	;0	>>817
815  476   IS_EQUAL/17               #266=     16?11                628:'enigma'        	;0
816  476   BOOL/52                   #265=     #266                 ?0                  	;0
817  476   JMPZ/43                   ?0        #265                 ?819                	;0	>>819	<<814
818  477   GOTO/253                  ?0        ?453                 ?629                	;0
819  479   GOTO/253                  ?0        ?1348                ?630                	;0	<<817
820  481   ECHO/40                   ?0        631:', rData.bouquets[rIndex].bouquet_name, rData.bouquets[rIndex].bouquet_channels.length, rData.bouquets[rIndex].bouquet_movies.length, rData.bouquets[rIndex].bouquet_series.length, rData.bouquets[rIndex].bouquet_radios.length]);
                        });
                        if (rData.data.compatible) {
                            $("#package_warning").hide();
                        } else {
                            $("#package_warning").show();
                        }
                        ' ?0                  	;0
821  482   FETCH_DIM_R/81            $267=     16?3                 632:'allow_restrictions'	;0
822  482   BOOL_NOT/13               #268=     $267                 ?0                  	;0
823  482   JMPZ/43                   ?0        #268                 ?825                	;0	>>825
824  483   GOTO/253                  ?0        ?826                 ?633                	;0
825  485   ECHO/40                   ?0        634:'						if (rData.data.is_isplock == 1) {
							setSwitch(window.rSwitches["is_isplock"], true);
						} else {
							setSwitch(window.rSwitches["is_isplock"], false);
						}
                        ' ?0                  	;0	<<823
826  487   ECHO/40                   ?0        635:'                        $("#package_cost").val(rData.data.cost_credits);
                        $("#package_duration").val(rData.data.duration);
                        $("#package_info").show();
                        $("#submit_button").val("Purchase");
                    }
                    rTable.draw();
                });
            } else {
                $("#max_connections").val(' ?0                  	;0
827  488   GOTO/253                  ?0        ?1312                ?636                	;0
828  490   ECHO/40                   ?0        637:'        
        var rClearing = false;

        function openImage(elem) {
            var rImage = $(elem).data("src");
            if (rImage) {
                $.magnificPopup.open({
                    items: {
                        src: \'./resize.php?maxw=768&maxh=768&url=\' + rImage,
                        type: \'image\'
                    }
                });
            }
        }
        function api(rID, rType, rConfirm=false) {
            if ((rType == "purge") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Kill",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to kill all connections to this episode? This will include any connections from your subresellers too.",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
			} else {
                rConfirm = true;
            }
            if (rConfirm) {
                $.getJSON("./api?action=connections&sub=" + rType + "&stream_id=" + rID, function(data) {
                    if (data.result == true) {
                        if (rType == "purge") {
                            $.toast("All connections have been killed.");
                        }
                        refreshTable(); setTimeout(refreshTable, 5000);
                    } else {
                        $.toast("An error occured while processing your request.");
                    }
                }).fail(function() {
                    $.toast("An error occured while processing your request.");
                });
            }
		}
        function refreshTable() {
			$("#datatable-streampage").DataTable().ajax.reload( null, false );
		}
        function getSeries() {
            return $("#episodes_series").val();
        }
        function getCategory() {
            return $("#series_category_id").val();
        }
        function clearFilters() {
            window.rClearing = true;
            $("#episodes_search").val("").trigger(\'change\');
            $(\'#series_category_id\').val("").trigger(\'change\');
            $(\'#episodes_series\').val("").trigger(\'change\');
            $(\'#episodes_show_entries\').val("' ?0                  	;0
829  491   INIT_FCALL_BY_NAME/59     ?0        ?0                   638:'intval'        	;1
830  491   FETCH_DIM_FUNC_ARG/93     $269=     16?4                 640:'default_entries'	;1
831  491   SEND_VAR_EX/66            ?80       $269                 ?1                  	;0
832  491   DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
833  491   JMP_SET/152               #271=     $270                 ?835                	;0
834  491   QM_ASSIGN/22              #271=     641:10               ?0                  	;0
835  491   ECHO/40                   ?0        #271                 ?0                  	;0
836  492   ECHO/40                   ?0        642:'").trigger(\'change\');
            window.rClearing = false;
            $(\'#datatable-streampage\').DataTable().search($("#episodes_search").val());
            $(\'#datatable-streampage\').DataTable().page.len($(\'#episodes_show_entries\').val());
            $("#datatable-streampage").DataTable().page(0).draw(\'page\');
            $("#datatable-streampage").DataTable().ajax.reload( null, false );
            delParams(["search", "category", "series", "page", "entries"]);
			checkClear();
        }
        function checkClear() {
			if (!hasParams(["search", "category", "series"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
        var rSearch;
        $(document).ready(function() {
            $(\'select\').select2({width: \'100%\'});
            var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
837  493   INIT_FCALL_BY_NAME/59     ?0        ?0                   643:'intval'        	;1
838  493   FETCH_DIM_FUNC_ARG/93     $272=     16?4                 645:'default_entries'	;1
839  493   SEND_VAR_EX/66            ?80       $272                 ?1                  	;0
840  493   DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
841  493   ECHO/40                   ?0        $273                 ?0                  	;0
842  494   ECHO/40                   ?0        646:'; }
			var rTable = $("#datatable-streampage").DataTable({
                language: {
                    paginate: {
                        previous: "<i class=\'mdi mdi-chevron-left\'>",
                        next: "<i class=\'mdi mdi-chevron-right\'>"
                    }
                },
                drawCallback: function() {
                    bindHref(); refreshTooltips();
                    if ($("#datatable-streampage").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-streampage").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-streampage").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
                },
                createdRow: function(row, data, index) {
                    $(row).addClass(\'stream-\' + data[0]);
                },
                responsive: false,
                processing: true,
                serverSide: true,
                searchDelay: 250,
                ajax: {
                    url: "./table",
                    "data": function(d) {
                        d.id = "episodes";
                        d.series = getSeries();
                        d.category = getCategory();
                    }
                },
                columnDefs: [
					{"className": "dt-center", "targets": [0,1,4,5]},
					' ?0                  	;0
843  495   GOTO/253                  ?0        ?60                  ?647                	;0
844  497   INIT_FCALL_BY_NAME/59     ?0        ?0                   648:'json_decode'   	;2
845  497   INIT_FCALL_BY_NAME/59     ?0        ?0                   650:'FddF8Da6aB3fe47B'	;1
846  497   FETCH_DIM_FUNC_ARG/93     $274=     16?10                652:'package_id'    	;1
847  497   SEND_VAR_EX/66            ?80       $274                 ?1                  	;0
848  497   DO_FCALL_BY_NAME/131      $275=     ?0                   ?0                  	;0
849  497   SEPARATE/156              $275=     $275                 ?0                  	;0
850  497   FETCH_DIM_FUNC_ARG/93     $276=     $275                 653:'bouquets'      	;1
851  497   SEND_VAR_EX/66            ?80       $276                 ?1                  	;0
852  497   SEND_VAL_EX/116           ?96       654:true             ?2                  	;0
853  497   DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
854  497   ASSIGN/38                 ?262      16?6                 $277                	;0
855  499   INIT_FCALL_BY_NAME/59     ?0        ?0                   655:'is_array'      	;1
856  499   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
857  499   DO_FCALL_BY_NAME/131      $279=     ?0                   ?0                  	;0
858  499   BOOL_NOT/13               #280=     $279                 ?0                  	;0
859  499   JMPZ/43                   ?0        #280                 ?861                	;0	>>861
860  500   GOTO/253                  ?0        ?310                 ?657                	;0
861  502   INIT_FCALL_BY_NAME/59     ?0        ?0                   658:'json_decode'   	;2	<<859
862  502   FETCH_DIM_FUNC_ARG/93     $281=     16?10                660:'bouquet'       	;1
863  502   SEND_VAR_EX/66            ?80       $281                 ?1                  	;0
864  502   SEND_VAL_EX/116           ?96       661:true             ?2                  	;0
865  502   DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
866  502   ASSIGN/38                 ?267      16?9                 $282                	;0
867  503   GOTO/253                  ?0        ?317                 ?662                	;0
868  504   GOTO/253                  ?0        ?310                 ?663                	;0
869  506   ECHO/40                   ?0        664:'scrollX: true,' ?0                  	;0
870  508   ECHO/40                   ?0        665:'				'           ?0                  	;0
871  509   FETCH_STATIC_PROP_R/173   $284=     666:'rSettings'      667:'XUI'           	;0
872  509   FETCH_DIM_R/81            $285=     $284                 669:'redis_handler' 	;0
873  509   JMPZ/43                   ?0        $285                 ?875                	;0	>>875
874  510   GOTO/253                  ?0        ?270                 ?670                	;0
875  512   ECHO/40                   ?0        671:'				order: [[ ' ?0                  	;0	<<873
876  513   GOTO/253                  ?0        ?573                 ?672                	;0
877  516   ECHO/40                   ?0        673:'                rTable.draw();
            }
        }
        function clearISP() {
            $("#isp_clear").val("");
        }
		$(document).ready(function() {
			$(\'select.select2\').select2({width: \'100%\'})
            $(\'#username\').pwstrength();
            $(\'#password\').pwstrength();
            $("#package").change(function() {
                getPackage();
            });
            $("#datatable-review").DataTable({
                language: {
                    paginate: {
                        previous: "<i class=\'mdi mdi-chevron-left\'>",
                        next: "<i class=\'mdi mdi-chevron-right\'>"
                    }
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                },
                columnDefs: [
                    {"className": "dt-center", "targets": [0,2,3,4,5]}
                ],
                responsive: false,
                bInfo: false,
                searching: false,
                paging: false,
                order: [[ 1, "asc" ]]
            });
			$("#add_ip").click(function() {
				if (($("#ip_field").val()) && (isValidIP($("#ip_field").val()))) {
					var o = new Option($("#ip_field").val(), $("#ip_field").val());
					$("#allowed_ips").append(o);
					$("#ip_field").val("");
				} else {
					$.toast("Please enter a valid IP address.");
				}
			});
			$("#remove_ip").click(function() {
                if ($(\'#allowed_ips option:selected\').length > 0) {
                    $(\'#allowed_ips option:selected\').remove();
                } else {
                    $.toast("Please select an IP address to remove.");
                }
			});
			$("#add_ua").click(function() {
				if ($("#ua_field").val()) {
					var o = new Option($("#ua_field").val(), $("#ua_field").val());
					$("#allowed_ua").append(o);
					$("#ua_field").val("");
				} else {
					$.toast("Please enter a user-agent.");
				}
			});
			$("#remove_ua").click(function() {
                if ($(\'#allowed_ua option:selected\').length > 0) {
                    $(\'#allowed_ua option:selected\').remove();
                } else {
                    $.toast("Please select a User-Agent to remove.");
                }
			});
            $(\'#username\').keypress(function (e) {
                var regex = new RegExp("^[a-zA-Z0-9@._-]+$");
                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (regex.test(str)) {
                    return true;
                }
                e.preventDefault();
                return false;
            });
            $(\'#password\').keypress(function (e) {
                var regex = new RegExp("^[a-zA-Z0-9@._-]+$");
                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (regex.test(str)) {
                    return true;
                }
                e.preventDefault();
                return false;
            });
            ' ?0                  	;0
878  517   ISSET_ISEMPTY_CV/197      #286=     16?10                ?0                  	;33554432
879  517   BOOL_NOT/13               #287=     #286                 ?0                  	;0
880  517   JMPZ/43                   ?0        #287                 ?882                	;0	>>882
881  518   GOTO/253                  ?0        ?883                 ?674                	;0
882  520   ECHO/40                   ?0        675:'            $(\'#username\').trigger(\'keyup\');
            $(\'#password\').trigger(\'keyup\');
            ' ?0                  	;0	<<880
883  522   GOTO/253                  ?0        ?266                 ?676                	;0
884  524   FETCH_DIM_R/81            $288=     16?0                 677:'mag_toast_3'   	;0
885  524   ECHO/40                   ?0        $288                 ?0                  	;0
886  525   ECHO/40                   ?0        678:'.");
							} else {
								$.toast("' ?0                  	;0
887  526   FETCH_DIM_R/81            $289=     16?0                 679:'mag_toast_4'   	;0
888  526   ECHO/40                   ?0        $289                 ?0                  	;0
889  527   ECHO/40                   ?0        680:'.");
							}
						});
					}
				}
			});
			if ($(\'#mag_search\').val()) {
				rTable.search($(\'#mag_search\').val()).draw();
			}
			checkClear();
		});
        
		' ?0                  	;0
890  529   GOTO/253                  ?0        ?452                 ?681                	;0
891  531   GOTO/253                  ?0        ?893                 ?682                	;0
892  533   ECHO/40                   ?0        683:'					{"orderable": false, "targets": [5,7,11]}
					' ?0                  	;0
893  535   ECHO/40                   ?0        684:'				],
                ' ?0                  	;0
894  536   GOTO/253                  ?0        ?1478                ?685                	;0
895  538   ECHO/40                   ?0        686:'_trial'         ?0                  	;0
896  540   ECHO/40                   ?0        687:'&package_id=" + $("#package").val()' ?0                  	;0
897  541   ISSET_ISEMPTY_CV/197      #290=     16?10                ?0                  	;33554432
898  541   BOOL_NOT/13               #291=     #290                 ?0                  	;0
899  541   JMPZ/43                   ?0        #291                 ?901                	;0	>>901
900  542   GOTO/253                  ?0        ?1442                ?688                	;0
901  544   FETCH_DIM_R/81            $292=     16?10                689:'id'            	;0	<<899
902  544   CONCAT/8                  #293=     690:' + "&user_id='  $292                	;0
903  544   CONCAT/8                  #294=     #293                 691:'"'             	;0
904  544   ECHO/40                   ?0        #294                 ?0                  	;0
905  545   GOTO/253                  ?0        ?1442                ?692                	;0
906  547   FETCH_DIM_R/81            $295=     16?3                 693:'allow_change_bouquets'	;0
907  547   JMPZ/43                   ?0        $295                 ?909                	;0	>>909
908  548   GOTO/253                  ?0        ?911                 ?694                	;0
909  550   ECHO/40                   ?0        695:'rData.bouquets[rIndex].id' ?0                  	;0	<<907
910  551   GOTO/253                  ?0        ?1595                ?696                	;0
911  553   ECHO/40                   ?0        697:'"<input class=\'big_checkbox\' type=\'checkbox\' name=\'bouquets_selected[]\' value=\'" + rData.bouquets[rIndex].id + "\' " + rChecked + "></input>"' ?0                  	;0
912  554   GOTO/253                  ?0        ?1595                ?698                	;0
913  557   ECHO/40                   ?0        699:'		
		function selectChannel(rID) {
			// noop
		}
		
		function clearForm() {
			window.location.href = "epg_view";
		}
		
		function showGuide(rID) {
			$("#programmeLabel").html("");
			$("#programmeDescription").html("");
			$("#programmeStart").html("");
			$.getJSON("./api?action=get_programme&id=" + rID + "&timezone=" + Intl.DateTimeFormat().resolvedOptions().timeZone, function(data) {
				if (data.result == true) {
					$("#programmeLabel").html(data.data.title);
					$("#programmeDescription").html(data.data.description);
					$("#programmeStart").html(data.data.date)
					$(".bs-programme").modal("show");
				}
			});
		}
		
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
			
			window.XUI.Listings.DefaultChannels = "' ?0                  	;0
914  558   INIT_FCALL_BY_NAME/59     ?0        ?0                   700:'implode'       	;2
915  558   SEND_VAL_EX/116           ?80       702:','              ?1                  	;0
916  558   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
917  558   DO_FCALL_BY_NAME/131      $296=     ?0                   ?0                  	;0
918  558   ECHO/40                   ?0        $296                 ?0                  	;0
919  559   ECHO/40                   ?0        703:'";
			'        ?0                  	;0
920  560   FETCH_STATIC_PROP_IS/176  $297=     704:'rRequest'       705:'XUI'           	;0
921  560   ISSET_ISEMPTY_DIM_OBJ/115 #298=     $297                 707:'category'      	;33554432
922  560   JMPZ_EX/46                #298=     #298                 ?930                	;0	>>930
923  560   INIT_FCALL_BY_NAME/59     ?0        ?0                   708:'intval'        	;1
924  560   FETCH_STATIC_PROP_FUNC_ARG/177 $299=     710:'rRequest'       711:'XUI'           	;1
925  560   FETCH_DIM_FUNC_ARG/93     $300=     $299                 713:'category'      	;1
926  560   SEND_VAR_EX/66            ?80       $300                 ?1                  	;0
927  560   DO_FCALL_BY_NAME/131      $301=     ?0                   ?0                  	;0
928  560   IS_SMALLER/19             #302=     714:0                $301                	;0
929  560   BOOL/52                   #298=     #302                 ?0                  	;0
930  560   BOOL_NOT/13               #303=     #298                 ?0                  	;0	<<922
931  560   JMPZ/43                   ?0        #303                 ?933                	;0	>>933
932  561   GOTO/253                  ?0        ?1504                ?715                	;0
933  563   GOTO/253                  ?0        ?1496                ?716                	;0	<<931
934  565   GOTO/253                  ?0        ?1682                ?717                	;0
935  567   ECHO/40                   ?0        718:'        
		var rClearing = false;

        function openImage(elem) {
            var rImage = $(elem).data("src");
            if (rImage) {
                $.magnificPopup.open({
                    items: {
                        src: \'./resize.php?maxw=768&maxh=768&url=\' + rImage,
                        type: \'image\'
                    }
                });
            }
        }
        function api(rID, rType, rConfirm=false) {
            if ((rType == "purge") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Kill",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to kill all connections to this stream? This will include any connections from your subresellers too.",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
			} else {
                rConfirm = true;
            }
            if (rConfirm) {
                $.getJSON("./api?action=connections&sub=" + rType + "&stream_id=" + rID, function(data) {
                    if (data.result == true) {
                        if (rType == "purge") {
                            $.toast("All connections have been killed.");
                        }
                        refreshTable(); setTimeout(refreshTable, 5000);
                    } else {
                        $.toast("An error occured while processing your request.");
                    }
                }).fail(function() {
                    $.toast("An error occured while processing your request.");
                });
            }
		}
		function getCategory() {
			return $("#stream_category_id").val();
		}
		function clearFilters() {
			window.rClearing = true;
			$("#stream_search").val("").trigger(\'change\');
			$(\'#stream_category_id\').val("").trigger(\'change\');
			$(\'#stream_show_entries\').val("' ?0                  	;0
936  568   INIT_FCALL_BY_NAME/59     ?0        ?0                   719:'intval'        	;1
937  568   FETCH_DIM_FUNC_ARG/93     $304=     16?4                 721:'default_entries'	;1
938  568   SEND_VAR_EX/66            ?80       $304                 ?1                  	;0
939  568   DO_FCALL_BY_NAME/131      $305=     ?0                   ?0                  	;0
940  568   JMP_SET/152               #306=     $305                 ?942                	;0
941  568   QM_ASSIGN/22              #306=     722:10               ?0                  	;0
942  568   ECHO/40                   ?0        #306                 ?0                  	;0
943  569   ECHO/40                   ?0        723:'").trigger(\'change\');
			window.rClearing = false;
			$(\'#datatable-streampage\').DataTable().search($("#stream_search").val());
			$(\'#datatable-streampage\').DataTable().page.len($(\'#stream_show_entries\').val());
			$("#datatable-streampage").DataTable().page(0).draw(\'page\');
			$("#datatable-streampage").DataTable().ajax.reload( null, false );
			delParams(["search", "category", "page", "entries"]);
			checkClear();
		}
		function checkClear() {
			if (!hasParams(["search", "category"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
		function refreshTable() {
			$("#datatable-streampage").DataTable().ajax.reload( null, false );
		}
        var rSearch;
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
            var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
944  570   GOTO/253                  ?0        ?44                  ?724                	;0
945  572   ECHO/40                   ?0        725:', function(rData) {
                    if (rData.result === true) {
                        $("#max_connections").val(rData.data.max_connections);
                        $("#cost_credits").html($.number(rData.data.cost_credits, 0));
                        $("#remaining_credits").html($.number(' ?0                  	;0
946  573   FETCH_DIM_R/81            $307=     16?2                 726:'credits'       	;0
947  573   ECHO/40                   ?0        $307                 ?0                  	;0
948  574   ECHO/40                   ?0        727:' - rData.data.cost_credits, 0));
                        $("#exp_date").val(rData.data.exp_date);
                        if (' ?0                  	;0
949  575   FETCH_DIM_R/81            $308=     16?2                 728:'credits'       	;0
950  575   ECHO/40                   ?0        $308                 ?0                  	;0
951  576   ECHO/40                   ?0        729:' - rData.data.cost_credits < 0) {
                            $("#credits-cost").hide();
                            $("#no-credits").show()
                            $(".purchase").prop(\'disabled\', true);
                        } else {
                            $("#credits-cost").show();
                            $("#no-credits").hide()
                            $(".purchase").prop(\'disabled\', false);
                        }
                        $(rData.bouquets).each(function(rIndex) {
                            if ((window.rUserBouquet.length > 0) && (window.rUserPackage == parseInt($("#package").val()))) {
                                if (window.rUserBouquet.includes(parseInt(rData.bouquets[rIndex].id))) {
                                    var rChecked = "checked";
                                } else {
                                    var rChecked = "";
                                }
                            } else {
                                var rChecked = "checked";
                            }
							rTable.row.add([' ?0                  	;0
952  577   GOTO/253                  ?0        ?906                 ?730                	;0
953  579   GOTO/253                  ?0        ?955                 ?731                	;0
954  581   ECHO/40                   ?0        732:'        
		$(document).ready(function() {
			$(\'select.select2\').select2({width: \'100%\'})
			var elems = Array.prototype.slice.call(document.querySelectorAll(\'.js-switch\'));
            $(\'#password\').pwstrength({\'increase\': true});
            $("form").submit(function(e){
                e.preventDefault();
                $(\':input[type="submit"]\').prop(\'disabled\', true);
                submitForm(window.rCurrentPage, new FormData($("form")[0]));
            });
		});

		' ?0                  	;0
955  583   GOTO/253                  ?0        ?758                 ?733                	;0
956  584   GOTO/253                  ?0        ?251                 ?734                	;0
957  586   ECHO/40                   ?0        735:';
        var rUserBouquet = [' ?0                  	;0
958  587   INIT_FCALL_BY_NAME/59     ?0        ?0                   736:'implode'       	;2
959  587   SEND_VAL_EX/116           ?80       738:','              ?1                  	;0
960  587   INIT_FCALL_BY_NAME/59     ?0        ?0                   739:'array_map'     	;2
961  587   SEND_VAL_EX/116           ?80       741:'intval'         ?1                  	;0
962  587   INIT_FCALL_BY_NAME/59     ?0        ?0                   742:'json_decode'   	;2
963  587   FETCH_DIM_FUNC_ARG/93     $309=     16?10                744:'bouquet'       	;1
964  587   SEND_VAR_EX/66            ?80       $309                 ?1                  	;0
965  587   SEND_VAL_EX/116           ?96       745:true             ?2                  	;0
966  587   DO_FCALL_BY_NAME/131      $310=     ?0                   ?0                  	;0
967  587   SEND_VAR_NO_REF_EX/50     ?96       $310                 ?2                  	;0
968  587   DO_FCALL_BY_NAME/131      $311=     ?0                   ?0                  	;0
969  587   JMP_SET/152               #312=     $311                 ?971                	;0
970  587   QM_ASSIGN/22              #312=     746:array (
)        ?0                  	;0
971  587   SEND_VAL_EX/116           ?96       #312                 ?2                  	;0
972  587   DO_FCALL_BY_NAME/131      $313=     ?0                   ?0                  	;0
973  587   ECHO/40                   ?0        $313                 ?0                  	;0
974  588   ECHO/40                   ?0        747:'];
        '   ?0                  	;0
975  590   ECHO/40                   ?0        748:'        
        function getPackage() {
            var rTable = $(\'#datatable-review\').DataTable();
            rTable.clear();
            rTable.draw();
            if ($("#package").val().length > 0) {
                $.getJSON("./api?action=get_package' ?0                  	;0
976  591   GOTO/253                  ?0        ?1452                ?749                	;0
977  593   ECHO/40                   ?0        750:'        
		var rClearing = false;
        
        function openImage(elem) {
			rPath = $(elem).data("src");
			if (rPath) {
                $.magnificPopup.open({
                    items: {
                        src: \'./resize.php?maxw=768&maxh=768&url=\' + rPath,
                        type: \'image\'
                    }
                });
			}
		}
        function api(rID, rType, rConfirm=false) {
            if ((rType == "purge") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Kill",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to kill all connections to this movie? This will include any connections from your subresellers too.",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
			} else {
                rConfirm = true;
            }
            if (rConfirm) {
                $.getJSON("./api?action=connections&sub=" + rType + "&stream_id=" + rID, function(data) {
                    if (data.result == true) {
                        if (rType == "purge") {
                            $.toast("All connections have been killed.");
                        }
                        refreshTable(); setTimeout(refreshTable, 5000);
                    } else {
                        $.toast("An error occured while processing your request.");
                    }
                }).fail(function() {
                    $.toast("An error occured while processing your request.");
                });
            }
		}
		function refreshTable() {
			$("#datatable-streampage").DataTable().ajax.reload( null, false );
		}
        function getCategory() {
			return $("#movies_category_id").val();
		}
		function clearFilters() {
			window.rClearing = true;
			$("#movies_search").val("").trigger(\'change\');
			$(\'#movies_category_id\').val("").trigger(\'change\');
			$(\'#movies_show_entries\').val("' ?0                  	;0
978  594   INIT_FCALL_BY_NAME/59     ?0        ?0                   751:'intval'        	;1
979  594   FETCH_DIM_FUNC_ARG/93     $314=     16?4                 753:'default_entries'	;1
980  594   SEND_VAR_EX/66            ?80       $314                 ?1                  	;0
981  594   DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
982  594   JMP_SET/152               #316=     $315                 ?984                	;0
983  594   QM_ASSIGN/22              #316=     754:10               ?0                  	;0
984  594   ECHO/40                   ?0        #316                 ?0                  	;0
985  595   ECHO/40                   ?0        755:'").trigger(\'change\');
			window.rClearing = false;
			$(\'#datatable-streampage\').DataTable().search($("#movies_search").val());
			$(\'#datatable-streampage\').DataTable().page.len($(\'#movies_show_entries\').val());
			$("#datatable-streampage").DataTable().page(0).draw(\'page\');
			$("#datatable-streampage").DataTable().ajax.reload( null, false );
			delParams(["search", "category", "page", "entries"]);
			checkClear();
		}
		function checkClear() {
			if (!hasParams(["search", "category"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
        var rSearch;
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
			var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
986  596   INIT_FCALL_BY_NAME/59     ?0        ?0                   756:'intval'        	;1
987  596   FETCH_DIM_FUNC_ARG/93     $317=     16?4                 758:'default_entries'	;1
988  596   SEND_VAR_EX/66            ?80       $317                 ?1                  	;0
989  596   DO_FCALL_BY_NAME/131      $318=     ?0                   ?0                  	;0
990  596   ECHO/40                   ?0        $318                 ?0                  	;0
991  597   ECHO/40                   ?0        759:'; }
			var rTable = $("#datatable-streampage").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>"
					}
				},
				drawCallback: function() {					bindHref(); refreshTooltips();
                    if ($("#datatable-streampage").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-streampage").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-streampage").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
				},
				createdRow: function(row, data, index) {
					$(row).addClass(\'stream-\' + data[0]);
				},
				responsive: false,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "movies";
						d.category = getCategory();
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [0,1,4,5]},
					' ?0                  	;0
992  598   GOTO/253                  ?0        ?608                 ?760                	;0
993  600   FETCH_DIM_R/81            $319=     16?10                761:'id'            	;0
994  600   CONCAT/8                  #320=     762:' + "&user_id='  $319                	;0
995  600   CONCAT/8                  #321=     #320                 763:'"'             	;0
996  600   ECHO/40                   ?0        #321                 ?0                  	;0
997  602   ISSET_ISEMPTY_CV/197      #322=     16?13                ?0                  	;33554432
998  602   BOOL_NOT/13               #323=     #322                 ?0                  	;0
999  602   JMPZ/43                   ?0        #323                 ?1001               	;0	>>1001
1000 603   GOTO/253                  ?0        ?1005                ?764                	;0
1001 605   FETCH_DIM_R/81            $324=     16?13                765:'id'            	;0	<<999
1002 605   CONCAT/8                  #325=     766:' + "&orig_id='  $324                	;0
1003 605   CONCAT/8                  #326=     #325                 767:'"'             	;0
1004 605   ECHO/40                   ?0        #326                 ?0                  	;0
1005 607   GOTO/253                  ?0        ?945                 ?768                	;0
1006 609   ECHO/40                   ?0        769:'					{"orderable": false, "targets": [9]},
					' ?0                  	;0
1007 610   GOTO/253                  ?0        ?1009                ?770                	;0
1008 612   ECHO/40                   ?0        771:'					{"orderable": false, "targets": [6,9]},
					' ?0                  	;0
1009 614   GOTO/253                  ?0        ?1035                ?772                	;0
1010 617   GOTO/253                  ?0        ?1012                ?773                	;0
1011 619   ECHO/40                   ?0        774:'        
		$(document).ready(function() {
			$(\'select.select2\').select2({width: \'100%\'})
            $("form").submit(function(e){
                e.preventDefault();
                $(\':input[type="submit"]\').prop(\'disabled\', true);
                submitForm(window.rCurrentPage, new FormData($("form")[0]));
            });
		});
        
		' ?0                  	;0
1012 621   GOTO/253                  ?0        ?953                 ?775                	;0
1013 623   INIT_FCALL_BY_NAME/59     ?0        ?0                   776:'in_array'      	;2
1014 623   INIT_FCALL_BY_NAME/59     ?0        ?0                   778:'strtolower'    	;1
1015 623   FETCH_STATIC_PROP_FUNC_ARG/177 $327=     780:'rRequest'       781:'XUI'           	;1
1016 623   FETCH_DIM_FUNC_ARG/93     $328=     $327                 783:'dir'           	;1
1017 623   SEND_VAR_EX/66            ?80       $328                 ?1                  	;0
1018 623   DO_FCALL_BY_NAME/131      $329=     ?0                   ?0                  	;0
1019 623   SEND_VAR_NO_REF_EX/50     ?80       $329                 ?1                  	;0
1020 623   SEND_VAL_EX/116           ?96       784:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
1021 623   DO_FCALL_BY_NAME/131      $330=     ?0                   ?0                  	;0
1022 623   JMPZ/43                   ?0        $330                 ?1030               	;0	>>1030
1023 623   INIT_FCALL_BY_NAME/59     ?0        ?0                   785:'strtolower'    	;1
1024 623   FETCH_STATIC_PROP_FUNC_ARG/177 $331=     787:'rRequest'       788:'XUI'           	;1
1025 623   FETCH_DIM_FUNC_ARG/93     $332=     $331                 790:'dir'           	;1
1026 623   SEND_VAR_EX/66            ?80       $332                 ?1                  	;0
1027 623   DO_FCALL_BY_NAME/131      $333=     ?0                   ?0                  	;0
1028 623   QM_ASSIGN/22              #334=     $333                 ?0                  	;0
1029 623   JMP/42                    ?0        ?1031                ?0                  	;0	>>1031
1030 623   QM_ASSIGN/22              #334=     791:'desc'           ?0                  	;0	<<1022
1031 623   ECHO/40                   ?0        #334                 ?0                  	;0	<<1029
1032 624   ECHO/40                   ?0        792:'" ]],
                pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
			});
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
			$("#datatable-activity").css("width", "100%");
			$(\'#live_search\').keyup(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#live_search").val()) {
						setParam("search", $("#live_search").val());
					} else {
						delParam("search");
					}
					checkClear();
					doSearch($(this).val());
				}
			});
			$(\'#live_show_entries\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#live_show_entries").val()) {
						setParam("entries", $("#live_show_entries").val());
					} else {
						delParam("entries");
					}
					checkClear();
					rTable.page.len($(this).val()).draw();
				}
			});
			$(\'#live_line\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#live_line").val()) {
						setParam("line", $("#live_line").val());
					} else {
						delParam("line");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
            $(\'#live_user\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#live_user").val()) {
						setParam("user", $("#live_user").val());
					} else {
						delParam("user");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
            $(\'#live_stream\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#live_stream").val()) {
						setParam("stream", $("#live_stream").val());
					} else {
						delParam("stream");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
            if ($(\'#live_search\').val()) {
				rTable.search($(\'#live_search\').val()).draw();
			}
            checkClear();
		});
        
		' ?0                  	;0
1033 626   GOTO/253                  ?0        ?248                 ?793                	;0
1034 628   GOTO/253                  ?0        ?828                 ?794                	;0
1035 630   ECHO/40                   ?0        795:'					{"visible": false, "targets": [1]}
				],
                ' ?0                  	;0
1036 631   BOOL_NOT/13               #335=     16?1                 ?0                  	;0
1037 631   JMPZ/43                   ?0        #335                 ?1039               	;0	>>1039
1038 632   GOTO/253                  ?0        ?1040                ?796                	;0
1039 634   ECHO/40                   ?0        797:'scrollX: true,' ?0                  	;0	<<1037
1040 636   ECHO/40                   ?0        798:'				order: [[ ' ?0                  	;0
1041 637   GOTO/253                  ?0        ?632                 ?799                	;0
1042 640   ECHO/40                   ?0        800:'        
        function getStats() {
            var rStart = Date.now();
            $.getJSON("./api?action=dashboard", function(data) {
                $(".active-connections .entry").html($.number(data.open_connections, 0));
                $(".online-users .entry").html($.number(data.online_users, 0));
                $(".active-accounts .entry").html($.number(data.active_accounts, 0));
                ' ?0                  	;0
1043 641   INIT_FCALL_BY_NAME/59     ?0        ?0                   801:'count'         	;1
1044 641   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
1045 641   DO_FCALL_BY_NAME/131      $336=     ?0                   ?0                  	;0
1046 641   IS_SMALLER/19             #337=     803:1                $336                	;0
1047 641   JMPZ/43                   ?0        #337                 ?1049               	;0	>>1049
1048 642   GOTO/253                  ?0        ?57                  ?804                	;0
1049 644   ECHO/40                   ?0        805:'                $(".credits .entry").html($.number(data.credits, 0));
                ' ?0                  	;0	<<1047
1050 645   GOTO/253                  ?0        ?58                  ?806                	;0
1051 646   GOTO/253                  ?0        ?57                  ?807                	;0
1052 648   INIT_FCALL_BY_NAME/59     ?0        ?0                   808:'in_array'      	;2
1053 648   INIT_FCALL_BY_NAME/59     ?0        ?0                   810:'strtolower'    	;1
1054 648   FETCH_STATIC_PROP_FUNC_ARG/177 $338=     812:'rRequest'       813:'XUI'           	;1
1055 648   FETCH_DIM_FUNC_ARG/93     $339=     $338                 815:'dir'           	;1
1056 648   SEND_VAR_EX/66            ?80       $339                 ?1                  	;0
1057 648   DO_FCALL_BY_NAME/131      $340=     ?0                   ?0                  	;0
1058 648   SEND_VAR_NO_REF_EX/50     ?80       $340                 ?1                  	;0
1059 648   SEND_VAL_EX/116           ?96       816:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
1060 648   DO_FCALL_BY_NAME/131      $341=     ?0                   ?0                  	;0
1061 648   JMPZ/43                   ?0        $341                 ?1069               	;0	>>1069
1062 648   INIT_FCALL_BY_NAME/59     ?0        ?0                   817:'strtolower'    	;1
1063 648   FETCH_STATIC_PROP_FUNC_ARG/177 $342=     819:'rRequest'       820:'XUI'           	;1
1064 648   FETCH_DIM_FUNC_ARG/93     $343=     $342                 822:'dir'           	;1
1065 648   SEND_VAR_EX/66            ?80       $343                 ?1                  	;0
1066 648   DO_FCALL_BY_NAME/131      $344=     ?0                   ?0                  	;0
1067 648   QM_ASSIGN/22              #345=     $344                 ?0                  	;0
1068 648   JMP/42                    ?0        ?1070                ?0                  	;0	>>1070
1069 648   QM_ASSIGN/22              #345=     823:'asc'            ?0                  	;0	<<1061
1070 648   ECHO/40                   ?0        #345                 ?0                  	;0	<<1068
1071 649   ECHO/40                   ?0        824:'" ]],
				'    ?0                  	;0
1072 651   ECHO/40                   ?0        825:'				pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
			});
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
			$("#datatable-streampage").css("width", "100%");
			$(\'#stream_search\').keyup(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#stream_search").val()) {
						setParam("search", $("#stream_search").val());
					} else {
						delParam("search");
					}
					checkClear();
					doSearch($(this).val());
				}
			});
			$(\'#stream_show_entries\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#stream_show_entries").val()) {
						setParam("entries", $("#stream_show_entries").val());
					} else {
						delParam("entries");
					}
					rTable.page.len($(this).val()).draw();
				}
			});
			$(\'#stream_category_id\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#stream_category_id").val()) {
						setParam("category", $("#stream_category_id").val());
					} else {
						delParam("category");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
			if ($(\'#stream_search\').val()) {
				rTable.search($(\'#stream_search\').val()).draw();
			}
			checkClear();
		});

		' ?0                  	;0
1073 653   GOTO/253                  ?0        ?934                 ?826                	;0
1074 655   ECHO/40                   ?0        827:'scrollX: true,' ?0                  	;0
1075 657   ECHO/40                   ?0        828:'				order: [[ ' ?0                  	;0
1076 658   FETCH_STATIC_PROP_IS/176  $346=     829:'rRequest'       830:'XUI'           	;0
1077 658   ISSET_ISEMPTY_DIM_OBJ/115 #347=     $346                 832:'order'         	;33554432
1078 658   JMPZ/43                   ?0        #347                 ?1086               	;0	>>1086
1079 658   INIT_FCALL_BY_NAME/59     ?0        ?0                   833:'intval'        	;1
1080 658   FETCH_STATIC_PROP_FUNC_ARG/177 $348=     835:'rRequest'       836:'XUI'           	;1
1081 658   FETCH_DIM_FUNC_ARG/93     $349=     $348                 838:'order'         	;1
1082 658   SEND_VAR_EX/66            ?80       $349                 ?1                  	;0
1083 658   DO_FCALL_BY_NAME/131      $350=     ?0                   ?0                  	;0
1084 658   QM_ASSIGN/22              #351=     $350                 ?0                  	;0
1085 658   JMP/42                    ?0        ?1087                ?0                  	;0	>>1087
1086 658   QM_ASSIGN/22              #351=     839:7                ?0                  	;0	<<1078
1087 658   ECHO/40                   ?0        #351                 ?0                  	;0	<<1085
1088 659   ECHO/40                   ?0        840:', "'            ?0                  	;0
1089 660   GOTO/253                  ?0        ?1013                ?841                	;0
1090 663   ECHO/40                   ?0        842:'				],
                ' ?0                  	;0
1091 664   BOOL_NOT/13               #352=     16?1                 ?0                  	;0
1092 664   JMPZ/43                   ?0        #352                 ?1094               	;0	>>1094
1093 665   GOTO/253                  ?0        ?1095                ?843                	;0
1094 667   ECHO/40                   ?0        844:'scrollX: true,' ?0                  	;0	<<1092
1095 669   GOTO/253                  ?0        ?1739                ?845                	;0
1096 671   GOTO/253                  ?0        ?1098                ?846                	;0
1097 673   ECHO/40                   ?0        847:'					{"orderable": false, "targets": [1,4,5]},
					' ?0                  	;0
1098 675   ECHO/40                   ?0        848:'				],
                ' ?0                  	;0
1099 676   GOTO/253                  ?0        ?1327                ?849                	;0
1100 678   ECHO/40                   ?0        850:'        function refreshTooltips() {
            $(".jBox-wrapper").hide();
            $(window.jBoxes).each(function() {
                this.close();
            });
            window.jBoxes = [];
            $(\'.tooltip-left\').each(function() {
                window.jBoxes.push(new $(this).jBox(\'Tooltip\', {theme: \'TooltipDark\', position: {x: \'left\', y: \'center\'}, outside: \'x\'}));
            });
            $(\'.tooltip-right\').each(function() {
                window.jBoxes.push(new $(this).jBox(\'Tooltip\', {theme: \'TooltipDark\', position: {x: \'right\', y: \'center\'}, outside: \'x\'}));
            });
            $(\'.tooltip\').each(function() {
                window.jBoxes.push(new $(this).jBox(\'Tooltip\', {theme: \'TooltipDark\'}));
            });
        }
        function setURL(rURL, rReplace=true) {
            if (rReplace) {
                window.history.replaceState({}, \'\', rURL);
            } else {
                if (window.location.href.split("/").reverse()[0].split("?")[0].split(".")[0] != rURL.split("/").reverse()[0].split("?")[0].split(".")[0]) {
                    window.history.pushState({}, \'\', rURL);
                }
                window.rRealURL = rURL;
            }
		}
		function delParams(rParams) {
			$.each(rParams, function(rIndex, rParam) {
				delParam(rParam);
			});
		}
		function delParam(rParam) {
			var rURL = new URL(document.location);
			rURL.searchParams.delete(rParam);
			setURL(rURL);
		}
		function setParam(rParam, rValue) {
			var rURL = new URL(document.location);
			rURL.searchParams.set(rParam, rValue);
			setURL(rURL);
		}
        function getParam(rParam) {
			var rURL = new URL(document.location);
			return rURL.searchParams.get(rParam);
		}
		function hasParam(rParam) {
			var rURL = new URL(document.location);
			return rURL.searchParams.has(rParam);
		}
		function hasParams(rParams, rAll=false) {
			var rURL = new URL(document.location);
			var rCount = 0;
			$.each(rParams, function(rIndex, rParam) {
				if (rURL.searchParams.has(rParam)) {
					rCount += 1;
				}
			});
			if (((rCount > 0) && (!rAll)) || (rCount == rParams.length)) {
				return true;
			} else {
				return false;
			}
		}
        function bindHref() {
            ' ?0                  	;0
1101 679   FETCH_DIM_R/81            $353=     16?4                 851:'js_navigate'   	;0
1102 679   BOOL_NOT/13               #354=     $353                 ?0                  	;0
1103 679   JMPZ/43                   ?0        #354                 ?1105               	;0	>>1105
1104 680   GOTO/253                  ?0        ?1106                ?852                	;0
1105 682   ECHO/40                   ?0        853:'            $("a").each(function() {
				if (($(this).attr("href")) && ($(this).attr("href").slice(0,1) != "#") && ($(this).attr("href").slice(0,11) != "javascript:") && ($(this).attr("href").slice(0,8) != "epg_view")) {
                    $(this).unbind("click");
                    $(this).click(function(e) {
                        navigate($(this).attr("href"));
                        e.preventDefault();
                    });
                }
            });
            ' ?0                  	;0	<<1103
1106 684   ECHO/40                   ?0        854:'        }
        function viewLiveConnections(rStreamID) {
            $("#datatable-live").DataTable({
                destroy: true,
				ordering: true,
				paging: true,
				searching: true,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				bInfo: true,
                drawCallback: function() {
                    bindHref(); refreshTooltips();
				},
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "live_connections";
						d.stream_id = rStreamID;
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [1,6,7,8,9]},
                    {"visible": false, "targets": [0,3,4,5]}
				],
			});
            $(".bs-live-modal-center").modal("show");
        }
        function whois(rIP) {
			$("#whoisLabel").html(rIP);
			var rRows = $("#whois-table tr");
			$(rRows).each(function() {
				$(this).find("td").html("");
			});
			$.getJSON("./api?action=ip_whois&isp=1&ip=" + encodeURIComponent(rIP), function(rData) {
				if ("data" in rData) {
					if (("continent" in rData.data) && ("names" in rData.data.continent) && ("en" in rData.data.continent.names)) {
						$(rRows[1]).find("td").html(rData.data.continent.names.en);
					}
					if (("country" in rData.data) && ("names" in rData.data.country) && ("en" in rData.data.country.names)) {
						$(rRows[2]).find("td").html(rData.data.country.names.en);
					}
					if (("city" in rData.data) && ("names" in rData.data.city) && ("en" in rData.data.city.names)) {
						$(rRows[3]).find("td").html(rData.data.city.names.en);
					}
					if (("postal" in rData.data) && ("code" in rData.data.postal)) {
						$(rRows[4]).find("td").html(rData.data.postal.code);
					}
					if (("location" in rData.data) && ("latitude" in rData.data.location) && ("longitude" in rData.data.location)) {
						$(rRows[5]).find("td").html(rData.data.location.latitude + ", " + rData.data.location.longitude);
					}
					if (("isp" in rData.data) && (rData.data.isp)) {
						if ("isp" in rData.data.isp) {
							$(rRows[7]).find("td").html(rData.data.isp.isp);
						}
						if ("organization" in rData.data.isp) {
							$(rRows[8]).find("td").html(rData.data.isp.organization);
						}
						if (("autonomous_system_number" in rData.data.isp) && ("autonomous_system_organization" in rData.data.isp)) {
							$(rRows[9]).find("td").html("AS" + rData.data.isp.autonomous_system_number.toString() + " - " + rData.data.isp.autonomous_system_organization);
						}
					}
					if (("location" in rData.data) && ("time_zone" in rData.data.location)) {
						$(rRows[11]).find("td").html(rData.data.location.time_zone);
					}
					if (("location" in rData.data) && ("time" in rData.data.location)) {
						$(rRows[12]).find("td").html(rData.data.location.time);
					}
				}
			});
			$(".bs-whois-modal-center").modal("show");
		}
        </script>
        <script id="scripts">
		$(document).ready(function() {
            $("form").attr(\'autocomplete\', \'off\');
			$(document).keypress(function(event){
				if(event.which == 13 && event.target.nodeName != "TEXTAREA") return false;
			});
            $.fn.dataTable.ext.errMode = \'none\';
            var elems = Array.prototype.slice.call(document.querySelectorAll(\'.js-switch\'));
			elems.forEach(function(html) {
			  var switchery = new Switchery(html);
			  window.rSwitches[$(html).attr("id")] = switchery;
			});
            setTimeout(pingSession, 30000);
            ' ?0                  	;0
1107 685   GOTO/253                  ?0        ?714                 ?855                	;0
1108 687   ECHO/40                   ?0        856:'					{"orderable": false, "targets": [1,4,5]},
					' ?0                  	;0
1109 689   ECHO/40                   ?0        857:'				],
                ' ?0                  	;0
1110 690   BOOL_NOT/13               #355=     16?1                 ?0                  	;0
1111 690   JMPZ/43                   ?0        #355                 ?1113               	;0	>>1113
1112 691   GOTO/253                  ?0        ?15                  ?858                	;0
1113 693   ECHO/40                   ?0        859:'scrollX: true,' ?0                  	;0	<<1111
1114 694   GOTO/253                  ?0        ?15                  ?860                	;0
1115 696   ECHO/40                   ?0        861:'                        $("#package_cost").val(rData.data.cost_credits);
                        $("#package_duration").val(rData.data.duration);
                        $("#package_info").show();
                        $("#submit_button").val("Purchase");
                    }
                    rTable.draw();
                });
            } else {
                ' ?0                  	;0
1116 697   ISSET_ISEMPTY_CV/197      #356=     16?10                ?0                  	;33554432
1117 697   BOOL_NOT/13               #357=     #356                 ?0                  	;0
1118 697   JMPZ/43                   ?0        #357                 ?1120               	;0	>>1120
1119 698   GOTO/253                  ?0        ?877                 ?862                	;0
1120 700   ECHO/40                   ?0        863:'                $("#max_connections").val(' ?0                  	;0	<<1118
1121 701   FETCH_DIM_R/81            $358=     16?10                864:'max_connections'	;0
1122 701   ECHO/40                   ?0        $358                 ?0                  	;0
1123 702   ECHO/40                   ?0        865:');
                $("#cost_credits").html(0);
                $("#remaining_credits").html($.number(' ?0                  	;0
1124 703   GOTO/253                  ?0        ?697                 ?866                	;0
1125 705   ECHO/40                   ?0        867:'\');
                $("#package_cost").val("");
                $("#package_duration").val("");
                $("#package_info").hide();
                $("#package_warning").hide();
                $("#submit_button").val("Save");
                ' ?0                  	;0
1126 706   FETCH_DIM_R/81            $359=     16?3                 868:'allow_change_bouquets'	;0
1127 706   ASSIGN/38                 $360=     16?5                 $359                	;0
1128 706   JMPZ/43                   ?0        $360                 ?1130               	;0	>>1130
1129 707   GOTO/253                  ?0        ?1132                ?869                	;0
1130 709   ASSIGN/38                 ?345      16?6                 870:NULL            	;0	<<1128
1131 710   GOTO/253                  ?0        ?855                 ?871                	;0
1132 712   GOTO/253                  ?0        ?844                 ?872                	;0
1133 714   INIT_FCALL_BY_NAME/59     ?0        ?0                   873:'in_array'      	;2
1134 714   INIT_FCALL_BY_NAME/59     ?0        ?0                   875:'strtolower'    	;1
1135 714   FETCH_STATIC_PROP_FUNC_ARG/177 $362=     877:'rRequest'       878:'XUI'           	;1
1136 714   FETCH_DIM_FUNC_ARG/93     $363=     $362                 880:'dir'           	;1
1137 714   SEND_VAR_EX/66            ?80       $363                 ?1                  	;0
1138 714   DO_FCALL_BY_NAME/131      $364=     ?0                   ?0                  	;0
1139 714   SEND_VAR_NO_REF_EX/50     ?80       $364                 ?1                  	;0
1140 714   SEND_VAL_EX/116           ?96       881:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
1141 714   DO_FCALL_BY_NAME/131      $365=     ?0                   ?0                  	;0
1142 714   JMPZ/43                   ?0        $365                 ?1150               	;0	>>1150
1143 714   INIT_FCALL_BY_NAME/59     ?0        ?0                   882:'strtolower'    	;1
1144 714   FETCH_STATIC_PROP_FUNC_ARG/177 $366=     884:'rRequest'       885:'XUI'           	;1
1145 714   FETCH_DIM_FUNC_ARG/93     $367=     $366                 887:'dir'           	;1
1146 714   SEND_VAR_EX/66            ?80       $367                 ?1                  	;0
1147 714   DO_FCALL_BY_NAME/131      $368=     ?0                   ?0                  	;0
1148 714   QM_ASSIGN/22              #369=     $368                 ?0                  	;0
1149 714   JMP/42                    ?0        ?1151                ?0                  	;0	>>1151
1150 714   QM_ASSIGN/22              #369=     888:'desc'           ?0                  	;0	<<1142
1151 714   ECHO/40                   ?0        #369                 ?0                  	;0	<<1149
1152 715   ECHO/40                   ?0        889:'" ]],
				'    ?0                  	;0
1153 716   GOTO/253                  ?0        ?1738                ?890                	;0
1154 718   ECHO/40                   ?0        891:'				order: [[ ' ?0                  	;0
1155 719   GOTO/253                  ?0        ?1705                ?892                	;0
1156 721   INIT_FCALL_BY_NAME/59     ?0        ?0                   893:'intval'        	;1
1157 721   FETCH_DIM_FUNC_ARG/93     $370=     16?4                 895:'default_entries'	;1
1158 721   SEND_VAR_EX/66            ?80       $370                 ?1                  	;0
1159 721   DO_FCALL_BY_NAME/131      $371=     ?0                   ?0                  	;0
1160 721   JMP_SET/152               #372=     $371                 ?1162               	;0
1161 721   QM_ASSIGN/22              #372=     896:10               ?0                  	;0
1162 721   ECHO/40                   ?0        #372                 ?0                  	;0
1163 722   ECHO/40                   ?0        897:'").trigger(\'change\');
			window.rClearing = false;
			$(\'#datatable-activity\').DataTable().search($("#live_search").val());
			$(\'#datatable-activity\').DataTable().page.len($(\'#live_show_entries\').val());
			$("#datatable-activity").DataTable().page(0).draw(\'page\');
			$("#datatable-activity").DataTable().ajax.reload( null, false );
            delParams(["search", "stream", "line", "user", "page", "entries"]);
			checkClear();
		}
        function checkClear() {
			if (!hasParams(["search", "stream", "line", "user"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
        var rSearch;
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
            $(\'#live_line\').select2({
			  ajax: {
				url: \'./api\',
				dataType: \'json\',
				data: function (params) {
				  return {
					search: params.term,
					action: \'userlist\',
					page: params.page
				  };
				},
				processResults: function (data, params) {
				  params.page = params.page || 1;
				  return {
					results: data.items,
					pagination: {
						more: (params.page * 100) < data.total_count
					}
				  };
				},
				cache: true,
				width: "100%"
			  },
			  placeholder: \'All Lines\'
			});
            $(\'#live_stream\').select2({
			  ajax: {
				url: \'./api\',
				dataType: \'json\',
				data: function (params) {
				  return {
					search: params.term,
					action: \'streamlist\',
					page: params.page
				  };
				},
				processResults: function (data, params) {
				  params.page = params.page || 1;
				  return {
					results: data.items,
					pagination: {
						more: (params.page * 100) < data.total_count
					}
				  };
				},
				cache: true,
				width: "100%"
			  },
			  placeholder: \'All Streams\'
			});
            var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
1164 723   INIT_FCALL_BY_NAME/59     ?0        ?0                   898:'intval'        	;1
1165 723   FETCH_DIM_FUNC_ARG/93     $373=     16?4                 900:'default_entries'	;1
1166 723   SEND_VAR_EX/66            ?80       $373                 ?1                  	;0
1167 723   DO_FCALL_BY_NAME/131      $374=     ?0                   ?0                  	;0
1168 723   ECHO/40                   ?0        $374                 ?0                  	;0
1169 724   ECHO/40                   ?0        901:'; }
			var rTable = $("#datatable-activity").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>"
					},
					infoFiltered: ""
				},
				drawCallback: function() {
                    bindHref(); refreshTooltips();                    if ($("#datatable-activity").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-activity").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-activity").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
				},
				responsive: false,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "live_connections";
                        d.line = getLine();
						d.stream = getStream();
						d.user = getUser();
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [1,6,7,8,9]},
                    {"className": "ellipsis", "targets": [4]},
                    {"visible": false, "targets": [0]}
				],
                ' ?0                  	;0
1170 725   BOOL_NOT/13               #375=     16?1                 ?0                  	;0
1171 725   JMPZ/43                   ?0        #375                 ?1173               	;0	>>1173
1172 726   GOTO/253                  ?0        ?1075                ?902                	;0
1173 728   GOTO/253                  ?0        ?1074                ?903                	;0	<<1171
1174 730   ECHO/40                   ?0        904:', "'            ?0                  	;0
1175 731   INIT_FCALL_BY_NAME/59     ?0        ?0                   905:'in_array'      	;2
1176 731   INIT_FCALL_BY_NAME/59     ?0        ?0                   907:'strtolower'    	;1
1177 731   FETCH_STATIC_PROP_FUNC_ARG/177 $376=     909:'rRequest'       910:'XUI'           	;1
1178 731   FETCH_DIM_FUNC_ARG/93     $377=     $376                 912:'dir'           	;1
1179 731   SEND_VAR_EX/66            ?80       $377                 ?1                  	;0
1180 731   DO_FCALL_BY_NAME/131      $378=     ?0                   ?0                  	;0
1181 731   SEND_VAR_NO_REF_EX/50     ?80       $378                 ?1                  	;0
1182 731   SEND_VAL_EX/116           ?96       913:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
1183 731   DO_FCALL_BY_NAME/131      $379=     ?0                   ?0                  	;0
1184 731   JMPZ/43                   ?0        $379                 ?1192               	;0	>>1192
1185 731   INIT_FCALL_BY_NAME/59     ?0        ?0                   914:'strtolower'    	;1
1186 731   FETCH_STATIC_PROP_FUNC_ARG/177 $380=     916:'rRequest'       917:'XUI'           	;1
1187 731   FETCH_DIM_FUNC_ARG/93     $381=     $380                 919:'dir'           	;1
1188 731   SEND_VAR_EX/66            ?80       $381                 ?1                  	;0
1189 731   DO_FCALL_BY_NAME/131      $382=     ?0                   ?0                  	;0
1190 731   QM_ASSIGN/22              #383=     $382                 ?0                  	;0
1191 731   JMP/42                    ?0        ?1193                ?0                  	;0	>>1193
1192 731   QM_ASSIGN/22              #383=     920:'desc'           ?0                  	;0	<<1184
1193 731   ECHO/40                   ?0        #383                 ?0                  	;0	<<1191
1194 732   ECHO/40                   ?0        921:'" ]],
				pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
			});
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
			$("#datatable-users").css("width", "100%");
			$(\'#user_search\').keyup(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#user_search").val()) {
						setParam("search", $("#user_search").val());
					} else {
						delParam("search");
					}
					checkClear();
					doSearch($(this).val());
				}
			});
			$(\'#user_show_entries\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#user_show_entries").val()) {
						setParam("entries", $("#user_show_entries").val());
					} else {
						delParam("entries");
					}
					checkClear();
					rTable.page.len($(this).val()).draw();
				}
			});
			$(\'#user_filter\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#user_filter").val()) {
						setParam("filter", $("#user_filter").val());
					} else {
						delParam("filter");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
			$(\'#user_reseller\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#user_reseller").val()) {
						setParam("owner", $("#user_reseller").val());
					} else {
						delParam("owner");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
			if ($(\'#user_search\').val()) {
				rTable.search($(\'#user_search\').val()).draw();
			}
            checkClear();
		});
        ' ?0                  	;0
1195 734   GOTO/253                  ?0        ?1649                ?922                	;0
1196 735   GOTO/253                  ?0        ?913                 ?923                	;0
1197 737   FETCH_DIM_R/81            $384=     16?0                 924:'device_delete_confirm'	;0
1198 737   ECHO/40                   ?0        $384                 ?0                  	;0
1199 738   ECHO/40                   ?0        925:'",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
            } else if ((rType == "convert") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Convert",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to conver this Device to a User Line?",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
            } else if ((rType == "kill_line") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Kill",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to kill all connections for this line?",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
			} else {
                rConfirm = true;
            }
            if (rConfirm) {
                $.getJSON("./api?action=mag&sub=" + rType + "&mag_id=" + rID, function(data) {
                    if (data.result === true) {
                        if (rType == "delete") {
                            $.toast("' ?0                  	;0
1200 739   FETCH_DIM_R/81            $385=     16?0                 926:'device_confirmed_1'	;0
1201 739   ECHO/40                   ?0        $385                 ?0                  	;0
1202 740   ECHO/40                   ?0        927:'");
                        } else if (rType == "enable") {
                            $.toast("' ?0                  	;0
1203 741   FETCH_DIM_R/81            $386=     16?0                 928:'device_confirmed_2'	;0
1204 741   ECHO/40                   ?0        $386                 ?0                  	;0
1205 742   GOTO/253                  ?0        ?1506                ?929                	;0
1206 744   INIT_FCALL_BY_NAME/59     ?0        ?0                   930:'implode'       	;2
1207 744   SEND_VAL_EX/116           ?80       932:','              ?1                  	;0
1208 744   INIT_FCALL_BY_NAME/59     ?0        ?0                   933:'array_map'     	;2
1209 744   SEND_VAL_EX/116           ?80       935:'intval'         ?1                  	;0
1210 744   INIT_FCALL_BY_NAME/59     ?0        ?0                   936:'json_decode'   	;2
1211 744   FETCH_DIM_FUNC_ARG/93     $387=     16?10                938:'bouquet'       	;1
1212 744   SEND_VAR_EX/66            ?80       $387                 ?1                  	;0
1213 744   SEND_VAL_EX/116           ?96       939:true             ?2                  	;0
1214 744   DO_FCALL_BY_NAME/131      $388=     ?0                   ?0                  	;0
1215 744   SEND_VAR_NO_REF_EX/50     ?96       $388                 ?2                  	;0
1216 744   DO_FCALL_BY_NAME/131      $389=     ?0                   ?0                  	;0
1217 744   JMP_SET/152               #390=     $389                 ?1219               	;0
1218 744   QM_ASSIGN/22              #390=     940:array (
)        ?0                  	;0
1219 744   SEND_VAL_EX/116           ?96       #390                 ?2                  	;0
1220 744   DO_FCALL_BY_NAME/131      $391=     ?0                   ?0                  	;0
1221 744   ECHO/40                   ?0        $391                 ?0                  	;0
1222 745   ECHO/40                   ?0        941:'];
        '   ?0                  	;0
1223 747   ECHO/40                   ?0        942:'        
        function getPackage() {
            var rTable = $(\'#datatable-review\').DataTable();
            rTable.clear();
            rTable.draw();
            if ($("#package").val().length > 0) {
                $.getJSON("./api?action=get_package' ?0                  	;0
1224 748   FETCH_STATIC_PROP_IS/176  $392=     943:'rRequest'       944:'XUI'           	;0
1225 748   ISSET_ISEMPTY_DIM_OBJ/115 #393=     $392                 946:'trial'         	;33554432
1226 748   JMPZ_EX/46                #393=     #393                 ?1230               	;0	>>1230
1227 748   ISSET_ISEMPTY_CV/197      #394=     16?10                ?0                  	;33554432
1228 748   BOOL_NOT/13               #395=     #394                 ?0                  	;0
1229 748   BOOL/52                   #393=     #395                 ?0                  	;0
1230 748   BOOL_NOT/13               #396=     #393                 ?0                  	;0	<<1226
1231 748   JMPZ/43                   ?0        #396                 ?1233               	;0	>>1233
1232 749   GOTO/253                  ?0        ?896                 ?947                	;0
1233 751   GOTO/253                  ?0        ?895                 ?948                	;0	<<1231
1234 753   FETCH_DIM_R/81            $397=     16?0                 949:'device_delete_confirm'	;0
1235 753   ECHO/40                   ?0        $397                 ?0                  	;0
1236 754   ECHO/40                   ?0        950:'",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
            } else if ((rType == "convert") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Convert",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to conver this Device to a User Line?",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
            } else if ((rType == "kill_line") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Kill",
                    cancelButton: "Cancel",
                    content: "Are you sure you want to kill all connections for this line?",
                    confirm: function () {
                        api(rID, rType, true);
                    }
                }).open();
			} else {
                rConfirm = true;
            }
            if (rConfirm) {
                $.getJSON("./api?action=enigma&sub=" + rType + "&e2_id=" + rID, function(data) {
                    if (data.result === true) {
                        if (rType == "delete") {
                            $.toast("' ?0                  	;0
1237 755   FETCH_DIM_R/81            $398=     16?0                 951:'device_confirmed_1'	;0
1238 755   ECHO/40                   ?0        $398                 ?0                  	;0
1239 756   ECHO/40                   ?0        952:'");
                        } else if (rType == "enable") {
                            $.toast("' ?0                  	;0
1240 757   FETCH_DIM_R/81            $399=     16?0                 953:'device_confirmed_2'	;0
1241 757   ECHO/40                   ?0        $399                 ?0                  	;0
1242 758   GOTO/253                  ?0        ?1514                ?954                	;0
1243 760   ECHO/40                   ?0        955:'				pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
			});
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
			$("#datatable-streampage").css("width", "100%");
			$(\'#movies_search\').keyup(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#movies_search").val()) {
						setParam("search", $("#movies_search").val());
					} else {
						delParam("search");
					}
					checkClear();
					doSearch($(this).val());
				}
			})
			$(\'#movies_show_entries\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#movies_show_entries").val()) {
						setParam("entries", $("#movies_show_entries").val());
					} else {
						delParam("entries");
					}
					checkClear();
					rTable.page.len($(this).val()).draw();
				}
			});
			$(\'#movies_category_id\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#movies_category_id").val()) {
						setParam("category", $("#movies_category_id").val());
					} else {
						delParam("category");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
			if ($(\'#movies_search\').val()) {
				rTable.search($(\'#movies_search\').val()).draw();
			}
            checkClear();
		});
        
		' ?0                  	;0
1244 762   GOTO/253                  ?0        ?890                 ?956                	;0
1245 764   ECHO/40                   ?0        957:'        
		var rClearing = false;

		function api(rID, rType, rConfirm=false) {
            if ((rType == "delete") && (!rConfirm)) {
                new jBox("Confirm", {
                    confirmButton: "Delete",
                    cancelButton: "Cancel",
                    content: "' ?0                  	;0
1246 765   GOTO/253                  ?0        ?1197                ?958                	;0
1247 767   INIT_FCALL_BY_NAME/59     ?0        ?0                   959:'intval'        	;1
1248 767   FETCH_DIM_FUNC_ARG/93     $400=     16?4                 961:'default_entries'	;1
1249 767   SEND_VAR_EX/66            ?80       $400                 ?1                  	;0
1250 767   DO_FCALL_BY_NAME/131      $401=     ?0                   ?0                  	;0
1251 767   JMP_SET/152               #402=     $401                 ?1253               	;0
1252 767   QM_ASSIGN/22              #402=     962:10               ?0                  	;0
1253 767   ECHO/40                   ?0        #402                 ?0                  	;0
1254 768   ECHO/40                   ?0        963:'").trigger(\'change\');
			window.rClearing = false;
			$(\'#datatable-users\').DataTable().search($("#user_search").val());
			$(\'#datatable-users\').DataTable().page.len($(\'#user_show_entries\').val());
			$("#datatable-users").DataTable().page(0).draw(\'page\');
			$("#datatable-users").DataTable().ajax.reload( null, false );
            delParams(["search", "filter", "owner", "page", "entries"]);
			checkClear();
		}
        function checkClear() {
			if (!hasParams(["search", "filter", "owner"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
		function refreshTable() {
			$("#datatable-users").DataTable().ajax.reload( null, false );
		}
        var rSearch;
		$(document).ready(function() {
            $("#output_type").change(function() {
                $("#download_type").trigger("change");
            });
            $("#download_type").change(function() {
                if ($("#download_type").val()) {
                    ' ?0                  	;0
1255 769   ISSET_ISEMPTY_DIM_OBJ/115 #403=     16?2                 964:'reseller_dns'  	;16777216
1256 769   JMPZ/43                   ?0        #403                 ?1267               	;0	>>1267
1257 769   INIT_FCALL_BY_NAME/59     ?0        ?0                   965:'rtrim'         	;2
1258 769   FETCH_CONSTANT/99         #405=     ?0                   970:'SERVER_ID'     	;16
1259 769   FETCH_STATIC_PROP_FUNC_ARG/177 $404=     967:'rServers'       968:'XUI'           	;1
1260 769   FETCH_DIM_FUNC_ARG/93     $406=     $404                 #405                	;1
1261 769   FETCH_DIM_FUNC_ARG/93     $407=     $406                 973:'site_url'      	;1
1262 769   SEND_VAR_EX/66            ?80       $407                 ?1                  	;0
1263 769   SEND_VAL_EX/116           ?96       974:'/'              ?2                  	;0
1264 769   DO_FCALL_BY_NAME/131      $408=     ?0                   ?0                  	;0
1265 769   QM_ASSIGN/22              #409=     $408                 ?0                  	;0
1266 769   JMP/42                    ?0        ?1308                ?0                  	;0	>>1308
1267 769   FETCH_STATIC_PROP_R/173   $410=     975:'rSettings'      976:'XUI'           	;0	<<1256
1268 769   FETCH_DIM_R/81            $411=     $410                 978:'reseller_ssl_domain'	;0
1269 769   JMPZ_EX/46                #412=     $411                 ?1275               	;0	>>1275
1270 769   FETCH_CONSTANT/99         #414=     ?0                   982:'SERVER_ID'     	;16
1271 769   FETCH_STATIC_PROP_R/173   $413=     979:'rServers'       980:'XUI'           	;0
1272 769   FETCH_DIM_R/81            $415=     $413                 #414                	;0
1273 769   FETCH_DIM_R/81            $416=     $415                 985:'enable_https'  	;0
1274 769   BOOL/52                   #412=     $416                 ?0                  	;0
1275 769   JMPZ/43                   ?0        #412                 ?1292               	;0	>>1292	<<1269
1276 769   INIT_FCALL_BY_NAME/59     ?0        ?0                   986:'htmlspecialchars'	;1
1277 769   FETCH_DIM_FUNC_ARG/93     $417=     16?2                 988:'reseller_dns'  	;1
1278 769   SEND_VAR_EX/66            ?80       $417                 ?1                  	;0
1279 769   DO_FCALL_BY_NAME/131      $418=     ?0                   ?0                  	;0
1280 769   CONCAT/8                  #419=     989:'https://'       $418                	;0
1281 769   CONCAT/8                  #420=     #419                 990:':'             	;0
1282 769   INIT_FCALL_BY_NAME/59     ?0        ?0                   991:'intval'        	;1
1283 769   FETCH_CONSTANT/99         #422=     ?0                   996:'SERVER_ID'     	;16
1284 769   FETCH_STATIC_PROP_FUNC_ARG/177 $421=     993:'rServers'       994:'XUI'           	;1
1285 769   FETCH_DIM_FUNC_ARG/93     $423=     $421                 #422                	;1
1286 769   FETCH_DIM_FUNC_ARG/93     $424=     $423                 999:'https_broadcast_port'	;1
1287 769   SEND_VAR_EX/66            ?80       $424                 ?1                  	;0
1288 769   DO_FCALL_BY_NAME/131      $425=     ?0                   ?0                  	;0
1289 769   CONCAT/8                  #426=     #420                 $425                	;0
1290 769   QM_ASSIGN/22              #427=     #426                 ?0                  	;0
1291 769   JMP/42                    ?0        ?1307                ?0                  	;0	>>1307
1292 769   INIT_FCALL_BY_NAME/59     ?0        ?0                   1000:'htmlspecialchars'	;1	<<1275
1293 769   FETCH_DIM_FUNC_ARG/93     $428=     16?2                 1002:'reseller_dns' 	;1
1294 769   SEND_VAR_EX/66            ?80       $428                 ?1                  	;0
1295 769   DO_FCALL_BY_NAME/131      $429=     ?0                   ?0                  	;0
1296 769   CONCAT/8                  #430=     1003:'http://'       $429                	;0
1297 769   CONCAT/8                  #431=     #430                 1004:':'            	;0
1298 769   INIT_FCALL_BY_NAME/59     ?0        ?0                   1005:'intval'       	;1
1299 769   FETCH_CONSTANT/99         #433=     ?0                   1010:'SERVER_ID'    	;16
1300 769   FETCH_STATIC_PROP_FUNC_ARG/177 $432=     1007:'rServers'      1008:'XUI'          	;1
1301 769   FETCH_DIM_FUNC_ARG/93     $434=     $432                 #433                	;1
1302 769   FETCH_DIM_FUNC_ARG/93     $435=     $434                 1013:'http_broadcast_port'	;1
1303 769   SEND_VAR_EX/66            ?80       $435                 ?1                  	;0
1304 769   DO_FCALL_BY_NAME/131      $436=     ?0                   ?0                  	;0
1305 769   CONCAT/8                  #437=     #431                 $436                	;0
1306 769   QM_ASSIGN/22              #427=     #437                 ?0                  	;0
1307 769   QM_ASSIGN/22              #409=     #427                 ?0                  	;0	<<1291
1308 769   ASSIGN/38                 ?422      16?15                #409                	;0	<<1266
1309 770   ECHO/40                   ?0        1014:'                    rText = "' ?0                  	;0
1310 771   ECHO/40                   ?0        16?15                ?0                  	;0
1311 772   GOTO/253                  ?0        ?1636                ?1015               	;0
1312 774   FETCH_DIM_R/81            $439=     16?10                1016:'max_connections'	;0
1313 774   ECHO/40                   ?0        $439                 ?0                  	;0
1314 775   ECHO/40                   ?0        1017:');
                $("#cost_credits").html(0);
                $("#remaining_credits").html($.number(' ?0                  	;0
1315 776   FETCH_DIM_R/81            $440=     16?2                 1018:'credits'      	;0
1316 776   ECHO/40                   ?0        $440                 ?0                  	;0
1317 777   ECHO/40                   ?0        1019:', 0));
                $("#exp_date").val(\'' ?0                  	;0
1318 778   INIT_FCALL_BY_NAME/59     ?0        ?0                   1020:'date'         	;2
1319 778   FETCH_DIM_R/81            $441=     16?4                 1022:'date_format'  	;0
1320 778   CONCAT/8                  #442=     $441                 1023:' H:i'         	;0
1321 778   SEND_VAL_EX/116           ?80       #442                 ?1                  	;0
1322 778   FETCH_DIM_FUNC_ARG/93     $443=     16?10                1024:'exp_date'     	;2
1323 778   SEND_VAR_EX/66            ?96       $443                 ?2                  	;0
1324 778   DO_FCALL_BY_NAME/131      $444=     ?0                   ?0                  	;0
1325 778   ECHO/40                   ?0        $444                 ?0                  	;0
1326 779   GOTO/253                  ?0        ?1125                ?1025               	;0
1327 781   BOOL_NOT/13               #445=     16?1                 ?0                  	;0
1328 781   JMPZ/43                   ?0        #445                 ?1330               	;0	>>1330
1329 782   GOTO/253                  ?0        ?1331                ?1026               	;0
1330 784   ECHO/40                   ?0        1027:'scrollX: true,' ?0                  	;0	<<1328
1331 786   ECHO/40                   ?0        1028:'				'          ?0                  	;0
1332 787   FETCH_STATIC_PROP_R/173   $446=     1029:'rSettings'     1030:'XUI'          	;0
1333 787   FETCH_DIM_R/81            $447=     $446                 1032:'redis_handler'	;0
1334 787   JMPZ/43                   ?0        $447                 ?1336               	;0	>>1336
1335 788   GOTO/253                  ?0        ?437                 ?1033               	;0
1336 790   GOTO/253                  ?0        ?766                 ?1034               	;0	<<1334
1337 792   ECHO/40                   ?0        1035:'        var rUserPackage = null;
        var rUserBouquet = [];
        ' ?0                  	;0
1338 793   GOTO/253                  ?0        ?975                 ?1036               	;0
1339 795   ECHO/40                   ?0        1037:'        var rUserPackage = ' ?0                  	;0
1340 796   INIT_FCALL_BY_NAME/59     ?0        ?0                   1038:'intval'       	;1
1341 796   FETCH_DIM_FUNC_ARG/93     $448=     16?10                1040:'package_id'   	;1
1342 796   SEND_VAR_EX/66            ?80       $448                 ?1                  	;0
1343 796   DO_FCALL_BY_NAME/131      $449=     ?0                   ?0                  	;0
1344 796   JMP_SET/152               #450=     $449                 ?1346               	;0
1345 796   QM_ASSIGN/22              #450=     1041:'null'          ?0                  	;0
1346 796   ECHO/40                   ?0        #450                 ?0                  	;0
1347 797   GOTO/253                  ?0        ?957                 ?1042               	;0
1348 799   IS_EQUAL/17               #451=     16?11                1043:'mags'         	;0
1349 799   JMPZ/43                   ?0        #451                 ?1351               	;0	>>1351
1350 800   GOTO/253                  ?0        ?1245                ?1044               	;0
1351 802   IS_EQUAL/17               #452=     16?11                1045:'movies'       	;0	<<1349
1352 802   JMPZ/43                   ?0        #452                 ?1354               	;0	>>1354
1353 803   GOTO/253                  ?0        ?759                 ?1046               	;0
1354 805   IS_EQUAL/17               #453=     16?11                1047:'radios'       	;0	<<1352
1355 805   JMPZ/43                   ?0        #453                 ?1357               	;0	>>1357
1356 806   GOTO/253                  ?0        ?251                 ?1048               	;0
1357 808   IS_EQUAL/17               #454=     16?11                1049:'user'         	;0	<<1355
1358 808   JMPZ/43                   ?0        #454                 ?1360               	;0	>>1360
1359 809   GOTO/253                  ?0        ?954                 ?1050               	;0
1360 811   IS_EQUAL/17               #455=     16?11                1051:'ticket'       	;0	<<1358
1361 811   JMPZ/43                   ?0        #455                 ?1363               	;0	>>1363
1362 812   GOTO/253                  ?0        ?1011                ?1052               	;0
1363 814   GOTO/253                  ?0        ?1403                ?1053               	;0	<<1361
1364 816   ECHO/40                   ?0        1054:'					{"orderable": false, "targets": [9]},
					' ?0                  	;0
1365 817   GOTO/253                  ?0        ?1367                ?1055               	;0
1366 819   ECHO/40                   ?0        1056:'					{"orderable": false, "targets": [6,9]},
					' ?0                  	;0
1367 821   GOTO/253                  ?0        ?616                 ?1057               	;0
1368 823   ECHO/40                   ?0        1058:'				order: [[ ' ?0                  	;0
1369 824   FETCH_STATIC_PROP_IS/176  $456=     1059:'rRequest'      1060:'XUI'          	;0
1370 824   ISSET_ISEMPTY_DIM_OBJ/115 #457=     $456                 1062:'order'        	;33554432
1371 824   JMPZ/43                   ?0        #457                 ?1379               	;0	>>1379
1372 824   INIT_FCALL_BY_NAME/59     ?0        ?0                   1063:'intval'       	;1
1373 824   FETCH_STATIC_PROP_FUNC_ARG/177 $458=     1065:'rRequest'      1066:'XUI'          	;1
1374 824   FETCH_DIM_FUNC_ARG/93     $459=     $458                 1068:'order'        	;1
1375 824   SEND_VAR_EX/66            ?80       $459                 ?1                  	;0
1376 824   DO_FCALL_BY_NAME/131      $460=     ?0                   ?0                  	;0
1377 824   QM_ASSIGN/22              #461=     $460                 ?0                  	;0
1378 824   JMP/42                    ?0        ?1380                ?0                  	;0	>>1380
1379 824   QM_ASSIGN/22              #461=     1069:2               ?0                  	;0	<<1371
1380 824   ECHO/40                   ?0        #461                 ?0                  	;0	<<1378
1381 825   ECHO/40                   ?0        1070:', "'           ?0                  	;0
1382 826   INIT_FCALL_BY_NAME/59     ?0        ?0                   1071:'in_array'     	;2
1383 826   INIT_FCALL_BY_NAME/59     ?0        ?0                   1073:'strtolower'   	;1
1384 826   FETCH_STATIC_PROP_FUNC_ARG/177 $462=     1075:'rRequest'      1076:'XUI'          	;1
1385 826   FETCH_DIM_FUNC_ARG/93     $463=     $462                 1078:'dir'          	;1
1386 826   SEND_VAR_EX/66            ?80       $463                 ?1                  	;0
1387 826   DO_FCALL_BY_NAME/131      $464=     ?0                   ?0                  	;0
1388 826   SEND_VAR_NO_REF_EX/50     ?80       $464                 ?1                  	;0
1389 826   SEND_VAL_EX/116           ?96       1079:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
1390 826   DO_FCALL_BY_NAME/131      $465=     ?0                   ?0                  	;0
1391 826   JMPZ/43                   ?0        $465                 ?1399               	;0	>>1399
1392 826   INIT_FCALL_BY_NAME/59     ?0        ?0                   1080:'strtolower'   	;1
1393 826   FETCH_STATIC_PROP_FUNC_ARG/177 $466=     1082:'rRequest'      1083:'XUI'          	;1
1394 826   FETCH_DIM_FUNC_ARG/93     $467=     $466                 1085:'dir'          	;1
1395 826   SEND_VAR_EX/66            ?80       $467                 ?1                  	;0
1396 826   DO_FCALL_BY_NAME/131      $468=     ?0                   ?0                  	;0
1397 826   QM_ASSIGN/22              #469=     $468                 ?0                  	;0
1398 826   JMP/42                    ?0        ?1400                ?0                  	;0	>>1400
1399 826   QM_ASSIGN/22              #469=     1086:'asc'           ?0                  	;0	<<1391
1400 826   ECHO/40                   ?0        #469                 ?0                  	;0	<<1398
1401 827   ECHO/40                   ?0        1087:'" ]],
				'   ?0                  	;0
1402 828   GOTO/253                  ?0        ?757                 ?1088               	;0
1403 830   IS_EQUAL/17               #470=     16?11                1089:'user_logs'    	;0
1404 830   JMPZ/43                   ?0        #470                 ?1406               	;0	>>1406
1405 831   GOTO/253                  ?0        ?179                 ?1090               	;0
1406 833   IS_EQUAL/17               #471=     16?11                1091:'users'        	;0	<<1404
1407 833   JMPZ/43                   ?0        #471                 ?1409               	;0	>>1409
1408 834   GOTO/253                  ?0        ?679                 ?1092               	;0
1409 836   IS_EQUAL/17               #472=     16?11                1093:'streams'      	;0	<<1407
1410 836   JMPZ/43                   ?0        #472                 ?1412               	;0	>>1412
1411 837   GOTO/253                  ?0        ?935                 ?1094               	;0
1412 839   IS_EQUAL/17               #473=     16?11                1095:'created_channels'	;0	<<1410
1413 839   JMPZ/43                   ?0        #473                 ?1415               	;0	>>1415
1414 840   GOTO/253                  ?0        ?515                 ?1096               	;0
1415 842   IS_EQUAL/17               #474=     16?11                1097:'tickets'      	;0	<<1413
1416 842   JMPZ/43                   ?0        #474                 ?1418               	;0	>>1418
1417 843   GOTO/253                  ?0        ?268                 ?1098               	;0
1418 845   GOTO/253                  ?0        ?723                 ?1099               	;0	<<1416
1419 847   ECHO/40                   ?0        1100:', "'           ?0                  	;0
1420 848   INIT_FCALL_BY_NAME/59     ?0        ?0                   1101:'in_array'     	;2
1421 848   INIT_FCALL_BY_NAME/59     ?0        ?0                   1103:'strtolower'   	;1
1422 848   FETCH_STATIC_PROP_FUNC_ARG/177 $475=     1105:'rRequest'      1106:'XUI'          	;1
1423 848   FETCH_DIM_FUNC_ARG/93     $476=     $475                 1108:'dir'          	;1
1424 848   SEND_VAR_EX/66            ?80       $476                 ?1                  	;0
1425 848   DO_FCALL_BY_NAME/131      $477=     ?0                   ?0                  	;0
1426 848   SEND_VAR_NO_REF_EX/50     ?80       $477                 ?1                  	;0
1427 848   SEND_VAL_EX/116           ?96       1109:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
1428 848   DO_FCALL_BY_NAME/131      $478=     ?0                   ?0                  	;0
1429 848   JMPZ/43                   ?0        $478                 ?1437               	;0	>>1437
1430 848   INIT_FCALL_BY_NAME/59     ?0        ?0                   1110:'strtolower'   	;1
1431 848   FETCH_STATIC_PROP_FUNC_ARG/177 $479=     1112:'rRequest'      1113:'XUI'          	;1
1432 848   FETCH_DIM_FUNC_ARG/93     $480=     $479                 1115:'dir'          	;1
1433 848   SEND_VAR_EX/66            ?80       $480                 ?1                  	;0
1434 848   DO_FCALL_BY_NAME/131      $481=     ?0                   ?0                  	;0
1435 848   QM_ASSIGN/22              #482=     $481                 ?0                  	;0
1436 848   JMP/42                    ?0        ?1438                ?0                  	;0	>>1438
1437 848   QM_ASSIGN/22              #482=     1116:'desc'          ?0                  	;0	<<1429
1438 848   ECHO/40                   ?0        #482                 ?0                  	;0	<<1436
1439 849   ECHO/40                   ?0        1117:'" ]],
				'   ?0                  	;0
1440 850   GOTO/253                  ?0        ?757                 ?1118               	;0
1441 852   GOTO/253                  ?0        ?1368                ?1119               	;0
1442 855   ISSET_ISEMPTY_CV/197      #483=     16?13                ?0                  	;33554432
1443 855   BOOL_NOT/13               #484=     #483                 ?0                  	;0
1444 855   JMPZ/43                   ?0        #484                 ?1446               	;0	>>1446
1445 856   GOTO/253                  ?0        ?1450                ?1120               	;0
1446 858   FETCH_DIM_R/81            $485=     16?13                1121:'id'           	;0	<<1444
1447 858   CONCAT/8                  #486=     1122:' + "&orig_id=' $485                	;0
1448 858   CONCAT/8                  #487=     #486                 1123:'"'            	;0
1449 858   ECHO/40                   ?0        #487                 ?0                  	;0
1450 860   ECHO/40                   ?0        1124:', function(rData) {
                    if (rData.result === true) {
                        $("#max_connections").val(rData.data.max_connections);
                        $("#cost_credits").html($.number(rData.data.cost_credits, 0));
                        $("#remaining_credits").html($.number(' ?0                  	;0
1451 861   GOTO/253                  ?0        ?34                  ?1125               	;0
1452 863   FETCH_STATIC_PROP_IS/176  $488=     1126:'rRequest'      1127:'XUI'          	;0
1453 863   ISSET_ISEMPTY_DIM_OBJ/115 #489=     $488                 1129:'trial'        	;33554432
1454 863   JMPZ_EX/46                #489=     #489                 ?1458               	;0	>>1458
1455 863   ISSET_ISEMPTY_CV/197      #490=     16?10                ?0                  	;33554432
1456 863   BOOL_NOT/13               #491=     #490                 ?0                  	;0
1457 863   BOOL/52                   #489=     #491                 ?0                  	;0
1458 863   BOOL_NOT/13               #492=     #489                 ?0                  	;0	<<1454
1459 863   JMPZ/43                   ?0        #492                 ?1461               	;0	>>1461
1460 864   GOTO/253                  ?0        ?1462                ?1130               	;0
1461 866   ECHO/40                   ?0        1131:'_trial'        ?0                  	;0	<<1459
1462 868   ECHO/40                   ?0        1132:'&package_id=" + $("#package").val()' ?0                  	;0
1463 869   ISSET_ISEMPTY_CV/197      #493=     16?10                ?0                  	;33554432
1464 869   BOOL_NOT/13               #494=     #493                 ?0                  	;0
1465 869   JMPZ/43                   ?0        #494                 ?1467               	;0	>>1467
1466 870   GOTO/253                  ?0        ?997                 ?1133               	;0
1467 872   GOTO/253                  ?0        ?993                 ?1134               	;0	<<1465
1468 874   INIT_FCALL_BY_NAME/59     ?0        ?0                   1135:'E14531EB75c10786'	;0
1469 874   DO_FCALL_BY_NAME/131      $495=     ?0                   ?0                  	;0
1470 874   ECHO/40                   ?0        $495                 ?0                  	;0
1471 875   ECHO/40                   ?0        1137:'</div>
                </div>
            </div>
        </footer>
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/libs/jquery-toast/jquery.toast.min.js"></script>
        <script src="assets/libs/jquery-nice-select/jquery.nice-select.min.js"></script>
        <script src="assets/libs/switchery/switchery.min.js"></script>
        <script src="assets/libs/select2/select2.min.js"></script>
        <script src="assets/libs/nestable2/jquery.nestable.min.js"></script>
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
        <script src="assets/libs/moment/moment.min.js"></script>
        <script src="assets/libs/daterangepicker/daterangepicker.js"></script>
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables/buttons.print.min.js"></script>
        <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables/dataTables.select.min.js"></script>
        <script src="assets/libs/datatables/dataTables.rowReorder.js"></script>
        <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="assets/libs/treeview/jstree.min.js"></script>
        <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/libs/jbox/jBox.all.min.js"></script>
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/jquery-number/jquery.number.js"></script>
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/libs/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/libs/peity/jquery.peity.min.js"></script>
        <script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="assets/libs/lazyload/lazyload.min.js"></script>
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        ' ?0                  	;0
1472 876   INCLUDE_OR_EVAL/73        ?480      1138:'post.php'      ?0                  	;2
1473 877   ECHO/40                   ?0        1139:'        <script>
        var rRealURL = undefined;
        var jBoxes = [];
        var rSwitches = [];
        
		window.XUI = window.XUI || {};
		window.XUI.Listings = window.XUI.Listings || {};
		
        $.fn.serializeObject = function() {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function() {
                if (o[this.name]) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }
                    o[this.name].push(this.value || \'\');
                } else {
                    o[this.name] = this.value || \'\';
                }
            });
            return o;
        };
        function showError(rText) {
            $.toast({
                text: rText,
                icon: \'warning\',
                loader: true,
                loaderBg: \'#c62828\',
                hideAfter: 8000
            })
        }
        function showSuccess(rText) {
            $.toast({
                text: rText,
                icon: \'success\',
                loader: true,
                hideAfter: 5000
            })
        }
        function refreshCredits() {
            $.getJSON("api?action=stats", function(data) {
                if (data.owner_credits) {
                    $("#owner_credits").html(parseInt(data.owner_credits).toLocaleString());
                }
            });
        }
        function findRowByID(rTable, rColumn, rID) {
            for (rRow in rTable.rows()[0]) {
                if (rTable.row(rRow).data()[rColumn] == rID) {
                    return rRow;
                }
            }
            return null;
        }
        function isValidDomain(domain) { 
			var re = new RegExp(/^((?:(?:(?:\\w[\\.\\-\\+]?)*)\\w)+)((?:(?:(?:\\w[\\.\\-\\+]?){0,62})\\w)+)\\.(\\w{2,16})$/); 
			return domain.match(re);
		} 
        function isValidIP(rIP) {
			if (/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test(rIP)) {
				return true;
			} else {
				return false;
			}
		}
        function isValidDate(dateString) {
			  var regEx = /^\\d{4}-\\d{2}-\\d{2}$/;
			  if(!dateString.match(regEx)) return false;  // Invalid format
			  var d = new Date(dateString);
			  var dNum = d.getTime();
			  if(!dNum && dNum !== 0) return false; // NaN value, Invalid date
			  return d.toISOString().slice(0,10) === dateString;
		}
        function isNumberKey(evt) {
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode != 46 && charCode != 45 && charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			} else {
				return true;
			}
		}
        function pingSession() {
            $.getJSON("./session", function(data) {
                if (!data.result) {
                    window.location.href = \'./login?referrer=\' + encodeURIComponent(location.href.split("/").slice(-1)[0]);
                }
            });
            setTimeout(pingSession, 30000);
        }
        function setSwitch(switchElement, checkedBool) {
			if((checkedBool && !switchElement.isChecked()) || (!checkedBool && switchElement.isChecked())) {
				switchElement.setPosition(true);
				switchElement.handleOnchange(true);
			}
		}
        function headerStats() {
            rURL = "./api?action=header_stats";
            $.getJSON(rURL, function(data) {
                $("#header_connections").html($.number(data.total_connections, 0));
                $("#header_users").html($.number(data.total_users, 0));
                setTimeout(headerStats, 1000);
            }).fail(function() {
                setTimeout(headerStats, 1000);
            });
        }
        ' ?0                  	;0
1474 878   FETCH_DIM_R/81            $497=     16?4                 1140:'js_navigate'  	;0
1475 878   JMPZ/43                   ?0        $497                 ?1477               	;0	>>1477
1476 879   GOTO/253                  ?0        ?423                 ?1141               	;0
1477 881   GOTO/253                  ?0        ?421                 ?1142               	;0	<<1475
1478 883   BOOL_NOT/13               #498=     16?1                 ?0                  	;0
1479 883   JMPZ/43                   ?0        #498                 ?1481               	;0	>>1481
1480 884   GOTO/253                  ?0        ?1482                ?1143               	;0
1481 886   ECHO/40                   ?0        1144:'scrollX: true,' ?0                  	;0	<<1479
1482 888   ECHO/40                   ?0        1145:'				order: [[ ' ?0                  	;0
1483 889   FETCH_STATIC_PROP_IS/176  $499=     1146:'rRequest'      1147:'XUI'          	;0
1484 889   ISSET_ISEMPTY_DIM_OBJ/115 #500=     $499                 1149:'order'        	;33554432
1485 889   JMPZ/43                   ?0        #500                 ?1493               	;0	>>1493
1486 889   INIT_FCALL_BY_NAME/59     ?0        ?0                   1150:'intval'       	;1
1487 889   FETCH_STATIC_PROP_FUNC_ARG/177 $501=     1152:'rRequest'      1153:'XUI'          	;1
1488 889   FETCH_DIM_FUNC_ARG/93     $502=     $501                 1155:'order'        	;1
1489 889   SEND_VAR_EX/66            ?80       $502                 ?1                  	;0
1490 889   DO_FCALL_BY_NAME/131      $503=     ?0                   ?0                  	;0
1491 889   QM_ASSIGN/22              #504=     $503                 ?0                  	;0
1492 889   JMP/42                    ?0        ?1494                ?0                  	;0	>>1494
1493 889   QM_ASSIGN/22              #504=     1156:0               ?0                  	;0	<<1485
1494 889   ECHO/40                   ?0        #504                 ?0                  	;0	<<1492
1495 890   GOTO/253                  ?0        ?1174                ?1157               	;0
1496 892   ECHO/40                   ?0        1158:'			window.XUI.Listings.Category = ' ?0                  	;0
1497 893   INIT_FCALL_BY_NAME/59     ?0        ?0                   1159:'intval'       	;1
1498 893   FETCH_STATIC_PROP_FUNC_ARG/177 $505=     1161:'rRequest'      1162:'XUI'          	;1
1499 893   FETCH_DIM_FUNC_ARG/93     $506=     $505                 1164:'category'     	;1
1500 893   SEND_VAR_EX/66            ?80       $506                 ?1                  	;0
1501 893   DO_FCALL_BY_NAME/131      $507=     ?0                   ?0                  	;0
1502 893   ECHO/40                   ?0        $507                 ?0                  	;0
1503 894   ECHO/40                   ?0        1165:';
			'        ?0                  	;0
1504 896   ECHO/40                   ?0        1166:'			
			XUI.Listings.Settings.init();
			XUI.Listings.Grid.init();
			XUI.Listings.Nav.init();
		});
		
		' ?0                  	;0
1505 897   GOTO/253                  ?0        ?1649                ?1167               	;0
1506 899   ECHO/40                   ?0        1168:'");
                        } else if (rType == "disable") {
                            $.toast("' ?0                  	;0
1507 900   FETCH_DIM_R/81            $508=     16?0                 1169:'device_confirmed_3'	;0
1508 900   ECHO/40                   ?0        $508                 ?0                  	;0
1509 901   ECHO/40                   ?0        1170:'");
                        } else if (rType == "convert") {
                            if (data.line_id) {
                                navigate("line?id=" + data.line_id);
                            } else {
                                $.toast("Failed to convert to user line.");
                            }
                        } else if (rType == "kill_line") {
                            $.toast("All connections for this line have been killed.");
                        } else if (rType == "reset_isp") {
                            $.toast("ISP has been reset.");
                        }
                        $("#datatable-users").DataTable().ajax.reload(null, false);
                    } else {
                        $.toast("' ?0                  	;0
1510 902   FETCH_DIM_R/81            $509=     16?0                 1171:'error_occured'	;0
1511 902   ECHO/40                   ?0        $509                 ?0                  	;0
1512 903   ECHO/40                   ?0        1172:'");
                    }
                });
            }
		}
		function getFilter() {
			return $("#mag_filter").val();
		}
		function getReseller() {
			return $("#mag_reseller").val();
		}
		function clearFilters() {
			window.rClearing = true;
			$("#mag_search").val("").trigger(\'change\');
			$(\'#mag_filter\').val("").trigger(\'change\');
			$(\'#mag_reseller\').val("").trigger(\'change\');
			$(\'#mag_show_entries\').val("' ?0                  	;0
1513 904   GOTO/253                  ?0        ?738                 ?1173               	;0
1514 906   ECHO/40                   ?0        1174:'");
                        } else if (rType == "disable") {
                            $.toast("' ?0                  	;0
1515 907   FETCH_DIM_R/81            $510=     16?0                 1175:'device_confirmed_3'	;0
1516 907   ECHO/40                   ?0        $510                 ?0                  	;0
1517 908   ECHO/40                   ?0        1176:'");
                        } else if (rType == "convert") {
                            if (data.line_id) {
                                navigate("line?id=" + data.line_id);
                            } else {
                                $.toast("Failed to convert to user line.");
                            }
                        } else if (rType == "kill_line") {
                            $.toast("All connections for this line have been killed.");
                        } else if (rType == "reset_isp") {
                            $.toast("ISP has been reset.");
                        }
                        $("#datatable-users").DataTable().ajax.reload(null, false);
                    } else {
                        $.toast("' ?0                  	;0
1518 909   FETCH_DIM_R/81            $511=     16?0                 1177:'error_occured'	;0
1519 909   ECHO/40                   ?0        $511                 ?0                  	;0
1520 910   ECHO/40                   ?0        1178:'");
                    }
                });
            }
		}
		function getFilter() {
			return $("#e2_filter").val();
		}
		function getReseller() {
			return $("#e2_reseller").val();
		}
		function clearFilters() {
			window.rClearing = true;
			$("#e2_search").val("").trigger(\'change\');
			$(\'#e2_filter\').val("").trigger(\'change\');
			$(\'#e2_reseller\').val("").trigger(\'change\');
			$(\'#e2_show_entries\').val("' ?0                  	;0
1521 911   GOTO/253                  ?0        ?1602                ?1179               	;0
1522 913   FETCH_STATIC_PROP_IS/176  $512=     1180:'rRequest'      1181:'XUI'          	;0
1523 913   ISSET_ISEMPTY_DIM_OBJ/115 #513=     $512                 1183:'order'        	;33554432
1524 913   JMPZ/43                   ?0        #513                 ?1532               	;0	>>1532
1525 913   INIT_FCALL_BY_NAME/59     ?0        ?0                   1184:'intval'       	;1
1526 913   FETCH_STATIC_PROP_FUNC_ARG/177 $514=     1186:'rRequest'      1187:'XUI'          	;1
1527 913   FETCH_DIM_FUNC_ARG/93     $515=     $514                 1189:'order'        	;1
1528 913   SEND_VAR_EX/66            ?80       $515                 ?1                  	;0
1529 913   DO_FCALL_BY_NAME/131      $516=     ?0                   ?0                  	;0
1530 913   QM_ASSIGN/22              #517=     $516                 ?0                  	;0
1531 913   JMP/42                    ?0        ?1533                ?0                  	;0	>>1533
1532 913   QM_ASSIGN/22              #517=     1190:6               ?0                  	;0	<<1524
1533 913   ECHO/40                   ?0        #517                 ?0                  	;0	<<1531
1534 914   ECHO/40                   ?0        1191:', "'           ?0                  	;0
1535 915   INIT_FCALL_BY_NAME/59     ?0        ?0                   1192:'in_array'     	;2
1536 915   INIT_FCALL_BY_NAME/59     ?0        ?0                   1194:'strtolower'   	;1
1537 915   FETCH_STATIC_PROP_FUNC_ARG/177 $518=     1196:'rRequest'      1197:'XUI'          	;1
1538 915   FETCH_DIM_FUNC_ARG/93     $519=     $518                 1199:'dir'          	;1
1539 915   SEND_VAR_EX/66            ?80       $519                 ?1                  	;0
1540 915   DO_FCALL_BY_NAME/131      $520=     ?0                   ?0                  	;0
1541 915   SEND_VAR_NO_REF_EX/50     ?80       $520                 ?1                  	;0
1542 915   SEND_VAL_EX/116           ?96       1200:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
1543 915   DO_FCALL_BY_NAME/131      $521=     ?0                   ?0                  	;0
1544 915   JMPZ/43                   ?0        $521                 ?1552               	;0	>>1552
1545 915   INIT_FCALL_BY_NAME/59     ?0        ?0                   1201:'strtolower'   	;1
1546 915   FETCH_STATIC_PROP_FUNC_ARG/177 $522=     1203:'rRequest'      1204:'XUI'          	;1
1547 915   FETCH_DIM_FUNC_ARG/93     $523=     $522                 1206:'dir'          	;1
1548 915   SEND_VAR_EX/66            ?80       $523                 ?1                  	;0
1549 915   DO_FCALL_BY_NAME/131      $524=     ?0                   ?0                  	;0
1550 915   QM_ASSIGN/22              #525=     $524                 ?0                  	;0
1551 915   JMP/42                    ?0        ?1553                ?0                  	;0	>>1553
1552 915   QM_ASSIGN/22              #525=     1207:'desc'          ?0                  	;0	<<1544
1553 915   ECHO/40                   ?0        #525                 ?0                  	;0	<<1551
1554 916   ECHO/40                   ?0        1208:'" ]],
                pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
			});
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
			$("#datatable-activity").css("width", "100%");
			$(\'#act_search\').keyup(function(){
				if (!window.rClearing) {
					doSearch($(this).val());
				}
			})
			$(\'#act_show_entries\').change(function(){
				if (!window.rClearing) {
					rTable.page.len($(this).val()).draw();
				}
			})
			$(\'#act_filter\').change(function(){
				if (!window.rClearing) {
					$("#datatable-activity").DataTable().ajax.reload( null, false );
				}
			})
			' ?0                  	;0
1555 917   FETCH_STATIC_PROP_IS/176  $526=     1209:'rRequest'      1210:'XUI'          	;0
1556 917   ISSET_ISEMPTY_DIM_OBJ/115 #527=     $526                 1212:'range'        	;33554432
1557 917   BOOL_NOT/13               #528=     #527                 ?0                  	;0
1558 917   JMPZ/43                   ?0        #528                 ?1560               	;0	>>1560
1559 918   GOTO/253                  ?0        ?537                 ?1213               	;0
1560 920   GOTO/253                  ?0        ?524                 ?1214               	;0	<<1558
1561 922   ECHO/40                   ?0        1215:'").trigger(\'change\');
			window.rClearing = false;
			$(\'#datatable-streampage\').DataTable().search($("#stream_search").val());
			$(\'#datatable-streampage\').DataTable().page.len($(\'#stream_show_entries\').val());
			$("#datatable-streampage").DataTable().page(0).draw(\'page\');
			$("#datatable-streampage").DataTable().ajax.reload( null, false );
			delParams(["search", "category", "page", "entries"]);
			checkClear();
		}
		function checkClear() {
			if (!hasParams(["search", "category"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
		function refreshTable() {
			$("#datatable-streampage").DataTable().ajax.reload( null, false );
		}
        var rSearch;
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
			var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
1562 923   INIT_FCALL_BY_NAME/59     ?0        ?0                   1216:'intval'       	;1
1563 923   FETCH_DIM_FUNC_ARG/93     $529=     16?4                 1218:'default_entries'	;1
1564 923   SEND_VAR_EX/66            ?80       $529                 ?1                  	;0
1565 923   DO_FCALL_BY_NAME/131      $530=     ?0                   ?0                  	;0
1566 923   ECHO/40                   ?0        $530                 ?0                  	;0
1567 924   ECHO/40                   ?0        1219:'; }
			var rTable = $("#datatable-streampage").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>"
					}
				},
				drawCallback: function() {                    bindHref(); refreshTooltips();
                    if ($("#datatable-streampage").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-streampage").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-streampage").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
				},
				createdRow: function(row, data, index) {
					$(row).addClass(\'stream-\' + data[0]);
				},
				responsive: false,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "streams",
						d.category = getCategory();
                        d.created = true;
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [0,1,4,5]},
					' ?0                  	;0
1568 925   FETCH_STATIC_PROP_R/173   $531=     1220:'rSettings'     1221:'XUI'          	;0
1569 925   FETCH_DIM_R/81            $532=     $531                 1223:'redis_handler'	;0
1570 925   JMPZ/43                   ?0        $532                 ?1572               	;0	>>1572
1571 926   GOTO/253                  ?0        ?1097                ?1224               	;0
1572 928   ECHO/40                   ?0        1225:'					{"orderable": false, "targets": [1,5]},
					' ?0                  	;0	<<1570
1573 929   GOTO/253                  ?0        ?1096                ?1226               	;0
1574 931   ECHO/40                   ?0        1227:'				'          ?0                  	;0
1575 932   FETCH_STATIC_PROP_R/173   $533=     1228:'rSettings'     1229:'XUI'          	;0
1576 932   FETCH_DIM_R/81            $534=     $533                 1231:'redis_handler'	;0
1577 932   JMPZ/43                   ?0        $534                 ?1579               	;0	>>1579
1578 933   GOTO/253                  ?0        ?1678                ?1232               	;0
1579 935   ECHO/40                   ?0        1233:'				order: [[ ' ?0                  	;0	<<1577
1580 936   FETCH_STATIC_PROP_IS/176  $535=     1234:'rRequest'      1235:'XUI'          	;0
1581 936   ISSET_ISEMPTY_DIM_OBJ/115 #536=     $535                 1237:'order'        	;33554432
1582 936   JMPZ/43                   ?0        #536                 ?1590               	;0	>>1590
1583 936   INIT_FCALL_BY_NAME/59     ?0        ?0                   1238:'intval'       	;1
1584 936   FETCH_STATIC_PROP_FUNC_ARG/177 $537=     1240:'rRequest'      1241:'XUI'          	;1
1585 936   FETCH_DIM_FUNC_ARG/93     $538=     $537                 1243:'order'        	;1
1586 936   SEND_VAR_EX/66            ?80       $538                 ?1                  	;0
1587 936   DO_FCALL_BY_NAME/131      $539=     ?0                   ?0                  	;0
1588 936   QM_ASSIGN/22              #540=     $539                 ?0                  	;0
1589 936   JMP/42                    ?0        ?1591                ?0                  	;0	>>1591
1590 936   QM_ASSIGN/22              #540=     1244:4               ?0                  	;0	<<1582
1591 936   ECHO/40                   ?0        #540                 ?0                  	;0	<<1589
1592 937   ECHO/40                   ?0        1245:', "'           ?0                  	;0
1593 938   GOTO/253                  ?0        ?1657                ?1246               	;0
1594 941   GOTO/253                  ?0        ?1759                ?1247               	;0
1595 944   ECHO/40                   ?0        1248:', rData.bouquets[rIndex].bouquet_name, rData.bouquets[rIndex].bouquet_channels.length, rData.bouquets[rIndex].bouquet_movies.length, rData.bouquets[rIndex].bouquet_series.length, rData.bouquets[rIndex].bouquet_radios.length]);
                        });
                        if (rData.data.compatible) {
                            $("#package_warning").hide();
                        } else {
                            $("#package_warning").show();
                        }
                        ' ?0                  	;0
1596 945   FETCH_DIM_R/81            $541=     16?3                 1249:'allow_restrictions'	;0
1597 945   BOOL_NOT/13               #542=     $541                 ?0                  	;0
1598 945   JMPZ/43                   ?0        #542                 ?1600               	;0	>>1600
1599 946   GOTO/253                  ?0        ?1601                ?1250               	;0
1600 948   ECHO/40                   ?0        1251:'						if (rData.data.is_isplock == 1) {
							setSwitch(window.rSwitches["is_isplock"], true);
						} else {
							setSwitch(window.rSwitches["is_isplock"], false);
						}
                        ' ?0                  	;0	<<1598
1601 950   GOTO/253                  ?0        ?1115                ?1252               	;0
1602 952   INIT_FCALL_BY_NAME/59     ?0        ?0                   1253:'intval'       	;1
1603 952   FETCH_DIM_FUNC_ARG/93     $543=     16?4                 1255:'default_entries'	;1
1604 952   SEND_VAR_EX/66            ?80       $543                 ?1                  	;0
1605 952   DO_FCALL_BY_NAME/131      $544=     ?0                   ?0                  	;0
1606 952   JMP_SET/152               #545=     $544                 ?1608               	;0
1607 952   QM_ASSIGN/22              #545=     1256:10              ?0                  	;0
1608 952   ECHO/40                   ?0        #545                 ?0                  	;0
1609 953   ECHO/40                   ?0        1257:'").trigger(\'change\');
			window.rClearing = false;
			$(\'#datatable-users\').DataTable().search($("#e2_search").val());
			$(\'#datatable-users\').DataTable().page.len($(\'#e2_show_entries\').val());
			$("#datatable-users").DataTable().page(0).draw(\'page\');
			$("#datatable-users").DataTable().ajax.reload( null, false );
            delParams(["search", "filter", "owner", "page", "entries"]);
			checkClear();
		}
        function checkClear() {
			if (!hasParams(["search", "filter", "owner"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
		function refreshTable() {
			$("#datatable-users").DataTable().ajax.reload( null, false );
		}
        var rSearch;
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
			var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
1610 954   INIT_FCALL_BY_NAME/59     ?0        ?0                   1258:'intval'       	;1
1611 954   FETCH_DIM_FUNC_ARG/93     $546=     16?4                 1260:'default_entries'	;1
1612 954   SEND_VAR_EX/66            ?80       $546                 ?1                  	;0
1613 954   DO_FCALL_BY_NAME/131      $547=     ?0                   ?0                  	;0
1614 954   ECHO/40                   ?0        $547                 ?0                  	;0
1615 955   ECHO/40                   ?0        1261:'; }
			var rTable = $("#datatable-users").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>",
					},
					infoFiltered: ""
				},
				drawCallback: function() {
					bindHref(); refreshTooltips();
                    if ($("#datatable-users").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-users").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-users").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
				},
				createdRow: function(row, data, index) {
					$(row).addClass(\'user-\' + data[0]);
				},
				responsive: false,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "enigmas",
						d.filter = getFilter(),
						d.reseller = getReseller()
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [0,2,3,5,6,7,8,9]},
					' ?0                  	;0
1616 956   FETCH_STATIC_PROP_R/173   $548=     1262:'rSettings'     1263:'XUI'          	;0
1617 956   FETCH_DIM_R/81            $549=     $548                 1265:'redis_handler'	;0
1618 956   JMPZ/43                   ?0        $549                 ?1620               	;0	>>1620
1619 957   GOTO/253                  ?0        ?1366                ?1266               	;0
1620 959   GOTO/253                  ?0        ?1364                ?1267               	;0	<<1618
1621 961   ECHO/40                   ?0        1268:'; }
			var rTable = $("#datatable-users").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>"
					}
				},
				drawCallback: function() {					bindHref(); refreshTooltips();
                    if ($("#datatable-users").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-users").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-users").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
				},
				createdRow: function(row, data, index) {
					$(row).addClass(\'user-\' + data[0]);
				},
				responsive: false,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "reg_users",
						d.filter = getFilter(),
						d.reseller = getReseller()
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [0,3,4,5,6,7,8]},
				],
                ' ?0                  	;0
1622 962   BOOL_NOT/13               #550=     16?1                 ?0                  	;0
1623 962   JMPZ/43                   ?0        #550                 ?1625               	;0	>>1625
1624 963   GOTO/253                  ?0        ?1626                ?1269               	;0
1625 965   ECHO/40                   ?0        1270:'scrollX: true,' ?0                  	;0	<<1623
1626 967   ECHO/40                   ?0        1271:'				order: [[ ' ?0                  	;0
1627 968   GOTO/253                  ?0        ?189                 ?1272               	;0
1628 970   ECHO/40                   ?0        1273:'...\',
			  width: "100%"
			});
			$("#message_submit").click(function() {
				rArray = {"id": $(\'.messageModal\').data(\'id\'), "type": $("#message_type").val()};
				if (rArray.type) {
					if (rArray.type == "send_msg") {
						rArray.message = $("#message").val();
						if ($("#reboot_portal").is(":checked")) {
							rArray.reboot_portal = 1;
						} else {
							rArray.reboot_portal = 0;
						}
					} else if (rArray.type == "play_channel") {
						rArray.channel = $("#selected_channel").val();
						if (!rArray.channel) {
							rArray.channel = "";
						}
					}
					if ((rArray.type == "send_msg") && (rArray.message.length == 0)) {
						$.toast("' ?0                  	;0
1629 971   FETCH_DIM_R/81            $551=     16?0                 1274:'mag_toast_1'  	;0
1630 971   ECHO/40                   ?0        $551                 ?0                  	;0
1631 972   ECHO/40                   ?0        1275:'.");
					} else if ((rArray.type == "play_channel") && (rArray.channel.length == 0)) {
						$.toast("' ?0                  	;0
1632 973   FETCH_DIM_R/81            $552=     16?0                 1276:'mag_toast_2'  	;0
1633 973   ECHO/40                   ?0        $552                 ?0                  	;0
1634 974   ECHO/40                   ?0        1277:'.");
					} else {
						$(\'.messageModal\').modal(\'hide\');
						$.getJSON("./api?action=send_event&data=" + encodeURIComponent(JSON.stringify(rArray)), function(data) {
							if (data.result === true) {
								$.toast("' ?0                  	;0
1635 975   GOTO/253                  ?0        ?884                 ?1278               	;0
1636 977   ECHO/40                   ?0        1279:'/playlist/" + $(\'.downloadModal\').data(\'username\') + "/" + $(\'.downloadModal\').data(\'password\') + "/" + decodeURIComponent($(\'.downloadModal select\').val());
                    if ($("#output_type").val().length > 0) {
                        if (rText.indexOf(\'?output=\') != -1) {
                            rText = rText + "&key=" + $("#output_type").val().join(",");
                        } else {
                            rText = rText + "?key=" + $("#output_type").val().join(",");
                        }
                    }
                    if ($("#download_type").find(\':selected\').data(\'text\')) {
                        rText = $("#download_type").find(\':selected\').data(\'text\').replace("{DEVICE_LINK}", \'"\' + rText + \'"\');
                        $("#download_button").attr("disabled", true);
                    } else {
                        $("#download_button").attr("disabled", false);
                    }
                    $("#download_url").val(rText);
                } else {
                    $("#download_url").val("");
                }
            });
			$(\'select\').select2({width: \'100%\'});
            var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
1637 978   INIT_FCALL_BY_NAME/59     ?0        ?0                   1280:'intval'       	;1
1638 978   FETCH_DIM_FUNC_ARG/93     $553=     16?4                 1282:'default_entries'	;1
1639 978   SEND_VAR_EX/66            ?80       $553                 ?1                  	;0
1640 978   DO_FCALL_BY_NAME/131      $554=     ?0                   ?0                  	;0
1641 978   ECHO/40                   ?0        $554                 ?0                  	;0
1642 979   ECHO/40                   ?0        1283:'; }
			var rTable = $("#datatable-users").DataTable({
				language: {
					paginate: {
						previous: "<i class=\'mdi mdi-chevron-left\'>",
						next: "<i class=\'mdi mdi-chevron-right\'>",
					},
					infoFiltered: ""
				},
				drawCallback: function() {					bindHref(); refreshTooltips();
                    if ($("#datatable-users").DataTable().page.info().page > 0) {
                        setParam("page", $("#datatable-users").DataTable().page.info().page+1);
                    } else {
                        delParam("page");
                    }
                    var rOrder = $("#datatable-users").DataTable().order()[0];
                    setParam("order", rOrder[0]); setParam("dir", rOrder[1]);
				},
				createdRow: function(row, data, index) {
					$(row).addClass(\'user-\' + data[0]);
				},
				responsive: false,
				processing: true,
				serverSide: true,
                searchDelay: 250,
				ajax: {
					url: "./table",
					"data": function(d) {
						d.id = "lines";
						d.filter = getFilter();
						d.reseller = getReseller();
					}
				},
				columnDefs: [
					{"className": "dt-center", "targets": [0,4,5,6,7,8,9,10,11]},
					' ?0                  	;0
1643 980   FETCH_STATIC_PROP_R/173   $555=     1284:'rSettings'     1285:'XUI'          	;0
1644 980   FETCH_DIM_R/81            $556=     $555                 1287:'redis_handler'	;0
1645 980   JMPZ/43                   ?0        $556                 ?1647               	;0	>>1647
1646 981   GOTO/253                  ?0        ?892                 ?1288               	;0
1647 983   ECHO/40                   ?0        1289:'					{"orderable": false, "targets": [11]}
					' ?0                  	;0	<<1645
1648 984   GOTO/253                  ?0        ?891                 ?1290               	;0
1649 987   GOTO/253                  ?0        ?760                 ?1291               	;0
1650 989   ECHO/40                   ?0        1292:'        
		var rClearing = false;

		function refreshTable() {
			$("#datatable-activity").DataTable().ajax.reload( null, false );
		}
		function getStream() {
			return $("#act_stream").val();
		}
		function getLine() {
			return $("#act_line").val();
		}
		function getUser() {
			return $("#act_user").val();
		}
        function getRange() {
			return $("#act_range").val();
		}
		function clearFilters() {
			window.rClearing = true;
            $("#act_search").val("").trigger(\'change\');
			$("#act_stream").val("").trigger(\'change\');
			$(\'#act_line\').val("").trigger(\'change\');
            $(\'#act_user\').val("").trigger(\'change\');
			$(\'#act_range\').val("").trigger(\'change\');
			window.rClearing = false;
			$(\'#datatable-activity\').DataTable().search($("#act_search").val());
			$(\'#datatable-activity\').DataTable().page.len($(\'#act_show_entries\').val());
			$("#datatable-activity").DataTable().page(0).draw(\'page\');
			$("#datatable-activity").DataTable().ajax.reload( null, false );
            delParams(["search", "stream", "user", "line", "range", "page", "entries"]);
			checkClear();
		}
        function checkClear() {
			if (!hasParams(["search", "stream", "user", "line", "range"])) {
				$("#clearFilters").prop("disabled", true);
			} else {
				$("#clearFilters").prop("disabled", false);
			}
		}
        var rSearch;
		$(document).ready(function() {
			$(\'select\').select2({width: \'100%\'});
			$(\'#act_range\').daterangepicker({
				singleDatePicker: false,
				showDropdowns: true,
				locale: {
					format: \'YYYY-MM-DD\'
				},
				autoUpdateInput: false
			}).val("");
			$(\'#act_range\').on(\'apply.daterangepicker\', function(ev, picker) {
				$(this).val(picker.startDate.format(\'YYYY-MM-DD\') + \' - \' + picker.endDate.format(\'YYYY-MM-DD\'));
				if (!window.rClearing) {
                    if ($("#act_range").val()) {
						setParam("range", $("#act_range").val());
					} else {
						delParam("range");
					}
					checkClear();
					$("#datatable-activity").DataTable().ajax.reload( null, false );
				}
			});
			$(\'#act_range\').on(\'cancel.daterangepicker\', function(ev, picker) {
				$(this).val(\'\');
				if (!window.rClearing) {
                    if ($("#act_range").val()) {
						setParam("range", $("#act_range").val());
					} else {
						delParam("range");
					}
					checkClear();
					$("#datatable-activity").DataTable().ajax.reload( null, false );
				}
			});
			$(\'#act_range\').on(\'change\', function() {
				if (!window.rClearing) {
                    if ($("#act_range").val()) {
						setParam("range", $("#act_range").val());
					} else {
						delParam("range");
					}
					checkClear();
					$("#datatable-activity").DataTable().ajax.reload( null, false );
				}
			});
            $(\'#act_line\').select2({
			  ajax: {
				url: \'./api\',
				dataType: \'json\',
				data: function (params) {
				  return {
					search: params.term,
					action: \'userlist\',
					page: params.page
				  };
				},
				processResults: function (data, params) {
				  params.page = params.page || 1;
				  return {
					results: data.items,
					pagination: {
						more: (params.page * 100) < data.total_count
					}
				  };
				},
				cache: true,
				width: "100%"
			  },
			  placeholder: \'All Lines\'
			});
            $(\'#act_stream\').select2({
			  ajax: {
				url: \'./api\',
				dataType: \'json\',
				data: function (params) {
				  return {
					search: params.term,
					action: \'streamlist\',
					page: params.page
				  };
				},
				processResults: function (data, params) {
				  params.page = params.page || 1;
				  return {
					results: data.items,
					pagination: {
						more: (params.page * 100) < data.total_count
					}
				  };
				},
				cache: true,
				width: "100%"
			  },
			  placeholder: \'All Streams\'
			});
            var rPage = getParam("page");
            if (!rPage) { rPage = 1; }
            var rEntries = getParam("entries");
            if (!rEntries) { rEntries = ' ?0                  	;0
1651 990   INIT_FCALL_BY_NAME/59     ?0        ?0                   1293:'intval'       	;1
1652 990   FETCH_DIM_FUNC_ARG/93     $557=     16?4                 1295:'default_entries'	;1
1653 990   SEND_VAR_EX/66            ?80       $557                 ?1                  	;0
1654 990   DO_FCALL_BY_NAME/131      $558=     ?0                   ?0                  	;0
1655 990   ECHO/40                   ?0        $558                 ?0                  	;0
1656 991   GOTO/253                  ?0        ?459                 ?1296               	;0
1657 993   INIT_FCALL_BY_NAME/59     ?0        ?0                   1297:'in_array'     	;2
1658 993   INIT_FCALL_BY_NAME/59     ?0        ?0                   1299:'strtolower'   	;1
1659 993   FETCH_STATIC_PROP_FUNC_ARG/177 $559=     1301:'rRequest'      1302:'XUI'          	;1
1660 993   FETCH_DIM_FUNC_ARG/93     $560=     $559                 1304:'dir'          	;1
1661 993   SEND_VAR_EX/66            ?80       $560                 ?1                  	;0
1662 993   DO_FCALL_BY_NAME/131      $561=     ?0                   ?0                  	;0
1663 993   SEND_VAR_NO_REF_EX/50     ?80       $561                 ?1                  	;0
1664 993   SEND_VAL_EX/116           ?96       1305:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
1665 993   DO_FCALL_BY_NAME/131      $562=     ?0                   ?0                  	;0
1666 993   JMPZ/43                   ?0        $562                 ?1674               	;0	>>1674
1667 993   INIT_FCALL_BY_NAME/59     ?0        ?0                   1306:'strtolower'   	;1
1668 993   FETCH_STATIC_PROP_FUNC_ARG/177 $563=     1308:'rRequest'      1309:'XUI'          	;1
1669 993   FETCH_DIM_FUNC_ARG/93     $564=     $563                 1311:'dir'          	;1
1670 993   SEND_VAR_EX/66            ?80       $564                 ?1                  	;0
1671 993   DO_FCALL_BY_NAME/131      $565=     ?0                   ?0                  	;0
1672 993   QM_ASSIGN/22              #566=     $565                 ?0                  	;0
1673 993   JMP/42                    ?0        ?1675                ?0                  	;0	>>1675
1674 993   QM_ASSIGN/22              #566=     1312:'desc'          ?0                  	;0	<<1666
1675 993   ECHO/40                   ?0        #566                 ?0                  	;0	<<1673
1676 994   ECHO/40                   ?0        1313:'" ]],
				'   ?0                  	;0
1677 995   GOTO/253                  ?0        ?499                 ?1314               	;0
1678 997   ECHO/40                   ?0        1315:'				order: [[ ' ?0                  	;0
1679 998   GOTO/253                  ?0        ?466                 ?1316               	;0
1680 1000  ECHO/40                   ?0        1317:'" ]],
				'   ?0                  	;0
1681 1002  ECHO/40                   ?0        1318:'				pageLength: parseInt(rEntries),
				lengthMenu: [10, 25, 50, 250, 500, 1000],
                displayStart: (parseInt(rPage)-1) * parseInt(rEntries)
			});
            function doSearch(rValue) {
                clearTimeout(window.rSearch); window.rSearch = setTimeout(function(){ rTable.search(rValue).draw(); }, 500);
            }
			$("#datatable-streampage").css("width", "100%");
			$(\'#stream_search\').keyup(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#stream_search").val()) {
						setParam("search", $("#stream_search").val());
					} else {
						delParam("search");
					}
					checkClear();
					doSearch($(this).val());
				}
			});
			$(\'#stream_show_entries\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
                    if ($("#stream_show_entries").val()) {
						setParam("entries", $("#stream_show_entries").val());
					} else {
						delParam("entries");
					}
					checkClear();
					rTable.page.len($(this).val()).draw();
				}
			});
			$(\'#stream_category_id\').change(function(){
				if (!window.rClearing) {
                    delParam("page");
                    rTable.page(0);
					if ($("#stream_category_id").val()) {
						setParam("category", $("#stream_category_id").val());
					} else {
						delParam("category");
					}
					checkClear();
					rTable.ajax.reload( null, false );
				}
			});
			if ($(\'#stream_search\').val()) {
				rTable.search($(\'#stream_search\').val()).draw();
			}
			checkClear();
		});
        
        ' ?0                  	;0
1682 1004  GOTO/253                  ?0        ?222                 ?1319               	;0
1683 1005  GOTO/253                  ?0        ?679                 ?1320               	;0
1684 1008  ECHO/40                   ?0        1321:'					{"orderable": false, "targets": [1,4,5]},
					' ?0                  	;0
1685 1010  ECHO/40                   ?0        1322:'				],
                ' ?0                  	;0
1686 1011  BOOL_NOT/13               #567=     16?1                 ?0                  	;0
1687 1011  JMPZ/43                   ?0        #567                 ?1689               	;0	>>1689
1688 1012  GOTO/253                  ?0        ?870                 ?1323               	;0
1689 1014  GOTO/253                  ?0        ?869                 ?1324               	;0	<<1687
1690 1016  INIT_FCALL_BY_NAME/59     ?0        ?0                   1325:'count'        	;1	<<0
1691 1016  INIT_FCALL_BY_NAME/59     ?0        ?0                   1327:'get_included_files'	;0
1692 1016  DO_FCALL_BY_NAME/131      $568=     ?0                   ?0                  	;0
1693 1016  SEND_VAR_NO_REF_EX/50     ?80       $568                 ?1                  	;0
1694 1016  DO_FCALL_BY_NAME/131      $569=     ?0                   ?0                  	;0
1695 1016  IS_EQUAL/17               #570=     $569                 1329:1              	;0
1696 1016  BOOL_NOT/13               #571=     #570                 ?0                  	;0
1697 1016  JMPZ/43                   ?0        #571                 ?1699               	;0	>>1699
1698 1017  GOTO/253                  ?0        ?1700                ?1330               	;0
1699 1019  EXIT/79                   ?0        ?0                   ?0                  	;0	<<1697
1700 1021  INIT_FCALL_BY_NAME/59     ?0        ?0                   1331:'d60f670923adbF13'	;0
1701 1021  DO_FCALL_BY_NAME/131      $572=     ?0                   ?0                  	;0
1702 1021  ASSIGN/38                 ?557      16?11                $572                	;0
1703 1022  INCLUDE_OR_EVAL/73        ?558      1333:'modals.php'    ?0                  	;2
1704 1023  GOTO/253                  ?0        ?304                 ?1334               	;0
1705 1025  FETCH_STATIC_PROP_IS/176  $575=     1335:'rRequest'      1336:'XUI'          	;0
1706 1025  ISSET_ISEMPTY_DIM_OBJ/115 #576=     $575                 1338:'order'        	;33554432
1707 1025  JMPZ/43                   ?0        #576                 ?1715               	;0	>>1715
1708 1025  INIT_FCALL_BY_NAME/59     ?0        ?0                   1339:'intval'       	;1
1709 1025  FETCH_STATIC_PROP_FUNC_ARG/177 $577=     1341:'rRequest'      1342:'XUI'          	;1
1710 1025  FETCH_DIM_FUNC_ARG/93     $578=     $577                 1344:'order'        	;1
1711 1025  SEND_VAR_EX/66            ?80       $578                 ?1                  	;0
1712 1025  DO_FCALL_BY_NAME/131      $579=     ?0                   ?0                  	;0
1713 1025  QM_ASSIGN/22              #580=     $579                 ?0                  	;0
1714 1025  JMP/42                    ?0        ?1716                ?0                  	;0	>>1716
1715 1025  QM_ASSIGN/22              #580=     1345:2               ?0                  	;0	<<1707
1716 1025  ECHO/40                   ?0        #580                 ?0                  	;0	<<1714
1717 1026  ECHO/40                   ?0        1346:', "'           ?0                  	;0
1718 1027  INIT_FCALL_BY_NAME/59     ?0        ?0                   1347:'in_array'     	;2
1719 1027  INIT_FCALL_BY_NAME/59     ?0        ?0                   1349:'strtolower'   	;1
1720 1027  FETCH_STATIC_PROP_FUNC_ARG/177 $581=     1351:'rRequest'      1352:'XUI'          	;1
1721 1027  FETCH_DIM_FUNC_ARG/93     $582=     $581                 1354:'dir'          	;1
1722 1027  SEND_VAR_EX/66            ?80       $582                 ?1                  	;0
1723 1027  DO_FCALL_BY_NAME/131      $583=     ?0                   ?0                  	;0
1724 1027  SEND_VAR_NO_REF_EX/50     ?80       $583                 ?1                  	;0
1725 1027  SEND_VAL_EX/116           ?96       1355:array (
  0 => 'asc',
  1 => 'desc',
) ?2                  	;0
1726 1027  DO_FCALL_BY_NAME/131      $584=     ?0                   ?0                  	;0
1727 1027  JMPZ/43                   ?0        $584                 ?1735               	;0	>>1735
1728 1027  INIT_FCALL_BY_NAME/59     ?0        ?0                   1356:'strtolower'   	;1
1729 1027  FETCH_STATIC_PROP_FUNC_ARG/177 $585=     1358:'rRequest'      1359:'XUI'          	;1
1730 1027  FETCH_DIM_FUNC_ARG/93     $586=     $585                 1361:'dir'          	;1
1731 1027  SEND_VAR_EX/66            ?80       $586                 ?1                  	;0
1732 1027  DO_FCALL_BY_NAME/131      $587=     ?0                   ?0                  	;0
1733 1027  QM_ASSIGN/22              #588=     $587                 ?0                  	;0
1734 1027  JMP/42                    ?0        ?1736                ?0                  	;0	>>1736
1735 1027  QM_ASSIGN/22              #588=     1362:'asc'           ?0                  	;0	<<1727
1736 1027  ECHO/40                   ?0        #588                 ?0                  	;0	<<1734
1737 1028  ECHO/40                   ?0        1363:'" ]],
				'   ?0                  	;0
1738 1030  GOTO/253                  ?0        ?247                 ?1364               	;0
1739 1032  ECHO/40                   ?0        1365:'				'          ?0                  	;0
1740 1033  FETCH_STATIC_PROP_R/173   $589=     1366:'rSettings'     1367:'XUI'          	;0
1741 1033  FETCH_DIM_R/81            $590=     $589                 1369:'redis_handler'	;0
1742 1033  JMPZ/43                   ?0        $590                 ?1744               	;0	>>1744
1743 1034  GOTO/253                  ?0        ?1154                ?1370               	;0
1744 1036  ECHO/40                   ?0        1371:'				order: [[ ' ?0                  	;0	<<1742
1745 1037  FETCH_STATIC_PROP_IS/176  $591=     1372:'rRequest'      1373:'XUI'          	;0
1746 1037  ISSET_ISEMPTY_DIM_OBJ/115 #592=     $591                 1375:'order'        	;33554432
1747 1037  JMPZ/43                   ?0        #592                 ?1755               	;0	>>1755
1748 1037  INIT_FCALL_BY_NAME/59     ?0        ?0                   1376:'intval'       	;1
1749 1037  FETCH_STATIC_PROP_FUNC_ARG/177 $593=     1378:'rRequest'      1379:'XUI'          	;1
1750 1037  FETCH_DIM_FUNC_ARG/93     $594=     $593                 1381:'order'        	;1
1751 1037  SEND_VAR_EX/66            ?80       $594                 ?1                  	;0
1752 1037  DO_FCALL_BY_NAME/131      $595=     ?0                   ?0                  	;0
1753 1037  QM_ASSIGN/22              #596=     $595                 ?0                  	;0
1754 1037  JMP/42                    ?0        ?1756                ?0                  	;0	>>1756
1755 1037  QM_ASSIGN/22              #596=     1382:4               ?0                  	;0	<<1747
1756 1037  ECHO/40                   ?0        #596                 ?0                  	;0	<<1754
1757 1038  ECHO/40                   ?0        1383:', "'           ?0                  	;0
1758 1039  GOTO/253                  ?0        ?1133                ?1384               	;0
1759 1041  ECHO/40                   ?0        1385:'        </script>
		<script src="assets/js/listings.js"></script>
    </body>
</html>' ?0                  	;0
1760 1042  NOP/0                     ?0        1386:1               ?0                  	;4294967295
*/

?>
<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?22                  ?0                  	;0	>>22
1   5    ECHO/40                   ?0        1:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<div id="collapse_filters" class="' ?0                  	;0
2   6    BOOL_NOT/13               #8=       16?0                 ?0                  	;0
3   6    JMPZ/43                   ?0        #8                   ?5                  	;0	>>5
4   7    GOTO/253                  ?0        ?6                   ?2                  	;0
5   9    ECHO/40                   ?0        3:'collapse'         ?0                  	;0	<<3
6   11   ECHO/40                   ?0        4:' form-group row mb-4">
							<div class="col-md-3">
								<input type="text" class="form-control" id="log_search" value="" placeholder="' ?0                  	;0
7   12   GOTO/253                  ?0        ?46                  ?5                  	;0
8   14   ECHO/40                   ?0        6:'</label>
							<div class="col-md-2">
								<input type="text" class="form-control text-center date" id="range" name="range" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="' ?0                  	;0
9   15   FETCH_DIM_R/81            $9=       16?1                 7:'all_dates'       	;0
10  15   ECHO/40                   ?0        $9                   ?0                  	;0
11  16   ECHO/40                   ?0        8:'">
							</div>
							<label class="col-md-1 col-form-label text-center" for="show_entries">' ?0                  	;0
12  17   FETCH_DIM_R/81            $10=      16?1                 9:'show'            	;0
13  17   ECHO/40                   ?0        $10                  ?0                  	;0
14  18   ECHO/40                   ?0        10:'</label>
							<div class="col-md-1">
								<select id="show_entries" class="form-control" data-toggle="select2">
									' ?0                  	;0
15  19   GOTO/253                  ?0        ?55                  ?11                 	;0
16  22   ECHO/40                   ?0        12:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
17  23   INCLUDE_OR_EVAL/73        ?3        13:'topbar.php'      ?0                  	;2
18  24   ECHO/40                   ?0        14:'					</div>
					<h4 class="page-title">' ?0                  	;0
19  25   FETCH_DIM_R/81            $12=      16?1                 15:'client_logs'    	;0
20  25   ECHO/40                   ?0        $12                  ?0                  	;0
21  26   GOTO/253                  ?0        ?1                   ?16                 	;0
22  28   INCLUDE_OR_EVAL/73        ?5        17:'session.php'     ?0                  	;2	<<0
23  29   INCLUDE_OR_EVAL/73        ?6        18:'functions.php'   ?0                  	;2
24  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'e6D500E19634d513'	;0
25  30   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
26  30   JMPZ/43                   ?0        $15                  ?28                 	;0	>>28
27  31   GOTO/253                  ?0        ?30                  ?21                 	;0
28  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'E72f42A93714bA87'	;0	<<26
29  33   DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
30  35   GOTO/253                  ?0        ?81                  ?24                 	;0
31  37   ECHO/40                   ?0        25:'</option>
									' ?0                  	;0
32  38   FE_RESET_R/77             $17=      16?2                 ?41                 	;0
33  38   FE_FETCH_R/78             #18=      $17                  16?3                	;41	>>41	<<40
34  38   ASSIGN/38                 ?11       16?4                 #18                 	;0
35  39   ECHO/40                   ?0        26:'									<option value="' ?0                  	;0
36  40   ECHO/40                   ?0        16?4                 ?0                  	;0
37  41   ECHO/40                   ?0        27:'">'              ?0                  	;0
38  42   ECHO/40                   ?0        16?3                 ?0                  	;0
39  43   ECHO/40                   ?0        28:'</option>
									' ?0                  	;0
40  44   JMP/42                    ?0        ?33                  ?0                  	;0	>>33
41  44   FE_FREE/127               ?0        $17                  ?0                  	;0	<<32
42  47   ECHO/40                   ?0        29:'								</select>
							</div>
							<label class="col-md-1 col-form-label text-center" for="range">' ?0                  	;0
43  48   FETCH_DIM_R/81            $20=      16?1                 30:'dates'          	;0
44  48   ECHO/40                   ?0        $20                  ?0                  	;0
45  49   GOTO/253                  ?0        ?8                   ?31                 	;0
46  51   FETCH_DIM_R/81            $21=      16?1                 32:'search_logs'    	;0
47  51   ECHO/40                   ?0        $21                  ?0                  	;0
48  52   ECHO/40                   ?0        33:'...">
							</div>
							<label class="col-md-1 col-form-label text-center" for="filter">' ?0                  	;0
49  53   FETCH_DIM_R/81            $22=      16?1                 34:'reason'         	;0
50  53   ECHO/40                   ?0        $22                  ?0                  	;0
51  54   ECHO/40                   ?0        35:'</label>
							<div class="col-md-3">
								<select id="filter" class="form-control" data-toggle="select2">
									<option value="" selected>' ?0                  	;0
52  55   FETCH_DIM_R/81            $23=      16?1                 36:'all_reasons'    	;0
53  55   ECHO/40                   ?0        $23                  ?0                  	;0
54  56   GOTO/253                  ?0        ?31                  ?37                 	;0
55  58   FE_RESET_R/77             $24=      38:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?71                 	;0
56  58   FE_FETCH_R/78             ?0        $24                  16?5                	;71	>>71	<<70
57  59   ECHO/40                   ?0        39:'									<option' ?0                  	;0
58  60   FETCH_DIM_R/81            $25=      16?6                 40:'default_entries'	;0
59  60   IS_EQUAL/17               #26=      $25                  16?5                	;0
60  60   BOOL_NOT/13               #27=      #26                  ?0                  	;0
61  60   JMPZ/43                   ?0        #27                  ?64                 	;0	>>64
62  61   NOP/0                     ?0        ?0                   ?0                  	;1
63  61   GOTO/253                  ?0        ?65                  ?41                 	;0
64  63   ECHO/40                   ?0        42:' selected'       ?0                  	;0	<<61
65  65   ECHO/40                   ?0        43:' value="'        ?0                  	;0
66  66   ECHO/40                   ?0        16?5                 ?0                  	;0
67  67   ECHO/40                   ?0        44:'">'              ?0                  	;0
68  68   ECHO/40                   ?0        16?5                 ?0                  	;0
69  69   ECHO/40                   ?0        45:'</option>
									' ?0                  	;0
70  70   JMP/42                    ?0        ?56                  ?0                  	;0	>>56
71  70   FE_FREE/127               ?0        $24                  ?0                  	;0	<<55
72  73   ECHO/40                   ?0        46:'								</select>
							</div>
						</div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
73  74   FETCH_DIM_R/81            $28=      16?1                 47:'id'             	;0
74  74   ECHO/40                   ?0        $28                  ?0                  	;0
75  75   ECHO/40                   ?0        48:'</th>
									<th>' ?0                  	;0
76  76   GOTO/253                  ?0        ?100                 ?49                 	;0
77  78   FETCH_DIM_R/81            $29=      16?1                 50:'date'           	;0
78  78   ECHO/40                   ?0        $29                  ?0                  	;0
79  79   ECHO/40                   ?0        51:'</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>

					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
80  80   GOTO/253                  ?0        ?117                 ?52                 	;0
81  82   ASSIGN/38                 ?22       16?7                 53:'Client Logs'    	;0
82  83   INCLUDE_OR_EVAL/73        ?23       54:'header.php'      ?0                  	;2
83  84   ECHO/40                   ?0        55:'<div class="wrapper"' ?0                  	;0
84  85   FETCH_IS/89               $32=      56:'_SERVER'         ?0                  	;0
85  85   ISSET_ISEMPTY_DIM_OBJ/115 #33=      $32                  57:'HTTP_X_REQUESTED_WITH'	;16777216
86  85   BOOL_NOT/13               #34=      #33                  ?0                  	;0
87  85   JMPZ_EX/46                #34=      #34                  ?95                 	;0	>>95
88  85   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'strtolower'     	;1
89  85   FETCH_FUNC_ARG/92         $35=      60:'_SERVER'         ?0                  	;1
90  85   FETCH_DIM_FUNC_ARG/93     $36=      $35                  61:'HTTP_X_REQUESTED_WITH'	;1
91  85   SEND_VAR_EX/66            ?80       $36                  ?1                  	;0
92  85   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
93  85   IS_EQUAL/17               #38=      $37                  62:'xmlhttprequest' 	;0
94  85   BOOL/52                   #34=      #38                  ?0                  	;0
95  85   BOOL_NOT/13               #39=      #34                  ?0                  	;0	<<87
96  85   JMPZ/43                   ?0        #39                  ?98                 	;0	>>98
97  86   GOTO/253                  ?0        ?16                  ?63                 	;0
98  88   ECHO/40                   ?0        64:' style="display: none;"' ?0                  	;0	<<96
99  89   GOTO/253                  ?0        ?16                  ?65                 	;0
100 91   FETCH_DIM_R/81            $40=      16?1                 66:'username'       	;0
101 91   ECHO/40                   ?0        $40                  ?0                  	;0
102 92   ECHO/40                   ?0        67:'</th>
									<th>' ?0                  	;0
103 93   FETCH_DIM_R/81            $41=      16?1                 68:'stream'         	;0
104 93   ECHO/40                   ?0        $41                  ?0                  	;0
105 94   ECHO/40                   ?0        69:'</th>
									<th>' ?0                  	;0
106 95   FETCH_DIM_R/81            $42=      16?1                 70:'reason'         	;0
107 95   ECHO/40                   ?0        $42                  ?0                  	;0
108 96   GOTO/253                  ?0        ?109                 ?71                 	;0
109 98   ECHO/40                   ?0        72:'</th>
									<th>' ?0                  	;0
110 99   FETCH_DIM_R/81            $43=      16?1                 73:'user_agent'     	;0
111 99   ECHO/40                   ?0        $43                  ?0                  	;0
112 100  ECHO/40                   ?0        74:'</th>
									<th class="text-center">' ?0                  	;0
113 101  FETCH_DIM_R/81            $44=      16?1                 75:'ip'             	;0
114 101  ECHO/40                   ?0        $44                  ?0                  	;0
115 102  ECHO/40                   ?0        76:'</th>
									<th class="text-center">' ?0                  	;0
116 103  GOTO/253                  ?0        ?77                  ?77                 	;0
117 105  INCLUDE_OR_EVAL/73        ?37       78:'footer.php'      ?0                  	;2
118 106  NOP/0                     ?0        79:1                 ?0                  	;4294967295
*/

?>
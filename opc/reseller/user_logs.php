<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?110                 ?0                  	;0	>>110
1   5    FETCH_STATIC_PROP_IS/176  $7=       1:'rRequest'         2:'XUI'             	;0
2   5    ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   4:'user_id'         	;33554432
3   5    JMPZ/43                   ?0        #8                   ?5                  	;0	>>5
4   6    GOTO/253                  ?0        ?6                   ?5                  	;0
5   8    ECHO/40                   ?0        6:' selected'        ?0                  	;0	<<3
6   10   ECHO/40                   ?0        7:'>All Users</option>
                                        <option value="' ?0                  	;0
7   11   FETCH_DIM_R/81            $9=       16?0                 8:'id'              	;0
8   11   ECHO/40                   ?0        $9                   ?0                  	;0
9   12   GOTO/253                  ?0        ?95                  ?9                  	;0
10  14   ECHO/40                   ?0        10:'                                    </optgroup>
                                    ' ?0                  	;0
11  16   ECHO/40                   ?0        11:'								</select>
							</div>
							<label class="col-md-1 col-form-label text-center" for="range">Dates</label>
							<div class="col-md-2">
								<input type="text" class="form-control text-center date" id="range" name="range" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="All Dates">
							</div>
							<label class="col-md-1 col-form-label text-center" for="show_entries">Show</label>
							<div class="col-md-1">
								<select id="show_entries" class="form-control" data-toggle="select2">
									' ?0                  	;0
12  17   FE_RESET_R/77             $10=      12:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?28                 	;0
13  17   FE_FETCH_R/78             ?0        $10                  16?1                	;28	>>28	<<27
14  18   ECHO/40                   ?0        13:'									<option' ?0                  	;0
15  19   FETCH_DIM_R/81            $11=      16?2                 14:'default_entries'	;0
16  19   IS_EQUAL/17               #12=      $11                  16?1                	;0
17  19   BOOL_NOT/13               #13=      #12                  ?0                  	;0
18  19   JMPZ/43                   ?0        #13                  ?21                 	;0	>>21
19  20   NOP/0                     ?0        ?0                   ?0                  	;1
20  20   GOTO/253                  ?0        ?22                  ?15                 	;0
21  22   ECHO/40                   ?0        16:' selected'       ?0                  	;0	<<18
22  24   ECHO/40                   ?0        17:' value="'        ?0                  	;0
23  25   ECHO/40                   ?0        16?1                 ?0                  	;0
24  26   ECHO/40                   ?0        18:'">'              ?0                  	;0
25  27   ECHO/40                   ?0        16?1                 ?0                  	;0
26  28   ECHO/40                   ?0        19:'</option>
									' ?0                  	;0
27  29   JMP/42                    ?0        ?13                  ?0                  	;0	>>13
28  29   FE_FREE/127               ?0        $10                  ?0                  	;0	<<12
29  32   GOTO/253                  ?0        ?87                  ?20                 	;0
30  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'count'          	;1
31  35   FETCH_DIM_FUNC_ARG/93     $14=      16?3                 23:'all_reports'    	;1
32  35   SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
33  35   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
34  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'count'          	;1
35  35   FETCH_DIM_FUNC_ARG/93     $16=      16?3                 26:'direct_reports' 	;1
36  35   SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
37  35   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
38  35   IS_SMALLER/19             #18=      $17                  $15                 	;0
39  35   BOOL_NOT/13               #19=      #18                  ?0                  	;0
40  35   JMPZ/43                   ?0        #19                  ?42                 	;0	>>42
41  36   GOTO/253                  ?0        ?11                  ?27                 	;0
42  38   ECHO/40                   ?0        28:'                                    <optgroup label="Indirect Reports">
                                        ' ?0                  	;0	<<40
43  39   FETCH_DIM_R/81            $20=      16?3                 29:'all_reports'    	;0
44  39   FE_RESET_R/77             $21=      $20                  ?85                 	;0
45  39   FE_FETCH_R/78             ?0        $21                  16?4                	;85	>>85	<<84
46  40   NOP/0                     ?0        ?0                   ?0                  	;1
47  40   GOTO/253                  ?0        ?68                  ?30                 	;0
48  42   FETCH_STATIC_PROP_IS/176  $22=      31:'rRequest'        32:'XUI'            	;0
49  42   ISSET_ISEMPTY_DIM_OBJ/115 #23=      $22                  34:'user_id'        	;33554432
50  42   JMPZ_EX/46                #23=      #23                  ?55                 	;0	>>55
51  42   FETCH_STATIC_PROP_R/173   $24=      35:'rRequest'        36:'XUI'            	;0
52  42   FETCH_DIM_R/81            $25=      $24                  38:'user_id'        	;0
53  42   IS_EQUAL/17               #26=      $25                  16?4                	;0
54  42   BOOL/52                   #23=      #26                  ?0                  	;0
55  42   BOOL_NOT/13               #27=      #23                  ?0                  	;0	<<50
56  42   JMPZ/43                   ?0        #27                  ?59                 	;0	>>59
57  43   NOP/0                     ?0        ?0                   ?0                  	;1
58  43   GOTO/253                  ?0        ?60                  ?39                 	;0
59  45   ECHO/40                   ?0        40:' selected'       ?0                  	;0	<<56
60  47   ECHO/40                   ?0        41:'>'               ?0                  	;0
61  48   FETCH_DIM_R/81            $28=      16?5                 42:'username'       	;0
62  48   ECHO/40                   ?0        $28                  ?0                  	;0
63  49   NOP/0                     ?0        ?0                   ?0                  	;1
64  49   GOTO/253                  ?0        ?65                  ?43                 	;0
65  51   ECHO/40                   ?0        44:'</option>
                                            ' ?0                  	;0
66  54   NOP/0                     ?0        ?0                   ?0                  	;1
67  54   GOTO/253                  ?0        ?84                  ?45                 	;0
68  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'in_array'       	;2
69  56   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
70  56   FETCH_DIM_FUNC_ARG/93     $29=      16?3                 48:'direct_reports' 	;2
71  56   SEND_VAR_EX/66            ?96       $29                  ?2                  	;0
72  56   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
73  56   JMPZ/43                   ?0        $30                  ?76                 	;0	>>76
74  57   NOP/0                     ?0        ?0                   ?0                  	;1
75  57   GOTO/253                  ?0        ?66                  ?49                 	;0
76  59   FETCH_DIM_R/81            $31=      16?3                 50:'users'          	;0	<<73
77  59   FETCH_DIM_R/81            $32=      $31                  16?4                	;0
78  59   ASSIGN/38                 ?26       16?5                 $32                 	;0
79  60   ECHO/40                   ?0        51:'                                            <option value="' ?0                  	;0
80  61   ECHO/40                   ?0        16?4                 ?0                  	;0
81  62   ECHO/40                   ?0        52:'"'               ?0                  	;0
82  63   NOP/0                     ?0        ?0                   ?0                  	;1
83  63   GOTO/253                  ?0        ?48                  ?53                 	;0
84  64   JMP/42                    ?0        ?45                  ?0                  	;0	>>45
85  64   FE_FREE/127               ?0        $21                  ?0                  	;0	<<44
86  67   GOTO/253                  ?0        ?10                  ?54                 	;0
87  69   ECHO/40                   ?0        55:'								</select>
							</div>
						</div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>Reseller</th>
									<th>Line / User</th>
									<th>Action</th>
                                    <th class="text-center">Cost</th>
                                    <th class="text-center">Credits Remaining</th>
									<th class="text-center">Date</th>
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
88  70   GOTO/253                  ?0        ?165                 ?56                 	;0
89  72   ASSIGN/38                 ?27       16?6                 57:'User Logs'      	;0
90  73   INCLUDE_OR_EVAL/73        ?28       58:'header.php'      ?0                  	;2
91  74   ECHO/40                   ?0        59:'<div class="wrapper">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
92  75   INCLUDE_OR_EVAL/73        ?29       60:'topbar.php'      ?0                  	;2
93  76   ECHO/40                   ?0        61:'					</div>
					<h4 class="page-title">Reseller Logs</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<div class="form-group row mb-4">
							<div class="col-md-3">
								<input type="text" class="form-control" id="log_search" value="" placeholder="Search Logs...">
							</div>
							<label class="col-md-1 col-form-label text-center" for="reseller">Reseller</label>
							<div class="col-md-3">
								<select id="reseller" class="form-control" data-toggle="select2">
									<optgroup label="Global">
                                        <option value=""' ?0                  	;0
94  77   GOTO/253                  ?0        ?1                   ?62                 	;0
95  79   ECHO/40                   ?0        63:'"'               ?0                  	;0
96  80   FETCH_STATIC_PROP_IS/176  $37=      64:'rRequest'        65:'XUI'            	;0
97  80   ISSET_ISEMPTY_DIM_OBJ/115 #38=      $37                  67:'user_id'        	;33554432
98  80   JMPZ_EX/46                #38=      #38                  ?104                	;0	>>104
99  80   FETCH_STATIC_PROP_R/173   $39=      68:'rRequest'        69:'XUI'            	;0
100 80   FETCH_DIM_R/81            $40=      $39                  71:'user_id'        	;0
101 80   FETCH_DIM_R/81            $41=      16?0                 72:'id'             	;0
102 80   IS_EQUAL/17               #42=      $40                  $41                 	;0
103 80   BOOL/52                   #38=      #42                  ?0                  	;0
104 80   BOOL_NOT/13               #43=      #38                  ?0                  	;0	<<98
105 80   JMPZ/43                   ?0        #43                  ?107                	;0	>>107
106 81   GOTO/253                  ?0        ?108                 ?73                 	;0
107 83   ECHO/40                   ?0        74:' selected'       ?0                  	;0	<<105
108 85   ECHO/40                   ?0        75:'>My Logs</option>
                                    </optgroup>
                                    ' ?0                  	;0
109 86   GOTO/253                  ?0        ?119                 ?76                 	;0
110 88   INCLUDE_OR_EVAL/73        ?37       77:'session.php'     ?0                  	;2	<<0
111 89   INCLUDE_OR_EVAL/73        ?38       78:'functions.php'   ?0                  	;2
112 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'baF6e9eF7775B5a9'	;0
113 90   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
114 90   JMPZ/43                   ?0        $46                  ?116                	;0	>>116
115 91   GOTO/253                  ?0        ?118                 ?81                 	;0
116 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'E72F42a93714BA87'	;0	<<114
117 93   DO_FCALL_BY_NAME/131      ?40       ?0                   ?0                  	;0
118 95   GOTO/253                  ?0        ?89                  ?84                 	;0
119 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'count'          	;1
120 97   FETCH_DIM_FUNC_ARG/93     $48=      16?3                 87:'direct_reports' 	;1
121 97   SEND_VAR_EX/66            ?80       $48                  ?1                  	;0
122 97   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
123 97   IS_SMALLER/19             #50=      88:0                 $49                 	;0
124 97   BOOL_NOT/13               #51=      #50                  ?0                  	;0
125 97   JMPZ/43                   ?0        #51                  ?127                	;0	>>127
126 98   GOTO/253                  ?0        ?30                  ?89                 	;0
127 100  ECHO/40                   ?0        90:'                                    <optgroup label="Direct Reports">
                                        ' ?0                  	;0	<<125
128 101  FETCH_DIM_R/81            $52=      16?3                 91:'direct_reports' 	;0
129 101  FE_RESET_R/77             $53=      $52                  ?162                	;0
130 101  FE_FETCH_R/78             ?0        $53                  16?4                	;162	>>162	<<161
131 102  NOP/0                     ?0        ?0                   ?0                  	;1
132 102  GOTO/253                  ?0        ?140                 ?92                 	;0
133 104  ECHO/40                   ?0        93:' selected'       ?0                  	;0
134 106  ECHO/40                   ?0        94:'>'               ?0                  	;0
135 107  FETCH_DIM_R/81            $54=      16?5                 95:'username'       	;0
136 107  ECHO/40                   ?0        $54                  ?0                  	;0
137 108  ECHO/40                   ?0        96:'</option>
                                        ' ?0                  	;0
138 109  NOP/0                     ?0        ?0                   ?0                  	;1
139 109  GOTO/253                  ?0        ?159                 ?97                 	;0
140 111  FETCH_DIM_R/81            $55=      16?3                 98:'users'          	;0
141 111  FETCH_DIM_R/81            $56=      $55                  16?4                	;0
142 111  ASSIGN/38                 ?50       16?5                 $56                 	;0
143 112  ECHO/40                   ?0        99:'                                        <option value="' ?0                  	;0
144 113  ECHO/40                   ?0        16?4                 ?0                  	;0
145 114  ECHO/40                   ?0        100:'"'              ?0                  	;0
146 115  FETCH_STATIC_PROP_IS/176  $58=      101:'rRequest'       102:'XUI'           	;0
147 115  ISSET_ISEMPTY_DIM_OBJ/115 #59=      $58                  104:'user_id'       	;33554432
148 115  JMPZ_EX/46                #59=      #59                  ?153                	;0	>>153
149 115  FETCH_STATIC_PROP_R/173   $60=      105:'rRequest'       106:'XUI'           	;0
150 115  FETCH_DIM_R/81            $61=      $60                  108:'user_id'       	;0
151 115  IS_EQUAL/17               #62=      $61                  16?4                	;0
152 115  BOOL/52                   #59=      #62                  ?0                  	;0
153 115  BOOL_NOT/13               #63=      #59                  ?0                  	;0	<<148
154 115  JMPZ/43                   ?0        #63                  ?157                	;0	>>157
155 116  NOP/0                     ?0        ?0                   ?0                  	;1
156 116  GOTO/253                  ?0        ?134                 ?109                	;0
157 118  NOP/0                     ?0        ?0                   ?0                  	;1	<<154
158 118  GOTO/253                  ?0        ?133                 ?110                	;0
159 121  NOP/0                     ?0        ?0                   ?0                  	;1
160 121  GOTO/253                  ?0        ?161                 ?111                	;0
161 122  JMP/42                    ?0        ?130                 ?0                  	;0	>>130
162 122  FE_FREE/127               ?0        $53                  ?0                  	;0	<<129
163 125  ECHO/40                   ?0        112:'                                    </optgroup>
                                    ' ?0                  	;0
164 126  GOTO/253                  ?0        ?30                  ?113                	;0
165 128  INCLUDE_OR_EVAL/73        ?57       114:'footer.php'     ?0                  	;2
166 129  NOP/0                     ?0        115:1                ?0                  	;4294967295
*/

?>
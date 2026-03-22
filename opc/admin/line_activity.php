<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?83                  ?0                  	;0	>>83
1   5    ECHO/40                   ?0        1:'" selected="selected">' ?0                  	;0
2   6    FETCH_DIM_R/81            $8=       16?0                 2:'username'        	;0
3   6    ECHO/40                   ?0        $8                   ?0                  	;0
4   7    ECHO/40                   ?0        3:'</option>
                                    ' ?0                  	;0
5   9    ECHO/40                   ?0        4:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control text-center date" id="act_range" name="range" value="' ?0                  	;0
6   10   GOTO/253                  ?0        ?169                 ?5                  	;0
7   12   BOOL_NOT/13               #9=       16?1                 ?0                  	;0
8   12   JMPZ/43                   ?0        #9                   ?10                 	;0	>>10
9   13   GOTO/253                  ?0        ?11                  ?6                  	;0
10  15   ECHO/40                   ?0        7:'collapse'         ?0                  	;0	<<8
11  17   ECHO/40                   ?0        8:' form-group row mb-4">
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="act_search" value="' ?0                  	;0
12  18   FETCH_STATIC_PROP_IS/176  $10=      9:'rRequest'         10:'XUI'            	;0
13  18   ISSET_ISEMPTY_DIM_OBJ/115 #11=      $10                  12:'search'         	;33554432
14  18   BOOL_NOT/13               #12=      #11                  ?0                  	;0
15  18   JMPZ/43                   ?0        #12                  ?17                 	;0	>>17
16  19   GOTO/253                  ?0        ?136                 ?13                 	;0
17  21   GOTO/253                  ?0        ?130                 ?14                 	;0	<<15
18  23   ECHO/40                   ?0        15:'</label>
                            <div class="col-md-1">
                                <select id="act_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
19  24   FE_RESET_R/77             $13=      16:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?35                 	;0
20  24   FE_FETCH_R/78             ?0        $13                  16?2                	;35	>>35	<<34
21  25   ECHO/40                   ?0        17:'                                    <option' ?0                  	;0
22  26   FETCH_DIM_R/81            $14=      16?3                 18:'default_entries'	;0
23  26   IS_EQUAL/17               #15=      $14                  16?2                	;0
24  26   BOOL_NOT/13               #16=      #15                  ?0                  	;0
25  26   JMPZ/43                   ?0        #16                  ?28                 	;0	>>28
26  27   NOP/0                     ?0        ?0                   ?0                  	;1
27  27   GOTO/253                  ?0        ?29                  ?19                 	;0
28  29   ECHO/40                   ?0        20:' selected'       ?0                  	;0	<<25
29  31   ECHO/40                   ?0        21:' value="'        ?0                  	;0
30  32   ECHO/40                   ?0        16?2                 ?0                  	;0
31  33   ECHO/40                   ?0        22:'">'              ?0                  	;0
32  34   ECHO/40                   ?0        16?2                 ?0                  	;0
33  35   ECHO/40                   ?0        23:'</option>
                                    ' ?0                  	;0
34  36   JMP/42                    ?0        ?20                  ?0                  	;0	>>20
35  36   FE_FREE/127               ?0        $13                  ?0                  	;0	<<19
36  39   ECHO/40                   ?0        24:'                                </select>
                            </div>
                        </div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th>Line</th>
									<th>Stream</th>
									<th>Server</th>
                                    <th>Player</th>
									<th>ISP</th>
                                    <th class="text-center">IP</th>
									<th class="text-center">Start</th>
									<th class="text-center">Stop</th>
                                    <th class="text-center">Duration</th>
                                    <th class="text-center">Output</th>
                                    <th class="text-center">Restreamer</th>
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
37  40   GOTO/253                  ?0        ?184                 ?25                 	;0
38  43   ECHO/40                   ?0        26:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="act_line" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
39  44   ISSET_ISEMPTY_CV/197      #17=      16?0                 ?0                  	;33554432
40  44   BOOL_NOT/13               #18=      #17                  ?0                  	;0
41  44   JMPZ/43                   ?0        #18                  ?43                 	;0	>>43
42  45   GOTO/253                  ?0        ?5                   ?27                 	;0
43  47   ECHO/40                   ?0        28:'                                    <option value="' ?0                  	;0	<<41
44  48   INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'intval'         	;1
45  48   FETCH_DIM_FUNC_ARG/93     $19=      16?0                 31:'id'             	;1
46  48   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
47  48   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
48  48   ECHO/40                   ?0        $20                  ?0                  	;0
49  49   GOTO/253                  ?0        ?1                   ?32                 	;0
50  51   ECHO/40                   ?0        33:'</option>
                                    ' ?0                  	;0
51  52   FETCH_STATIC_PROP_R/173   $21=      34:'rServers'        35:'XUI'            	;0
52  52   FE_RESET_R/77             $22=      $21                  ?76                 	;0
53  52   FE_FETCH_R/78             ?0        $22                  16?4                	;76	>>76	<<75
54  53   ECHO/40                   ?0        37:'                                    <option value="' ?0                  	;0
55  54   FETCH_DIM_R/81            $23=      16?4                 38:'id'             	;0
56  54   ECHO/40                   ?0        $23                  ?0                  	;0
57  55   ECHO/40                   ?0        39:'"'               ?0                  	;0
58  56   FETCH_STATIC_PROP_IS/176  $24=      40:'rRequest'        41:'XUI'            	;0
59  56   ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  43:'server'         	;33554432
60  56   JMPZ_EX/46                #25=      #25                  ?66                 	;0	>>66
61  56   FETCH_STATIC_PROP_R/173   $26=      44:'rRequest'        45:'XUI'            	;0
62  56   FETCH_DIM_R/81            $27=      $26                  47:'server'         	;0
63  56   FETCH_DIM_R/81            $28=      16?4                 48:'id'             	;0
64  56   IS_EQUAL/17               #29=      $27                  $28                 	;0
65  56   BOOL/52                   #25=      #29                  ?0                  	;0
66  56   BOOL_NOT/13               #30=      #25                  ?0                  	;0	<<60
67  56   JMPZ/43                   ?0        #30                  ?70                 	;0	>>70
68  57   NOP/0                     ?0        ?0                   ?0                  	;1
69  57   GOTO/253                  ?0        ?71                  ?49                 	;0
70  59   ECHO/40                   ?0        50:' selected'       ?0                  	;0	<<67
71  61   ECHO/40                   ?0        51:'>'               ?0                  	;0
72  62   FETCH_DIM_R/81            $31=      16?4                 52:'server_name'    	;0
73  62   ECHO/40                   ?0        $31                  ?0                  	;0
74  63   ECHO/40                   ?0        53:'</option>
                                    ' ?0                  	;0
75  64   JMP/42                    ?0        ?53                  ?0                  	;0	>>53
76  64   FE_FREE/127               ?0        $22                  ?0                  	;0	<<52
77  67   ECHO/40                   ?0        54:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="act_stream" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
78  68   ISSET_ISEMPTY_CV/197      #32=      16?5                 ?0                  	;33554432
79  68   BOOL_NOT/13               #33=      #32                  ?0                  	;0
80  68   JMPZ/43                   ?0        #33                  ?82                 	;0	>>82
81  69   GOTO/253                  ?0        ?38                  ?55                 	;0
82  71   GOTO/253                  ?0        ?119                 ?56                 	;0	<<80
83  73   INCLUDE_OR_EVAL/73        ?26       57:'session.php'     ?0                  	;2	<<0
84  74   INCLUDE_OR_EVAL/73        ?27       58:'functions.php'   ?0                  	;2
85  75   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'E6d500e19634d513'	;0
86  75   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
87  75   JMPZ/43                   ?0        $36                  ?89                 	;0	>>89
88  76   GOTO/253                  ?0        ?91                  ?61                 	;0
89  78   INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'e72F42a93714BA87'	;0	<<87
90  78   DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
91  80   GOTO/253                  ?0        ?146                 ?64                 	;0
92  83   ASSIGN/38                 ?30       16?6                 65:'Activity Logs'  	;0
93  84   INCLUDE_OR_EVAL/73        ?31       66:'header.php'      ?0                  	;2
94  85   ECHO/40                   ?0        67:'<div class="wrapper"' ?0                  	;0
95  86   FETCH_IS/89               $40=      68:'_SERVER'         ?0                  	;0
96  86   ISSET_ISEMPTY_DIM_OBJ/115 #41=      $40                  69:'HTTP_X_REQUESTED_WITH'	;16777216
97  86   BOOL_NOT/13               #42=      #41                  ?0                  	;0
98  86   JMPZ_EX/46                #42=      #42                  ?106                	;0	>>106
99  86   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'strtolower'     	;1
100 86   FETCH_FUNC_ARG/92         $43=      72:'_SERVER'         ?0                  	;1
101 86   FETCH_DIM_FUNC_ARG/93     $44=      $43                  73:'HTTP_X_REQUESTED_WITH'	;1
102 86   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
103 86   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
104 86   IS_EQUAL/17               #46=      $45                  74:'xmlhttprequest' 	;0
105 86   BOOL/52                   #42=      #46                  ?0                  	;0
106 86   BOOL_NOT/13               #47=      #42                  ?0                  	;0	<<98
107 86   JMPZ/43                   ?0        #47                  ?109                	;0	>>109
108 87   GOTO/253                  ?0        ?142                 ?75                 	;0
109 89   GOTO/253                  ?0        ?141                 ?76                 	;0	<<107
110 91   FETCH_STATIC_PROP_IS/176  $48=      77:'rRequest'        78:'XUI'            	;0
111 91   ISSET_ISEMPTY_DIM_OBJ/115 #49=      $48                  80:'server'         	;33554432
112 91   JMPZ/43                   ?0        #49                  ?114                	;0	>>114
113 92   GOTO/253                  ?0        ?115                 ?81                 	;0
114 94   ECHO/40                   ?0        82:' selected'       ?0                  	;0	<<112
115 96   ECHO/40                   ?0        83:'>'               ?0                  	;0
116 97   FETCH_DIM_R/81            $50=      16?7                 84:'all_servers'    	;0
117 97   ECHO/40                   ?0        $50                  ?0                  	;0
118 98   GOTO/253                  ?0        ?50                  ?85                 	;0
119 100  ECHO/40                   ?0        86:'                                    <option value="' ?0                  	;0
120 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'intval'         	;1
121 101  FETCH_DIM_FUNC_ARG/93     $51=      16?5                 89:'id'             	;1
122 101  SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
123 101  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
124 101  ECHO/40                   ?0        $52                  ?0                  	;0
125 102  ECHO/40                   ?0        90:'" selected="selected">' ?0                  	;0
126 103  FETCH_DIM_R/81            $53=      16?5                 91:'stream_display_name'	;0
127 103  ECHO/40                   ?0        $53                  ?0                  	;0
128 104  ECHO/40                   ?0        92:'</option>
                                    ' ?0                  	;0
129 105  GOTO/253                  ?0        ?38                  ?93                 	;0
130 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'htmlspecialchars'	;1
131 107  FETCH_STATIC_PROP_FUNC_ARG/177 $54=      96:'rRequest'        97:'XUI'            	;1
132 107  FETCH_DIM_FUNC_ARG/93     $55=      $54                  99:'search'         	;1
133 107  SEND_VAR_EX/66            ?80       $55                  ?1                  	;0
134 107  DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
135 107  ECHO/40                   ?0        $56                  ?0                  	;0
136 109  ECHO/40                   ?0        100:'" placeholder="' ?0                  	;0
137 110  FETCH_DIM_R/81            $57=      16?7                 101:'search_logs'   	;0
138 110  ECHO/40                   ?0        $57                  ?0                  	;0
139 111  ECHO/40                   ?0        102:'...">
                            </div>
                            <div class="col-md-2">
                                <select id="act_server" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
140 112  GOTO/253                  ?0        ?110                 ?103                	;0
141 114  ECHO/40                   ?0        104:' style="display: none;"' ?0                  	;0
142 116  ECHO/40                   ?0        105:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
143 117  INCLUDE_OR_EVAL/73        ?50       106:'topbar.php'     ?0                  	;2
144 118  ECHO/40                   ?0        107:'					</div>
					<h4 class="page-title">Activity Logs</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
145 119  GOTO/253                  ?0        ?7                   ?108                	;0
146 121  FETCH_STATIC_PROP_IS/176  $59=      109:'rRequest'       110:'XUI'           	;0
147 121  ISSET_ISEMPTY_DIM_OBJ/115 #60=      $59                  112:'user_id'       	;33554432
148 121  BOOL_NOT/13               #61=      #60                  ?0                  	;0
149 121  JMPZ/43                   ?0        #61                  ?151                	;0	>>151
150 122  GOTO/253                  ?0        ?157                 ?113                	;0
151 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'b5AD1d95A92ce732'	;1	<<149
152 124  FETCH_STATIC_PROP_FUNC_ARG/177 $62=      116:'rRequest'       117:'XUI'           	;1
153 124  FETCH_DIM_FUNC_ARG/93     $63=      $62                  119:'user_id'       	;1
154 124  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
155 124  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
156 124  ASSIGN/38                 ?57       16?0                 $64                 	;0
157 126  FETCH_STATIC_PROP_IS/176  $66=      120:'rRequest'       121:'XUI'           	;0
158 126  ISSET_ISEMPTY_DIM_OBJ/115 #67=      $66                  123:'stream_id'     	;33554432
159 126  BOOL_NOT/13               #68=      #67                  ?0                  	;0
160 126  JMPZ/43                   ?0        #68                  ?162                	;0	>>162
161 127  GOTO/253                  ?0        ?92                  ?124                	;0
162 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'F260B7a31F021E39'	;1	<<160
163 129  FETCH_STATIC_PROP_FUNC_ARG/177 $69=      127:'rRequest'       128:'XUI'           	;1
164 129  FETCH_DIM_FUNC_ARG/93     $70=      $69                  130:'stream_id'     	;1
165 129  SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
166 129  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
167 129  ASSIGN/38                 ?64       16?5                 $71                 	;0
168 130  GOTO/253                  ?0        ?92                  ?131                	;0
169 132  FETCH_STATIC_PROP_IS/176  $73=      132:'rRequest'       133:'XUI'           	;0
170 132  ISSET_ISEMPTY_DIM_OBJ/115 #74=      $73                  135:'range'         	;33554432
171 132  BOOL_NOT/13               #75=      #74                  ?0                  	;0
172 132  JMPZ/43                   ?0        #75                  ?174                	;0	>>174
173 133  GOTO/253                  ?0        ?180                 ?136                	;0
174 135  INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'htmlspecialchars'	;1	<<172
175 135  FETCH_STATIC_PROP_FUNC_ARG/177 $76=      139:'rRequest'       140:'XUI'           	;1
176 135  FETCH_DIM_FUNC_ARG/93     $77=      $76                  142:'range'         	;1
177 135  SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
178 135  DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
179 135  ECHO/40                   ?0        $78                  ?0                  	;0
180 137  ECHO/40                   ?0        143:'" data-toggle="date-picker" data-single-date-picker="true" placeholder="All Dates">
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="act_show_entries">' ?0                  	;0
181 138  FETCH_DIM_R/81            $79=      16?7                 144:'show'          	;0
182 138  ECHO/40                   ?0        $79                  ?0                  	;0
183 139  GOTO/253                  ?0        ?18                  ?145                	;0
184 141  INCLUDE_OR_EVAL/73        ?72       146:'footer.php'     ?0                  	;2
185 142  NOP/0                     ?0        147:1                ?0                  	;4294967295
*/

?>
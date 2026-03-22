<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?182                 ?0                  	;0	>>182
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'intval'          	;1
2   5    FETCH_STATIC_PROP_FUNC_ARG/177 $10=      3:'rRequest'         4:'XUI'             	;1
3   5    FETCH_DIM_FUNC_ARG/93     $11=      $10                  6:'range'           	;1
4   5    SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
5   5    DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
6   5    JMP_SET/152               #13=      $12                  ?8                  	;0
7   5    QM_ASSIGN/22              #13=      7:0                  ?0                  	;0
8   5    ASSIGN/38                 ?4        16?0                 #13                 	;0
9   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'igbinary_unserialize'	;1
10  6    INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'file_get_contents'	;1
11  6    FETCH_CONSTANT/99         #15=      ?0                   12:'CACHE_TMP_PATH' 	;16
12  6    CONCAT/8                  #16=      #15                  15:'theft_detection'	;0
13  6    SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
14  6    DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
15  6    SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
16  6    DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
17  6    JMP_SET/152               #19=      $18                  ?19                 	;0
18  6    QM_ASSIGN/22              #19=      16:array (
)         ?0                  	;0
19  6    ASSIGN/38                 ?10       16?1                 #19                 	;0
20  7    ASSIGN/38                 ?11       16?2                 17:'VOD Theft Detection'	;0
21  8    INCLUDE_OR_EVAL/73        ?12       18:'header.php'      ?0                  	;2
22  9    ECHO/40                   ?0        19:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
23  10   GOTO/253                  ?0        ?63                  ?20                 	;0
24  12   ECHO/40                   ?0        21:'					</div>
					<h4 class="page-title">VOD Theft Detection</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<div class="form-group row mb-4">
							<div class="col-md-7">
								<input type="text" class="form-control" id="log_search" value="" placeholder="Search Logs...">
							</div>
							<div class="col-md-3">
								<select id="range" class="form-control" data-toggle="select2">
                                    <option value="0"' ?0                  	;0
25  13   IS_EQUAL/17               #23=      16?0                 22:0                	;0
26  13   BOOL_NOT/13               #24=      #23                  ?0                  	;0
27  13   JMPZ/43                   ?0        #24                  ?29                 	;0	>>29
28  14   GOTO/253                  ?0        ?30                  ?23                 	;0
29  16   ECHO/40                   ?0        24:' selected'       ?0                  	;0	<<27
30  18   ECHO/40                   ?0        25:'>All Time</option>
									<option value="604800"' ?0                  	;0
31  19   GOTO/253                  ?0        ?52                  ?26                 	;0
32  22   ECHO/40                   ?0        27:'>Last Hour</option>
								</select>
							</div>
							<div class="col-md-2">
								<select id="show_entries" class="form-control" data-toggle="select2">
									' ?0                  	;0
33  23   FE_RESET_R/77             $25=      28:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?49                 	;0
34  23   FE_FETCH_R/78             ?0        $25                  16?3                	;49	>>49	<<48
35  24   ECHO/40                   ?0        29:'									<option' ?0                  	;0
36  25   FETCH_DIM_R/81            $26=      16?4                 30:'default_entries'	;0
37  25   IS_EQUAL/17               #27=      $26                  16?3                	;0
38  25   BOOL_NOT/13               #28=      #27                  ?0                  	;0
39  25   JMPZ/43                   ?0        #28                  ?42                 	;0	>>42
40  26   NOP/0                     ?0        ?0                   ?0                  	;1
41  26   GOTO/253                  ?0        ?43                  ?31                 	;0
42  28   ECHO/40                   ?0        32:' selected'       ?0                  	;0	<<39
43  30   ECHO/40                   ?0        33:' value="'        ?0                  	;0
44  31   ECHO/40                   ?0        16?3                 ?0                  	;0
45  32   ECHO/40                   ?0        34:'">'              ?0                  	;0
46  33   ECHO/40                   ?0        16?3                 ?0                  	;0
47  34   ECHO/40                   ?0        35:'</option>
									' ?0                  	;0
48  35   JMP/42                    ?0        ?34                  ?0                  	;0	>>34
49  35   FE_FREE/127               ?0        $25                  ?0                  	;0	<<33
50  38   ECHO/40                   ?0        36:'								</select>
							</div>
						</div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">User ID</th>
									<th>Username</th>
									<th class="text-center">View Count</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
                                ' ?0                  	;0
51  39   GOTO/253                  ?0        ?89                  ?37                 	;0
52  41   IS_EQUAL/17               #29=      16?0                 38:604800           	;0
53  41   BOOL_NOT/13               #30=      #29                  ?0                  	;0
54  41   JMPZ/43                   ?0        #30                  ?56                 	;0	>>56
55  42   GOTO/253                  ?0        ?57                  ?39                 	;0
56  44   ECHO/40                   ?0        40:' selected'       ?0                  	;0	<<54
57  46   ECHO/40                   ?0        41:'>Last 7 Days</option>
									<option value="86400"' ?0                  	;0
58  47   IS_EQUAL/17               #31=      16?0                 42:86400            	;0
59  47   BOOL_NOT/13               #32=      #31                  ?0                  	;0
60  47   JMPZ/43                   ?0        #32                  ?62                 	;0	>>62
61  48   GOTO/253                  ?0        ?82                  ?43                 	;0
62  50   GOTO/253                  ?0        ?81                  ?44                 	;0	<<60
63  52   FETCH_IS/89               $33=      45:'_SERVER'         ?0                  	;0
64  52   ISSET_ISEMPTY_DIM_OBJ/115 #34=      $33                  46:'HTTP_X_REQUESTED_WITH'	;16777216
65  52   BOOL_NOT/13               #35=      #34                  ?0                  	;0
66  52   JMPZ_EX/46                #35=      #35                  ?74                 	;0	>>74
67  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'strtolower'     	;1
68  52   FETCH_FUNC_ARG/92         $36=      49:'_SERVER'         ?0                  	;1
69  52   FETCH_DIM_FUNC_ARG/93     $37=      $36                  50:'HTTP_X_REQUESTED_WITH'	;1
70  52   SEND_VAR_EX/66            ?80       $37                  ?1                  	;0
71  52   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
72  52   IS_EQUAL/17               #39=      $38                  51:'xmlhttprequest' 	;0
73  52   BOOL/52                   #35=      #39                  ?0                  	;0
74  52   BOOL_NOT/13               #40=      #35                  ?0                  	;0	<<66
75  52   JMPZ/43                   ?0        #40                  ?77                 	;0	>>77
76  53   GOTO/253                  ?0        ?78                  ?52                 	;0
77  55   ECHO/40                   ?0        53:' style="display: none;"' ?0                  	;0	<<75
78  57   ECHO/40                   ?0        54:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
79  58   INCLUDE_OR_EVAL/73        ?31       55:'topbar.php'      ?0                  	;2
80  59   GOTO/253                  ?0        ?24                  ?56                 	;0
81  61   ECHO/40                   ?0        57:' selected'       ?0                  	;0
82  63   ECHO/40                   ?0        58:'>Last 24 Hours</option>
									<option value="3600"' ?0                  	;0
83  64   IS_EQUAL/17               #42=      16?0                 59:3600             	;0
84  64   BOOL_NOT/13               #43=      #42                  ?0                  	;0
85  64   JMPZ/43                   ?0        #43                  ?87                 	;0	>>87
86  65   GOTO/253                  ?0        ?32                  ?60                 	;0
87  67   ECHO/40                   ?0        61:' selected'       ?0                  	;0	<<85
88  68   GOTO/253                  ?0        ?32                  ?62                 	;0
89  70   FETCH_DIM_R/81            $44=      16?1                 16?0                	;0
90  70   FE_RESET_R/77             $45=      $44                  ?179                	;0
91  70   FE_FETCH_R/78             ?0        $45                  16?5                	;179	>>179	<<178
92  71   NOP/0                     ?0        ?0                   ?0                  	;1
93  71   GOTO/253                  ?0        ?94                  ?63                 	;0
94  73   IS_EQUAL/17               #46=      16?0                 64:0                	;0
95  73   JMPZ/43                   ?0        #46                  ?98                 	;0	>>98
96  74   NOP/0                     ?0        ?0                   ?0                  	;1
97  74   GOTO/253                  ?0        ?127                 ?65                 	;0
98  76   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'date'           	;2	<<95
99  76   FETCH_DIM_FUNC_ARG/93     $47=      16?4                 68:'date_format'    	;1
100 76   SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
101 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'time'           	;0
102 76   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
103 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'intval'         	;1
104 76   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
105 76   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
106 76   SUB/2                     #50=      $48                  $49                 	;0
107 76   SEND_VAL_EX/116           ?96       #50                  ?2                  	;0
108 76   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
109 76   CONCAT/8                  #52=      $51                  73:' - '            	;0
110 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'date'           	;2
111 76   FETCH_DIM_FUNC_ARG/93     $53=      16?4                 76:'date_format'    	;1
112 76   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
113 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'time'           	;0
114 76   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
115 76   SEND_VAR_NO_REF_EX/50     ?96       $54                  ?2                  	;0
116 76   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
117 76   CONCAT/8                  #56=      #52                  $55                 	;0
118 76   ASSIGN/38                 ?47       16?6                 #56                 	;0
119 77   FETCH_DIM_R/81            $58=      16?5                 79:'username'       	;0
120 77   CONCAT/8                  #59=      80:'<a href="line_activity?search=' $58                 	;0
121 77   CONCAT/8                  #60=      #59                  81:'&dates='        	;0
122 77   CONCAT/8                  #61=      #60                  16?6                	;0
123 77   CONCAT/8                  #62=      #61                  82:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs">View Logs</button></a>'	;0
124 77   ASSIGN/38                 ?53       16?7                 #62                 	;0
125 78   NOP/0                     ?0        ?0                   ?0                  	;1
126 78   GOTO/253                  ?0        ?147                 ?83                 	;0
127 80   NOP/0                     ?0        ?0                   ?0                  	;1
128 80   GOTO/253                  ?0        ?143                 ?84                 	;0
129 82   FETCH_DIM_R/81            $64=      16?5                 85:'vod_count'      	;0
130 82   ECHO/40                   ?0        $64                  ?0                  	;0
131 83   ECHO/40                   ?0        86:'</td>
                                        <td class="text-center">' ?0                  	;0
132 84   ECHO/40                   ?0        16?7                 ?0                  	;0
133 85   ECHO/40                   ?0        87:'</td>
                                    </tr>
                                ' ?0                  	;0
134 87   NOP/0                     ?0        ?0                   ?0                  	;1
135 87   GOTO/253                  ?0        ?178                 ?88                 	;0
136 89   ECHO/40                   ?0        89:'                                    <tr>
                                        <td class="text-center">' ?0                  	;0
137 90   ECHO/40                   ?0        16?8                 ?0                  	;0
138 91   ECHO/40                   ?0        90:'</td>
                                        <td>' ?0                  	;0
139 92   ECHO/40                   ?0        16?9                 ?0                  	;0
140 93   ECHO/40                   ?0        91:'</td>
                                        <td class="text-center">' ?0                  	;0
141 94   NOP/0                     ?0        ?0                   ?0                  	;1
142 94   GOTO/253                  ?0        ?129                 ?92                 	;0
143 96   FETCH_DIM_R/81            $65=      16?5                 93:'username'       	;0
144 96   CONCAT/8                  #66=      94:'<a href="line_activity?search=' $65                 	;0
145 96   CONCAT/8                  #67=      #66                  95:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs">View Logs</button></a>'	;0
146 96   ASSIGN/38                 ?58       16?7                 #67                 	;0
147 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'E589a4Bf54a2Dad1'	;2
148 98   SEND_VAL_EX/116           ?80       98:'adv'             ?1                  	;0
149 98   SEND_VAL_EX/116           ?96       99:'edit_user'       ?2                  	;0
150 98   DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
151 98   JMPZ/43                   ?0        $69                  ?154                	;0	>>154
152 99   NOP/0                     ?0        ?0                   ?0                  	;1
153 99   GOTO/253                  ?0        ?162                 ?100                	;0
154 101  FETCH_DIM_R/81            $70=      16?5                 101:'user_id'       	;0	<<151
155 101  ASSIGN/38                 ?61       16?8                 $70                 	;0
156 102  FETCH_DIM_R/81            $72=      16?5                 102:'username'      	;0
157 102  ASSIGN/38                 ?63       16?9                 $72                 	;0
158 103  NOP/0                     ?0        ?0                   ?0                  	;1
159 103  GOTO/253                  ?0        ?160                 ?103                	;0
160 105  NOP/0                     ?0        ?0                   ?0                  	;1
161 105  GOTO/253                  ?0        ?176                 ?104                	;0
162 107  FETCH_DIM_R/81            $74=      16?5                 105:'user_id'       	;0
163 107  CONCAT/8                  #75=      106:'<a href=\'line?id=' $74                 	;0
164 107  CONCAT/8                  #76=      #75                  107:'\'>'           	;0
165 107  FETCH_DIM_R/81            $77=      16?5                 108:'user_id'       	;0
166 107  CONCAT/8                  #78=      #76                  $77                 	;0
167 107  CONCAT/8                  #79=      #78                  109:'</a>'          	;0
168 107  ASSIGN/38                 ?70       16?8                 #79                 	;0
169 108  FETCH_DIM_R/81            $81=      16?5                 110:'user_id'       	;0
170 108  CONCAT/8                  #82=      111:'<a href=\'line?id=' $81                 	;0
171 108  CONCAT/8                  #83=      #82                  112:'\'>'           	;0
172 108  FETCH_DIM_R/81            $84=      16?5                 113:'username'      	;0
173 108  CONCAT/8                  #85=      #83                  $84                 	;0
174 108  CONCAT/8                  #86=      #85                  114:'</a>'          	;0
175 108  ASSIGN/38                 ?77       16?9                 #86                 	;0
176 110  NOP/0                     ?0        ?0                   ?0                  	;1
177 110  GOTO/253                  ?0        ?136                 ?115                	;0
178 111  JMP/42                    ?0        ?91                  ?0                  	;0	>>91
179 111  FE_FREE/127               ?0        $45                  ?0                  	;0	<<90
180 114  ECHO/40                   ?0        116:'                            </tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
181 115  GOTO/253                  ?0        ?191                 ?117                	;0
182 117  INCLUDE_OR_EVAL/73        ?78       118:'session.php'    ?0                  	;2	<<0
183 118  INCLUDE_OR_EVAL/73        ?79       119:'functions.php'  ?0                  	;2
184 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'e6d500e19634D513'	;0
185 119  DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
186 119  JMPZ/43                   ?0        $90                  ?188                	;0	>>188
187 120  GOTO/253                  ?0        ?190                 ?122                	;0
188 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'e72F42A93714Ba87'	;0	<<186
189 122  DO_FCALL_BY_NAME/131      ?81       ?0                   ?0                  	;0
190 124  GOTO/253                  ?0        ?1                   ?125                	;0
191 126  INCLUDE_OR_EVAL/73        ?82       126:'footer.php'     ?0                  	;2
192 127  NOP/0                     ?0        127:1                ?0                  	;4294967295
*/

?>
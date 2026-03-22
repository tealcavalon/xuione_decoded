<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?238                 ?0                  	;0	>>238
1   5    ECHO/40                   ?0        1:' selected'        ?0                  	;0
2   7    ECHO/40                   ?0        2:'>Stopped</option>
                                    <option value="3"' ?0                  	;0
3   8    FETCH_STATIC_PROP_IS/176  $6=       3:'rRequest'         4:'XUI'             	;0
4   8    ISSET_ISEMPTY_DIM_OBJ/115 #7=       $6                   6:'filter'          	;33554432
5   8    JMPZ_EX/46                #7=       #7                   ?10                 	;0	>>10
6   8    FETCH_STATIC_PROP_R/173   $8=       7:'rRequest'         8:'XUI'             	;0
7   8    FETCH_DIM_R/81            $9=       $8                   10:'filter'         	;0
8   8    IS_EQUAL/17               #10=      $9                   11:3                	;0
9   8    BOOL/52                   #7=       #10                  ?0                  	;0
10  8    BOOL_NOT/13               #11=      #7                   ?0                  	;0	<<5
11  8    JMPZ/43                   ?0        #11                  ?13                 	;0	>>13
12  9    GOTO/253                  ?0        ?225                 ?12                 	;0
13  11   ECHO/40                   ?0        13:' selected'       ?0                  	;0	<<11
14  12   GOTO/253                  ?0        ?225                 ?14                 	;0
15  14   FETCH_STATIC_PROP_IS/176  $12=      15:'rRequest'        16:'XUI'            	;0
16  14   ISSET_ISEMPTY_DIM_OBJ/115 #13=      $12                  18:'filter'         	;33554432
17  14   JMPZ_EX/46                #13=      #13                  ?22                 	;0	>>22
18  14   FETCH_STATIC_PROP_R/173   $14=      19:'rRequest'        20:'XUI'            	;0
19  14   FETCH_DIM_R/81            $15=      $14                  22:'filter'         	;0
20  14   IS_EQUAL/17               #16=      $15                  23:1                	;0
21  14   BOOL/52                   #13=      #16                  ?0                  	;0
22  14   BOOL_NOT/13               #17=      #13                  ?0                  	;0	<<17
23  14   JMPZ/43                   ?0        #17                  ?25                 	;0	>>25
24  15   GOTO/253                  ?0        ?26                  ?24                 	;0
25  17   ECHO/40                   ?0        25:' selected'       ?0                  	;0	<<23
26  19   ECHO/40                   ?0        26:'>Online</option>
                                    <option value="2"' ?0                  	;0
27  20   FETCH_STATIC_PROP_IS/176  $18=      27:'rRequest'        28:'XUI'            	;0
28  20   ISSET_ISEMPTY_DIM_OBJ/115 #19=      $18                  30:'filter'         	;33554432
29  20   JMPZ_EX/46                #19=      #19                  ?34                 	;0	>>34
30  20   FETCH_STATIC_PROP_R/173   $20=      31:'rRequest'        32:'XUI'            	;0
31  20   FETCH_DIM_R/81            $21=      $20                  34:'filter'         	;0
32  20   IS_EQUAL/17               #22=      $21                  35:2                	;0
33  20   BOOL/52                   #19=      #22                  ?0                  	;0
34  20   BOOL_NOT/13               #23=      #19                  ?0                  	;0	<<29
35  20   JMPZ/43                   ?0        #23                  ?37                 	;0	>>37
36  21   GOTO/253                  ?0        ?2                   ?36                 	;0
37  23   GOTO/253                  ?0        ?1                   ?37                 	;0	<<35
38  26   ECHO/40                   ?0        38:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
39  27   INCLUDE_OR_EVAL/73        ?18       39:'topbar.php'      ?0                  	;2
40  28   ECHO/40                   ?0        40:'					</div>
					<h4 class="page-title">Created Channels</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
41  29   BOOL_NOT/13               #25=      16?0                 ?0                  	;0
42  29   JMPZ/43                   ?0        #25                  ?44                 	;0	>>44
43  30   GOTO/253                  ?0        ?58                  ?41                 	;0
44  32   GOTO/253                  ?0        ?57                  ?42                 	;0	<<42
45  34   ECHO/40                   ?0        43:'                                    <th>Server</th>
									' ?0                  	;0
46  35   GOTO/253                  ?0        ?48                  ?44                 	;0
47  37   ECHO/40                   ?0        45:'									<th>Servers</th>
                                    ' ?0                  	;0
48  39   GOTO/253                  ?0        ?173                 ?46                 	;0
49  41   ECHO/40                   ?0        47:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="stream_filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
50  42   FETCH_STATIC_PROP_IS/176  $26=      48:'rRequest'        49:'XUI'            	;0
51  42   ISSET_ISEMPTY_DIM_OBJ/115 #27=      $26                  51:'filter'         	;33554432
52  42   JMPZ/43                   ?0        #27                  ?54                 	;0	>>54
53  43   GOTO/253                  ?0        ?55                  ?52                 	;0
54  45   ECHO/40                   ?0        53:' selected'       ?0                  	;0	<<52
55  47   ECHO/40                   ?0        54:'>No Filter</option>
                                    <option value="1"' ?0                  	;0
56  48   GOTO/253                  ?0        ?15                  ?55                 	;0
57  50   ECHO/40                   ?0        56:'collapse'        ?0                  	;0
58  52   ECHO/40                   ?0        57:' form-group row mb-4">
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="stream_search" value="' ?0                  	;0
59  53   FETCH_STATIC_PROP_IS/176  $28=      58:'rRequest'        59:'XUI'            	;0
60  53   ISSET_ISEMPTY_DIM_OBJ/115 #29=      $28                  61:'search'         	;33554432
61  53   BOOL_NOT/13               #30=      #29                  ?0                  	;0
62  53   JMPZ/43                   ?0        #30                  ?64                 	;0	>>64
63  54   GOTO/253                  ?0        ?160                 ?62                 	;0
64  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'htmlspecialchars'	;1	<<62
65  56   FETCH_STATIC_PROP_FUNC_ARG/177 $31=      65:'rRequest'        66:'XUI'            	;1
66  56   FETCH_DIM_FUNC_ARG/93     $32=      $31                  68:'search'         	;1
67  56   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
68  56   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
69  56   ECHO/40                   ?0        $33                  ?0                  	;0
70  57   GOTO/253                  ?0        ?160                 ?69                 	;0
71  59   ECHO/40                   ?0        70:'>No Servers</option>
                                    ' ?0                  	;0
72  60   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'c6A90BFcd425EB63'	;0
73  60   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
74  60   FE_RESET_R/77             $35=      $34                  ?98                 	;0
75  60   FE_FETCH_R/78             ?0        $35                  16?1                	;98	>>98	<<97
76  61   ECHO/40                   ?0        73:'                                    <option value="' ?0                  	;0
77  62   FETCH_DIM_R/81            $36=      16?1                 74:'id'             	;0
78  62   ECHO/40                   ?0        $36                  ?0                  	;0
79  63   ECHO/40                   ?0        75:'"'               ?0                  	;0
80  64   FETCH_STATIC_PROP_IS/176  $37=      76:'rRequest'        77:'XUI'            	;0
81  64   ISSET_ISEMPTY_DIM_OBJ/115 #38=      $37                  79:'server'         	;33554432
82  64   JMPZ_EX/46                #38=      #38                  ?88                 	;0	>>88
83  64   FETCH_STATIC_PROP_R/173   $39=      80:'rRequest'        81:'XUI'            	;0
84  64   FETCH_DIM_R/81            $40=      $39                  83:'server'         	;0
85  64   FETCH_DIM_R/81            $41=      16?1                 84:'id'             	;0
86  64   IS_EQUAL/17               #42=      $40                  $41                 	;0
87  64   BOOL/52                   #38=      #42                  ?0                  	;0
88  64   BOOL_NOT/13               #43=      #38                  ?0                  	;0	<<82
89  64   JMPZ/43                   ?0        #43                  ?92                 	;0	>>92
90  65   NOP/0                     ?0        ?0                   ?0                  	;1
91  65   GOTO/253                  ?0        ?93                  ?85                 	;0
92  67   ECHO/40                   ?0        86:' selected'       ?0                  	;0	<<89
93  69   ECHO/40                   ?0        87:'>'               ?0                  	;0
94  70   FETCH_DIM_R/81            $44=      16?1                 88:'server_name'    	;0
95  70   ECHO/40                   ?0        $44                  ?0                  	;0
96  71   ECHO/40                   ?0        89:'</option>
                                    ' ?0                  	;0
97  72   JMP/42                    ?0        ?75                  ?0                  	;0	>>75
98  72   FE_FREE/127               ?0        $35                  ?0                  	;0	<<74
99  75   ECHO/40                   ?0        90:'                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="stream_category_id" class="form-control" data-toggle="select2">
                                    <option value="" selected>All Categories</option>
                                    <option value="-1"' ?0                  	;0
100 76   FETCH_STATIC_PROP_IS/176  $45=      91:'rRequest'        92:'XUI'            	;0
101 76   ISSET_ISEMPTY_DIM_OBJ/115 #46=      $45                  94:'category'       	;33554432
102 76   JMPZ_EX/46                #46=      #46                  ?107                	;0	>>107
103 76   FETCH_STATIC_PROP_R/173   $47=      95:'rRequest'        96:'XUI'            	;0
104 76   FETCH_DIM_R/81            $48=      $47                  98:'category'       	;0
105 76   IS_EQUAL/17               #49=      $48                  99:-1               	;0
106 76   BOOL/52                   #46=      #49                  ?0                  	;0
107 76   BOOL_NOT/13               #50=      #46                  ?0                  	;0	<<102
108 76   JMPZ/43                   ?0        #50                  ?110                	;0	>>110
109 77   GOTO/253                  ?0        ?176                 ?100                	;0
110 79   GOTO/253                  ?0        ?175                 ?101                	;0	<<108
111 81   ECHO/40                   ?0        102:'>Transcoding</option>
                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="stream_show_entries">Show</label>
                            <div class="col-md-1">
                                <select id="stream_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
112 82   FE_RESET_R/77             $51=      103:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?153                	;0
113 82   FE_FETCH_R/78             ?0        $51                  16?2                	;153	>>153	<<152
114 83   NOP/0                     ?0        ?0                   ?0                  	;1
115 83   GOTO/253                  ?0        ?134                 ?104                	;0
116 86   ECHO/40                   ?0        105:' value="'       ?0                  	;0
117 87   ECHO/40                   ?0        16?2                 ?0                  	;0
118 88   ECHO/40                   ?0        106:'">'             ?0                  	;0
119 89   ECHO/40                   ?0        16?2                 ?0                  	;0
120 90   NOP/0                     ?0        ?0                   ?0                  	;1
121 90   GOTO/253                  ?0        ?149                 ?107                	;0
122 92   NOP/0                     ?0        ?0                   ?0                  	;1
123 92   GOTO/253                  ?0        ?116                 ?108                	;0
124 94   FETCH_STATIC_PROP_R/173   $52=      109:'rRequest'       110:'XUI'           	;0
125 94   FETCH_DIM_R/81            $53=      $52                  112:'entries'       	;0
126 94   IS_EQUAL/17               #54=      $53                  16?2                	;0
127 94   BOOL_NOT/13               #55=      #54                  ?0                  	;0
128 94   JMPZ/43                   ?0        #55                  ?131                	;0	>>131
129 95   NOP/0                     ?0        ?0                   ?0                  	;1
130 95   GOTO/253                  ?0        ?132                 ?113                	;0
131 97   ECHO/40                   ?0        114:' selected'      ?0                  	;0	<<128
132 99   NOP/0                     ?0        ?0                   ?0                  	;1
133 99   GOTO/253                  ?0        ?116                 ?115                	;0
134 101  ECHO/40                   ?0        116:'                                    <option' ?0                  	;0
135 102  FETCH_STATIC_PROP_IS/176  $56=      117:'rRequest'       118:'XUI'           	;0
136 102  ISSET_ISEMPTY_DIM_OBJ/115 #57=      $56                  120:'entries'       	;33554432
137 102  JMPZ/43                   ?0        #57                  ?140                	;0	>>140
138 103  NOP/0                     ?0        ?0                   ?0                  	;1
139 103  GOTO/253                  ?0        ?124                 ?121                	;0
140 105  FETCH_DIM_R/81            $58=      16?3                 122:'default_entries'	;0	<<137
141 105  IS_EQUAL/17               #59=      $58                  16?2                	;0
142 105  BOOL_NOT/13               #60=      #59                  ?0                  	;0
143 105  JMPZ/43                   ?0        #60                  ?146                	;0	>>146
144 106  NOP/0                     ?0        ?0                   ?0                  	;1
145 106  GOTO/253                  ?0        ?147                 ?123                	;0
146 108  ECHO/40                   ?0        124:' selected'      ?0                  	;0	<<143
147 110  NOP/0                     ?0        ?0                   ?0                  	;1
148 110  GOTO/253                  ?0        ?122                 ?125                	;0
149 112  ECHO/40                   ?0        126:'</option>
                                    ' ?0                  	;0
150 114  NOP/0                     ?0        ?0                   ?0                  	;1
151 114  GOTO/253                  ?0        ?152                 ?127                	;0
152 115  JMP/42                    ?0        ?113                 ?0                  	;0	>>113
153 115  FE_FREE/127               ?0        $51                  ?0                  	;0	<<112
154 118  ECHO/40                   ?0        128:'                                </select>
                            </div>
                        </div>
						<table id="datatable-streampage" class="table table-borderless table-striped dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">ID</th>
                                    <th class="text-center">Icon</th>
									<th>Name</th>
                                    ' ?0                  	;0
155 119  FETCH_DIM_R/81            $61=      16?3                 129:'streams_grouped'	;0
156 119  IS_EQUAL/17               #62=      $61                  130:1               	;0
157 119  JMPZ/43                   ?0        #62                  ?159                	;0	>>159
158 120  GOTO/253                  ?0        ?47                  ?131                	;0
159 122  GOTO/253                  ?0        ?45                  ?132                	;0	<<157
160 125  ECHO/40                   ?0        133:'" placeholder="Search Channels...">
                            </div>
                            <div class="col-md-3">
                                <select id="stream_server_id" class="form-control" data-toggle="select2">
                                    <option value="" selected>All Servers</option>
                                    <option value="-1"' ?0                  	;0
161 126  FETCH_STATIC_PROP_IS/176  $63=      134:'rRequest'       135:'XUI'           	;0
162 126  ISSET_ISEMPTY_DIM_OBJ/115 #64=      $63                  137:'server'        	;33554432
163 126  JMPZ_EX/46                #64=      #64                  ?168                	;0	>>168
164 126  FETCH_STATIC_PROP_R/173   $65=      138:'rRequest'       139:'XUI'           	;0
165 126  FETCH_DIM_R/81            $66=      $65                  141:'server'        	;0
166 126  IS_EQUAL/17               #67=      $66                  142:-1              	;0
167 126  BOOL/52                   #64=      #67                  ?0                  	;0
168 126  BOOL_NOT/13               #68=      #64                  ?0                  	;0	<<163
169 126  JMPZ/43                   ?0        #68                  ?171                	;0	>>171
170 127  GOTO/253                  ?0        ?172                 ?143                	;0
171 129  ECHO/40                   ?0        144:' selected'      ?0                  	;0	<<169
172 131  GOTO/253                  ?0        ?71                  ?145                	;0
173 133  ECHO/40                   ?0        146:'									<th class="text-center">Clients</th>
									<th class="text-center">Uptime</th>
									<th class="text-center">Actions</th>
									<th class="text-center">Player</th>
									<th class="text-center">Channel Info</th>
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
174 134  GOTO/253                  ?0        ?247                 ?147                	;0
175 136  ECHO/40                   ?0        148:' selected'      ?0                  	;0
176 138  ECHO/40                   ?0        149:'>No Categories</option>
                                    ' ?0                  	;0
177 139  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'f769e3f0C739D1A6'	;1
178 139  SEND_VAL_EX/116           ?80       152:'live'           ?1                  	;0
179 139  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
180 139  FE_RESET_R/77             $70=      $69                  ?204                	;0
181 139  FE_FETCH_R/78             ?0        $70                  16?4                	;204	>>204	<<203
182 140  ECHO/40                   ?0        153:'                                    <option value="' ?0                  	;0
183 141  FETCH_DIM_R/81            $71=      16?4                 154:'id'            	;0
184 141  ECHO/40                   ?0        $71                  ?0                  	;0
185 142  ECHO/40                   ?0        155:'"'              ?0                  	;0
186 143  FETCH_STATIC_PROP_IS/176  $72=      156:'rRequest'       157:'XUI'           	;0
187 143  ISSET_ISEMPTY_DIM_OBJ/115 #73=      $72                  159:'category'      	;33554432
188 143  JMPZ_EX/46                #73=      #73                  ?194                	;0	>>194
189 143  FETCH_STATIC_PROP_R/173   $74=      160:'rRequest'       161:'XUI'           	;0
190 143  FETCH_DIM_R/81            $75=      $74                  163:'category'      	;0
191 143  FETCH_DIM_R/81            $76=      16?4                 164:'id'            	;0
192 143  IS_EQUAL/17               #77=      $75                  $76                 	;0
193 143  BOOL/52                   #73=      #77                  ?0                  	;0
194 143  BOOL_NOT/13               #78=      #73                  ?0                  	;0	<<188
195 143  JMPZ/43                   ?0        #78                  ?198                	;0	>>198
196 144  NOP/0                     ?0        ?0                   ?0                  	;1
197 144  GOTO/253                  ?0        ?199                 ?165                	;0
198 146  ECHO/40                   ?0        166:' selected'      ?0                  	;0	<<195
199 148  ECHO/40                   ?0        167:'>'              ?0                  	;0
200 149  FETCH_DIM_R/81            $79=      16?4                 168:'category_name' 	;0
201 149  ECHO/40                   ?0        $79                  ?0                  	;0
202 150  ECHO/40                   ?0        169:'</option>
                                    ' ?0                  	;0
203 151  JMP/42                    ?0        ?181                 ?0                  	;0	>>181
204 151  FE_FREE/127               ?0        $70                  ?0                  	;0	<<180
205 154  GOTO/253                  ?0        ?49                  ?170                	;0
206 156  ASSIGN/38                 ?74       16?5                 171:'Created Channels'	;0
207 157  INCLUDE_OR_EVAL/73        ?75       172:'header.php'     ?0                  	;2
208 158  ECHO/40                   ?0        173:'<div class="wrapper"' ?0                  	;0
209 159  FETCH_IS/89               $82=      174:'_SERVER'        ?0                  	;0
210 159  ISSET_ISEMPTY_DIM_OBJ/115 #83=      $82                  175:'HTTP_X_REQUESTED_WITH'	;16777216
211 159  BOOL_NOT/13               #84=      #83                  ?0                  	;0
212 159  JMPZ_EX/46                #84=      #84                  ?220                	;0	>>220
213 159  INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'strtolower'    	;1
214 159  FETCH_FUNC_ARG/92         $85=      178:'_SERVER'        ?0                  	;1
215 159  FETCH_DIM_FUNC_ARG/93     $86=      $85                  179:'HTTP_X_REQUESTED_WITH'	;1
216 159  SEND_VAR_EX/66            ?80       $86                  ?1                  	;0
217 159  DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
218 159  IS_EQUAL/17               #88=      $87                  180:'xmlhttprequest'	;0
219 159  BOOL/52                   #84=      #88                  ?0                  	;0
220 159  BOOL_NOT/13               #89=      #84                  ?0                  	;0	<<212
221 159  JMPZ/43                   ?0        #89                  ?223                	;0	>>223
222 160  GOTO/253                  ?0        ?38                  ?181                	;0
223 162  ECHO/40                   ?0        182:' style="display: none;"' ?0                  	;0	<<221
224 163  GOTO/253                  ?0        ?38                  ?183                	;0
225 166  ECHO/40                   ?0        184:'>Creating</option>
									<option value="4"' ?0                  	;0
226 167  FETCH_STATIC_PROP_IS/176  $90=      185:'rRequest'       186:'XUI'           	;0
227 167  ISSET_ISEMPTY_DIM_OBJ/115 #91=      $90                  188:'filter'        	;33554432
228 167  JMPZ_EX/46                #91=      #91                  ?233                	;0	>>233
229 167  FETCH_STATIC_PROP_R/173   $92=      189:'rRequest'       190:'XUI'           	;0
230 167  FETCH_DIM_R/81            $93=      $92                  192:'filter'        	;0
231 167  IS_EQUAL/17               #94=      $93                  193:4               	;0
232 167  BOOL/52                   #91=      #94                  ?0                  	;0
233 167  BOOL_NOT/13               #95=      #91                  ?0                  	;0	<<228
234 167  JMPZ/43                   ?0        #95                  ?236                	;0	>>236
235 168  GOTO/253                  ?0        ?237                 ?194                	;0
236 170  ECHO/40                   ?0        195:' selected'      ?0                  	;0	<<234
237 172  GOTO/253                  ?0        ?111                 ?196                	;0
238 174  INCLUDE_OR_EVAL/73        ?90       197:'session.php'    ?0                  	;2	<<0
239 175  INCLUDE_OR_EVAL/73        ?91       198:'functions.php'  ?0                  	;2
240 176  INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'e6d500E19634d513'	;0
241 176  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
242 176  JMPZ/43                   ?0        $98                  ?244                	;0	>>244
243 177  GOTO/253                  ?0        ?246                 ?201                	;0
244 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'E72f42A93714ba87'	;0	<<242
245 179  DO_FCALL_BY_NAME/131      ?93       ?0                   ?0                  	;0
246 181  GOTO/253                  ?0        ?206                 ?204                	;0
247 183  INCLUDE_OR_EVAL/73        ?94       205:'footer.php'     ?0                  	;2
248 184  NOP/0                     ?0        206:1                ?0                  	;4294967295
*/

?>
<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?183                 ?0                  	;0	>>183
1   5    FETCH_DIM_R/81            $10=      16?0                 1:'no_filter'       	;0
2   5    ECHO/40                   ?0        $10                  ?0                  	;0
3   6    ECHO/40                   ?0        2:'</option>
                                    <option value="1"' ?0                  	;0
4   7    FETCH_STATIC_PROP_IS/176  $11=      3:'rRequest'         4:'XUI'             	;0
5   7    ISSET_ISEMPTY_DIM_OBJ/115 #12=      $11                  6:'filter'          	;33554432
6   7    JMPZ_EX/46                #12=      #12                  ?11                 	;0	>>11
7   7    FETCH_STATIC_PROP_R/173   $13=      7:'rRequest'         8:'XUI'             	;0
8   7    FETCH_DIM_R/81            $14=      $13                  10:'filter'         	;0
9   7    IS_EQUAL/17               #15=      $14                  11:1                	;0
10  7    BOOL/52                   #12=      #15                  ?0                  	;0
11  7    BOOL_NOT/13               #16=      #12                  ?0                  	;0	<<6
12  7    JMPZ/43                   ?0        #16                  ?14                 	;0	>>14
13  8    GOTO/253                  ?0        ?15                  ?12                 	;0
14  10   ECHO/40                   ?0        13:' selected'       ?0                  	;0	<<12
15  12   GOTO/253                  ?0        ?192                 ?14                 	;0
16  14   ECHO/40                   ?0        15:'</option>
                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="mag_show_entries">' ?0                  	;0
17  15   FETCH_DIM_R/81            $17=      16?0                 16:'show'           	;0
18  15   ECHO/40                   ?0        $17                  ?0                  	;0
19  16   ECHO/40                   ?0        17:'</label>
                            <div class="col-md-1">
                                <select id="mag_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
20  17   FE_RESET_R/77             $18=      18:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?61                 	;0
21  17   FE_FETCH_R/78             ?0        $18                  16?1                	;61	>>61	<<60
22  18   NOP/0                     ?0        ?0                   ?0                  	;1
23  18   GOTO/253                  ?0        ?33                  ?19                 	;0
24  20   ECHO/40                   ?0        20:'</option>
                                    ' ?0                  	;0
25  22   NOP/0                     ?0        ?0                   ?0                  	;1
26  22   GOTO/253                  ?0        ?60                  ?21                 	;0
27  25   ECHO/40                   ?0        22:' value="'        ?0                  	;0
28  26   ECHO/40                   ?0        16?1                 ?0                  	;0
29  27   ECHO/40                   ?0        23:'">'              ?0                  	;0
30  28   ECHO/40                   ?0        16?1                 ?0                  	;0
31  29   NOP/0                     ?0        ?0                   ?0                  	;1
32  29   GOTO/253                  ?0        ?24                  ?24                 	;0
33  31   ECHO/40                   ?0        25:'                                    <option' ?0                  	;0
34  32   FETCH_STATIC_PROP_IS/176  $19=      26:'rRequest'        27:'XUI'            	;0
35  32   ISSET_ISEMPTY_DIM_OBJ/115 #20=      $19                  29:'entries'        	;33554432
36  32   JMPZ/43                   ?0        #20                  ?39                 	;0	>>39
37  33   NOP/0                     ?0        ?0                   ?0                  	;1
38  33   GOTO/253                  ?0        ?50                  ?30                 	;0
39  35   FETCH_DIM_R/81            $21=      16?2                 31:'default_entries'	;0	<<36
40  35   IS_EQUAL/17               #22=      $21                  16?1                	;0
41  35   BOOL_NOT/13               #23=      #22                  ?0                  	;0
42  35   JMPZ/43                   ?0        #23                  ?45                 	;0	>>45
43  36   NOP/0                     ?0        ?0                   ?0                  	;1
44  36   GOTO/253                  ?0        ?46                  ?32                 	;0
45  38   ECHO/40                   ?0        33:' selected'       ?0                  	;0	<<42
46  40   NOP/0                     ?0        ?0                   ?0                  	;1
47  40   GOTO/253                  ?0        ?48                  ?34                 	;0
48  42   NOP/0                     ?0        ?0                   ?0                  	;1
49  42   GOTO/253                  ?0        ?27                  ?35                 	;0
50  44   FETCH_STATIC_PROP_R/173   $24=      36:'rRequest'        37:'XUI'            	;0
51  44   FETCH_DIM_R/81            $25=      $24                  39:'entries'        	;0
52  44   IS_EQUAL/17               #26=      $25                  16?1                	;0
53  44   BOOL_NOT/13               #27=      #26                  ?0                  	;0
54  44   JMPZ/43                   ?0        #27                  ?57                 	;0	>>57
55  45   NOP/0                     ?0        ?0                   ?0                  	;1
56  45   GOTO/253                  ?0        ?58                  ?40                 	;0
57  47   ECHO/40                   ?0        41:' selected'       ?0                  	;0	<<54
58  49   NOP/0                     ?0        ?0                   ?0                  	;1
59  49   GOTO/253                  ?0        ?27                  ?42                 	;0
60  50   JMP/42                    ?0        ?21                  ?0                  	;0	>>21
61  50   FE_FREE/127               ?0        $18                  ?0                  	;0	<<20
62  53   GOTO/253                  ?0        ?106                 ?43                 	;0
63  55   FETCH_DIM_R/81            $28=      16?0                 44:'mac_address'    	;0
64  55   ECHO/40                   ?0        $28                  ?0                  	;0
65  56   ECHO/40                   ?0        45:'</th>
                                    <th class="text-center">Device</th>
									<th>' ?0                  	;0
66  57   FETCH_DIM_R/81            $29=      16?0                 46:'owner'          	;0
67  57   ECHO/40                   ?0        $29                  ?0                  	;0
68  58   ECHO/40                   ?0        47:'</th>
									<th class="text-center">' ?0                  	;0
69  59   FETCH_DIM_R/81            $30=      16?0                 48:'status'         	;0
70  59   ECHO/40                   ?0        $30                  ?0                  	;0
71  60   GOTO/253                  ?0        ?129                 ?49                 	;0
72  62   ASSIGN/38                 ?21       16?3                 50:'MAG Devices'    	;0
73  63   INCLUDE_OR_EVAL/73        ?22       51:'header.php'      ?0                  	;2
74  64   ECHO/40                   ?0        52:'<div class="wrapper">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
75  65   INCLUDE_OR_EVAL/73        ?23       53:'topbar.php'      ?0                  	;2
76  66   ECHO/40                   ?0        54:'					</div>
					<h4 class="page-title">' ?0                  	;0
77  67   GOTO/253                  ?0        ?269                 ?55                 	;0
78  69   FETCH_STATIC_PROP_IS/176  $34=      56:'rRequest'        57:'XUI'            	;0
79  69   ISSET_ISEMPTY_DIM_OBJ/115 #35=      $34                  59:'search'         	;33554432
80  69   BOOL_NOT/13               #36=      #35                  ?0                  	;0
81  69   JMPZ/43                   ?0        #36                  ?83                 	;0	>>83
82  70   GOTO/253                  ?0        ?89                  ?60                 	;0
83  72   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'htmlspecialchars'	;1	<<81
84  72   FETCH_STATIC_PROP_FUNC_ARG/177 $37=      63:'rRequest'        64:'XUI'            	;1
85  72   FETCH_DIM_FUNC_ARG/93     $38=      $37                  66:'search'         	;1
86  72   SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
87  72   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
88  72   ECHO/40                   ?0        $39                  ?0                  	;0
89  74   ECHO/40                   ?0        67:'" placeholder="' ?0                  	;0
90  75   FETCH_DIM_R/81            $40=      16?0                 68:'search_devices' 	;0
91  75   ECHO/40                   ?0        $40                  ?0                  	;0
92  76   GOTO/253                  ?0        ?259                 ?69                 	;0
93  78   ECHO/40                   ?0        70:' selected'       ?0                  	;0
94  80   ECHO/40                   ?0        71:'>'               ?0                  	;0
95  81   FETCH_DIM_R/81            $41=      16?0                 72:'expired'        	;0
96  81   ECHO/40                   ?0        $41                  ?0                  	;0
97  82   ECHO/40                   ?0        73:'</option>
                                    <option value="4"' ?0                  	;0
98  83   GOTO/253                  ?0        ?208                 ?74                 	;0
99  85   ECHO/40                   ?0        75:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
100 86   BOOL_NOT/13               #42=      16?4                 ?0                  	;0
101 86   JMPZ/43                   ?0        #42                  ?103                	;0	>>103
102 87   GOTO/253                  ?0        ?104                 ?76                 	;0
103 89   ECHO/40                   ?0        77:'collapse'        ?0                  	;0	<<101
104 91   ECHO/40                   ?0        78:' form-group row mb-4">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="mag_search" value="' ?0                  	;0
105 92   GOTO/253                  ?0        ?78                  ?79                 	;0
106 94   ECHO/40                   ?0        80:'                                </select>
                            </div>
                        </div>
						<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
107 95   FETCH_DIM_R/81            $43=      16?0                 81:'id'             	;0
108 95   ECHO/40                   ?0        $43                  ?0                  	;0
109 96   ECHO/40                   ?0        82:'</th>
									<th>' ?0                  	;0
110 97   FETCH_DIM_R/81            $44=      16?0                 83:'username'       	;0
111 97   ECHO/40                   ?0        $44                  ?0                  	;0
112 98   ECHO/40                   ?0        84:'</th>
									<th class="text-center">' ?0                  	;0
113 99   GOTO/253                  ?0        ?63                  ?85                 	;0
114 102  ECHO/40                   ?0        86:'>'               ?0                  	;0
115 103  FETCH_DIM_R/81            $45=      16?0                 87:'disabled'       	;0
116 103  ECHO/40                   ?0        $45                  ?0                  	;0
117 104  ECHO/40                   ?0        88:'</option>
                                    <option value="3"' ?0                  	;0
118 105  FETCH_STATIC_PROP_IS/176  $46=      89:'rRequest'        90:'XUI'            	;0
119 105  ISSET_ISEMPTY_DIM_OBJ/115 #47=      $46                  92:'filter'         	;33554432
120 105  JMPZ_EX/46                #47=      #47                  ?125                	;0	>>125
121 105  FETCH_STATIC_PROP_R/173   $48=      93:'rRequest'        94:'XUI'            	;0
122 105  FETCH_DIM_R/81            $49=      $48                  96:'filter'         	;0
123 105  IS_EQUAL/17               #50=      $49                  97:4                	;0
124 105  BOOL/52                   #47=      #50                  ?0                  	;0
125 105  BOOL_NOT/13               #51=      #47                  ?0                  	;0	<<120
126 105  JMPZ/43                   ?0        #51                  ?128                	;0	>>128
127 106  GOTO/253                  ?0        ?94                  ?98                 	;0
128 108  GOTO/253                  ?0        ?93                  ?99                 	;0	<<126
129 110  ECHO/40                   ?0        100:'</th>
									<th class="text-center">' ?0                  	;0
130 111  FETCH_DIM_R/81            $52=      16?0                 101:'online'        	;0
131 111  ECHO/40                   ?0        $52                  ?0                  	;0
132 112  ECHO/40                   ?0        102:'</th>
									<th class="text-center">' ?0                  	;0
133 113  FETCH_DIM_R/81            $53=      16?0                 103:'trial'         	;0
134 113  ECHO/40                   ?0        $53                  ?0                  	;0
135 114  ECHO/40                   ?0        104:'</th>
									<th class="text-center">' ?0                  	;0
136 115  GOTO/253                  ?0        ?331                 ?105                	;0
137 117  ECHO/40                   ?0        106:'                                    <optgroup label="Indirect Reports">
                                        ' ?0                  	;0
138 118  FETCH_DIM_R/81            $54=      16?5                 107:'all_reports'   	;0
139 118  FE_RESET_R/77             $55=      $54                  ?180                	;0
140 118  FE_FETCH_R/78             ?0        $55                  16?6                	;180	>>180	<<179
141 119  NOP/0                     ?0        ?0                   ?0                  	;1
142 119  GOTO/253                  ?0        ?163                 ?108                	;0
143 121  ECHO/40                   ?0        109:'</option>
                                            ' ?0                  	;0
144 124  NOP/0                     ?0        ?0                   ?0                  	;1
145 124  GOTO/253                  ?0        ?179                 ?110                	;0
146 126  FETCH_STATIC_PROP_IS/176  $56=      111:'rRequest'       112:'XUI'           	;0
147 126  ISSET_ISEMPTY_DIM_OBJ/115 #57=      $56                  114:'owner'         	;33554432
148 126  JMPZ_EX/46                #57=      #57                  ?153                	;0	>>153
149 126  FETCH_STATIC_PROP_R/173   $58=      115:'rRequest'       116:'XUI'           	;0
150 126  FETCH_DIM_R/81            $59=      $58                  118:'owner'         	;0
151 126  IS_EQUAL/17               #60=      $59                  16?6                	;0
152 126  BOOL/52                   #57=      #60                  ?0                  	;0
153 126  BOOL_NOT/13               #61=      #57                  ?0                  	;0	<<148
154 126  JMPZ/43                   ?0        #61                  ?157                	;0	>>157
155 127  NOP/0                     ?0        ?0                   ?0                  	;1
156 127  GOTO/253                  ?0        ?158                 ?119                	;0
157 129  ECHO/40                   ?0        120:' selected'      ?0                  	;0	<<154
158 131  ECHO/40                   ?0        121:'>'              ?0                  	;0
159 132  FETCH_DIM_R/81            $62=      16?7                 122:'username'      	;0
160 132  ECHO/40                   ?0        $62                  ?0                  	;0
161 133  NOP/0                     ?0        ?0                   ?0                  	;1
162 133  GOTO/253                  ?0        ?143                 ?123                	;0
163 135  INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'in_array'      	;2
164 135  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
165 135  FETCH_DIM_FUNC_ARG/93     $63=      16?5                 126:'direct_reports'	;2
166 135  SEND_VAR_EX/66            ?96       $63                  ?2                  	;0
167 135  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
168 135  JMPZ/43                   ?0        $64                  ?171                	;0	>>171
169 136  NOP/0                     ?0        ?0                   ?0                  	;1
170 136  GOTO/253                  ?0        ?144                 ?127                	;0
171 138  FETCH_DIM_R/81            $65=      16?5                 128:'users'         	;0	<<168
172 138  FETCH_DIM_R/81            $66=      $65                  16?6                	;0
173 138  ASSIGN/38                 ?57       16?7                 $66                 	;0
174 139  ECHO/40                   ?0        129:'                                            <option value="' ?0                  	;0
175 140  ECHO/40                   ?0        16?6                 ?0                  	;0
176 141  ECHO/40                   ?0        130:'"'              ?0                  	;0
177 142  NOP/0                     ?0        ?0                   ?0                  	;1
178 142  GOTO/253                  ?0        ?146                 ?131                	;0
179 143  JMP/42                    ?0        ?140                 ?0                  	;0	>>140
180 143  FE_FREE/127               ?0        $55                  ?0                  	;0	<<139
181 146  ECHO/40                   ?0        132:'                                    </optgroup>
                                    ' ?0                  	;0
182 148  GOTO/253                  ?0        ?223                 ?133                	;0
183 150  INCLUDE_OR_EVAL/73        ?58       134:'session.php'    ?0                  	;2	<<0
184 151  INCLUDE_OR_EVAL/73        ?59       135:'functions.php'  ?0                  	;2
185 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   136:'baF6E9eF7775B5a9'	;0
186 152  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
187 152  JMPZ/43                   ?0        $70                  ?189                	;0	>>189
188 153  GOTO/253                  ?0        ?191                 ?138                	;0
189 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'e72f42a93714Ba87'	;0	<<187
190 155  DO_FCALL_BY_NAME/131      ?61       ?0                   ?0                  	;0
191 157  GOTO/253                  ?0        ?72                  ?141                	;0
192 159  ECHO/40                   ?0        142:'>'              ?0                  	;0
193 160  FETCH_DIM_R/81            $72=      16?0                 143:'active'        	;0
194 160  ECHO/40                   ?0        $72                  ?0                  	;0
195 161  ECHO/40                   ?0        144:'</option>
                                    <option value="2"' ?0                  	;0
196 162  FETCH_STATIC_PROP_IS/176  $73=      145:'rRequest'       146:'XUI'           	;0
197 162  ISSET_ISEMPTY_DIM_OBJ/115 #74=      $73                  148:'filter'        	;33554432
198 162  JMPZ_EX/46                #74=      #74                  ?203                	;0	>>203
199 162  FETCH_STATIC_PROP_R/173   $75=      149:'rRequest'       150:'XUI'           	;0
200 162  FETCH_DIM_R/81            $76=      $75                  152:'filter'        	;0
201 162  IS_EQUAL/17               #77=      $76                  153:2               	;0
202 162  BOOL/52                   #74=      #77                  ?0                  	;0
203 162  BOOL_NOT/13               #78=      #74                  ?0                  	;0	<<198
204 162  JMPZ/43                   ?0        #78                  ?206                	;0	>>206
205 163  GOTO/253                  ?0        ?114                 ?154                	;0
206 165  ECHO/40                   ?0        155:' selected'      ?0                  	;0	<<204
207 166  GOTO/253                  ?0        ?114                 ?156                	;0
208 168  FETCH_STATIC_PROP_IS/176  $79=      157:'rRequest'       158:'XUI'           	;0
209 168  ISSET_ISEMPTY_DIM_OBJ/115 #80=      $79                  160:'filter'        	;33554432
210 168  JMPZ_EX/46                #80=      #80                  ?215                	;0	>>215
211 168  FETCH_STATIC_PROP_R/173   $81=      161:'rRequest'       162:'XUI'           	;0
212 168  FETCH_DIM_R/81            $82=      $81                  164:'filter'        	;0
213 168  IS_EQUAL/17               #83=      $82                  165:5               	;0
214 168  BOOL/52                   #80=      #83                  ?0                  	;0
215 168  BOOL_NOT/13               #84=      #80                  ?0                  	;0	<<210
216 168  JMPZ/43                   ?0        #84                  ?218                	;0	>>218
217 169  GOTO/253                  ?0        ?219                 ?166                	;0
218 171  ECHO/40                   ?0        167:' selected'      ?0                  	;0	<<216
219 173  ECHO/40                   ?0        168:'>'              ?0                  	;0
220 174  FETCH_DIM_R/81            $85=      16?0                 169:'trial'         	;0
221 174  ECHO/40                   ?0        $85                  ?0                  	;0
222 175  GOTO/253                  ?0        ?16                  ?170                	;0
223 177  ECHO/40                   ?0        171:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="mag_filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
224 178  FETCH_STATIC_PROP_IS/176  $86=      172:'rRequest'       173:'XUI'           	;0
225 178  ISSET_ISEMPTY_DIM_OBJ/115 #87=      $86                  175:'filter'        	;33554432
226 178  JMPZ/43                   ?0        #87                  ?228                	;0	>>228
227 179  GOTO/253                  ?0        ?229                 ?176                	;0
228 181  ECHO/40                   ?0        177:' selected'      ?0                  	;0	<<226
229 183  ECHO/40                   ?0        178:'>'              ?0                  	;0
230 184  GOTO/253                  ?0        ?1                   ?179                	;0
231 187  ECHO/40                   ?0        180:'>All Owners</option>
                                        <option value="' ?0                  	;0
232 188  FETCH_DIM_R/81            $88=      16?8                 181:'id'            	;0
233 188  ECHO/40                   ?0        $88                  ?0                  	;0
234 189  ECHO/40                   ?0        182:'"'              ?0                  	;0
235 190  FETCH_STATIC_PROP_IS/176  $89=      183:'rRequest'       184:'XUI'           	;0
236 190  ISSET_ISEMPTY_DIM_OBJ/115 #90=      $89                  186:'owner'         	;33554432
237 190  JMPZ_EX/46                #90=      #90                  ?243                	;0	>>243
238 190  FETCH_STATIC_PROP_R/173   $91=      187:'rRequest'       188:'XUI'           	;0
239 190  FETCH_DIM_R/81            $92=      $91                  190:'owner'         	;0
240 190  FETCH_DIM_R/81            $93=      16?8                 191:'id'            	;0
241 190  IS_EQUAL/17               #94=      $92                  $93                 	;0
242 190  BOOL/52                   #90=      #94                  ?0                  	;0
243 190  BOOL_NOT/13               #95=      #90                  ?0                  	;0	<<237
244 190  JMPZ/43                   ?0        #95                  ?246                	;0	>>246
245 191  GOTO/253                  ?0        ?248                 ?192                	;0
246 193  GOTO/253                  ?0        ?247                 ?193                	;0	<<244
247 195  ECHO/40                   ?0        194:' selected'      ?0                  	;0
248 197  ECHO/40                   ?0        195:'>My Devices</option>
                                    </optgroup>
                                    ' ?0                  	;0
249 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'count'         	;1
250 198  FETCH_DIM_FUNC_ARG/93     $96=      16?5                 198:'direct_reports'	;1
251 198  SEND_VAR_EX/66            ?80       $96                  ?1                  	;0
252 198  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
253 198  IS_SMALLER/19             #98=      199:0                $97                 	;0
254 198  BOOL_NOT/13               #99=      #98                  ?0                  	;0
255 198  JMPZ/43                   ?0        #99                  ?257                	;0	>>257
256 199  GOTO/253                  ?0        ?318                 ?200                	;0
257 201  ECHO/40                   ?0        201:'                                    <optgroup label="Direct Reports">
                                        ' ?0                  	;0	<<255
258 202  GOTO/253                  ?0        ?282                 ?202                	;0
259 204  ECHO/40                   ?0        203:'...">
                            </div>
                            <label class="col-md-2 col-form-label text-center" for="mag_reseller">' ?0                  	;0
260 205  FETCH_DIM_R/81            $100=     16?0                 204:'filter_results'	;0
261 205  ECHO/40                   ?0        $100                 ?0                  	;0
262 206  ECHO/40                   ?0        205:'</label>
                            <div class="col-md-3">
                                <select id="mag_reseller" class="form-control" data-toggle="select2">
                                    <optgroup label="Global">
                                        <option value=""' ?0                  	;0
263 207  FETCH_STATIC_PROP_IS/176  $101=     206:'rRequest'       207:'XUI'           	;0
264 207  ISSET_ISEMPTY_DIM_OBJ/115 #102=     $101                 209:'owner'         	;33554432
265 207  JMPZ/43                   ?0        #102                 ?267                	;0	>>267
266 208  GOTO/253                  ?0        ?231                 ?210                	;0
267 210  ECHO/40                   ?0        211:' selected'      ?0                  	;0	<<265
268 211  GOTO/253                  ?0        ?231                 ?212                	;0
269 213  FETCH_DIM_R/81            $103=     16?0                 213:'mag_devices'   	;0
270 213  ECHO/40                   ?0        $103                 ?0                  	;0
271 214  ECHO/40                   ?0        214:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
272 215  ISSET_ISEMPTY_CV/197      #104=     16?9                 ?0                  	;33554432
273 215  JMPZ_EX/46                #104=     #104                 ?277                	;0	>>277
274 215  FETCH_CONSTANT/99         #105=     ?0                   215:'STATUS_SUCCESS'	;16
275 215  IS_EQUAL/17               #106=     16?9                 #105                	;0
276 215  BOOL/52                   #104=     #106                 ?0                  	;0
277 215  BOOL_NOT/13               #107=     #104                 ?0                  	;0	<<273
278 215  JMPZ/43                   ?0        #107                 ?280                	;0	>>280
279 216  GOTO/253                  ?0        ?281                 ?218                	;0
280 218  ECHO/40                   ?0        219:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Device has been added / modified.
                </div>
                ' ?0                  	;0	<<278
281 220  GOTO/253                  ?0        ?99                  ?220                	;0
282 222  FETCH_DIM_R/81            $108=     16?5                 221:'direct_reports'	;0
283 222  FE_RESET_R/77             $109=     $108                 ?316                	;0
284 222  FE_FETCH_R/78             ?0        $109                 16?6                	;316	>>316	<<315
285 223  NOP/0                     ?0        ?0                   ?0                  	;1
286 223  GOTO/253                  ?0        ?296                 ?222                	;0
287 226  NOP/0                     ?0        ?0                   ?0                  	;1
288 226  GOTO/253                  ?0        ?315                 ?223                	;0
289 228  ECHO/40                   ?0        224:' selected'      ?0                  	;0
290 230  ECHO/40                   ?0        225:'>'              ?0                  	;0
291 231  FETCH_DIM_R/81            $110=     16?7                 226:'username'      	;0
292 231  ECHO/40                   ?0        $110                 ?0                  	;0
293 232  ECHO/40                   ?0        227:'</option>
                                        ' ?0                  	;0
294 233  NOP/0                     ?0        ?0                   ?0                  	;1
295 233  GOTO/253                  ?0        ?287                 ?228                	;0
296 235  FETCH_DIM_R/81            $111=     16?5                 229:'users'         	;0
297 235  FETCH_DIM_R/81            $112=     $111                 16?6                	;0
298 235  ASSIGN/38                 ?103      16?7                 $112                	;0
299 236  ECHO/40                   ?0        230:'                                        <option value="' ?0                  	;0
300 237  ECHO/40                   ?0        16?6                 ?0                  	;0
301 238  ECHO/40                   ?0        231:'"'              ?0                  	;0
302 239  FETCH_STATIC_PROP_IS/176  $114=     232:'rRequest'       233:'XUI'           	;0
303 239  ISSET_ISEMPTY_DIM_OBJ/115 #115=     $114                 235:'owner'         	;33554432
304 239  JMPZ_EX/46                #115=     #115                 ?309                	;0	>>309
305 239  FETCH_STATIC_PROP_R/173   $116=     236:'rRequest'       237:'XUI'           	;0
306 239  FETCH_DIM_R/81            $117=     $116                 239:'owner'         	;0
307 239  IS_EQUAL/17               #118=     $117                 16?6                	;0
308 239  BOOL/52                   #115=     #118                 ?0                  	;0
309 239  BOOL_NOT/13               #119=     #115                 ?0                  	;0	<<304
310 239  JMPZ/43                   ?0        #119                 ?313                	;0	>>313
311 240  NOP/0                     ?0        ?0                   ?0                  	;1
312 240  GOTO/253                  ?0        ?290                 ?240                	;0
313 242  NOP/0                     ?0        ?0                   ?0                  	;1	<<310
314 242  GOTO/253                  ?0        ?289                 ?241                	;0
315 243  JMP/42                    ?0        ?284                 ?0                  	;0	>>284
316 243  FE_FREE/127               ?0        $109                 ?0                  	;0	<<283
317 246  ECHO/40                   ?0        242:'                                    </optgroup>
                                    ' ?0                  	;0
318 248  INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'count'         	;1
319 248  FETCH_DIM_FUNC_ARG/93     $120=     16?5                 245:'all_reports'   	;1
320 248  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
321 248  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
322 248  INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'count'         	;1
323 248  FETCH_DIM_FUNC_ARG/93     $122=     16?5                 248:'direct_reports'	;1
324 248  SEND_VAR_EX/66            ?80       $122                 ?1                  	;0
325 248  DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
326 248  IS_SMALLER/19             #124=     $123                 $121                	;0
327 248  BOOL_NOT/13               #125=     #124                 ?0                  	;0
328 248  JMPZ/43                   ?0        #125                 ?330                	;0	>>330
329 249  GOTO/253                  ?0        ?182                 ?249                	;0
330 251  GOTO/253                  ?0        ?137                 ?250                	;0	<<328
331 253  FETCH_DIM_R/81            $126=     16?0                 251:'expiration'    	;0
332 253  ECHO/40                   ?0        $126                 ?0                  	;0
333 254  ECHO/40                   ?0        252:'</th>
									<th class="text-center">' ?0                  	;0
334 255  FETCH_DIM_R/81            $127=     16?0                 253:'actions'       	;0
335 255  ECHO/40                   ?0        $127                 ?0                  	;0
336 256  ECHO/40                   ?0        254:'</th>
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
337 257  GOTO/253                  ?0        ?338                 ?255                	;0
338 259  INCLUDE_OR_EVAL/73        ?118      256:'footer.php'     ?0                  	;2
339 260  NOP/0                     ?0        257:1                ?0                  	;4294967295
*/

?>
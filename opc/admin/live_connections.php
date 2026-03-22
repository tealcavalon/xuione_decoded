<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?295                 ?0                  	;0	>>295
1   6    ECHO/40                   ?0        1:'" placeholder="'  ?0                  	;0
2   7    FETCH_DIM_R/81            $8=       16?0                 2:'search_logs'     	;0
3   7    ECHO/40                   ?0        $8                   ?0                  	;0
4   8    ECHO/40                   ?0        3:'...">
                            </div>
                            <div class="col-md-2">
                                <select id="live_server" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
5   9    FETCH_STATIC_PROP_IS/176  $9=       4:'rRequest'         5:'XUI'             	;0
6   9    ISSET_ISEMPTY_DIM_OBJ/115 #10=      $9                   7:'server'          	;33554432
7   9    JMPZ/43                   ?0        #10                  ?9                  	;0	>>9
8   10   GOTO/253                  ?0        ?365                 ?8                  	;0
9   12   GOTO/253                  ?0        ?364                 ?9                  	;0	<<7
10  14   FETCH_DIM_R/81            $11=      16?0                 10:'live_connections'	;0
11  14   ECHO/40                   ?0        $11                  ?0                  	;0
12  15   ECHO/40                   ?0        11:'</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
13  16   BOOL_NOT/13               #12=      16?1                 ?0                  	;0
14  16   JMPZ/43                   ?0        #12                  ?16                 	;0	>>16
15  17   GOTO/253                  ?0        ?17                  ?12                 	;0
16  19   ECHO/40                   ?0        13:'collapse'        ?0                  	;0	<<14
17  21   GOTO/253                  ?0        ?149                 ?14                 	;0
18  23   ECHO/40                   ?0        15:'</option>
                                    ' ?0                  	;0
19  24   FETCH_STATIC_PROP_R/173   $13=      16:'rServers'        17:'XUI'            	;0
20  24   FE_RESET_R/77             $14=      $13                  ?57                 	;0
21  24   FE_FETCH_R/78             ?0        $14                  16?2                	;57	>>57	<<56
22  25   NOP/0                     ?0        ?0                   ?0                  	;1
23  25   GOTO/253                  ?0        ?33                  ?19                 	;0
24  27   ECHO/40                   ?0        20:' selected'       ?0                  	;0
25  29   ECHO/40                   ?0        21:'>'               ?0                  	;0
26  30   FETCH_DIM_R/81            $15=      16?2                 22:'server_name'    	;0
27  30   ECHO/40                   ?0        $15                  ?0                  	;0
28  31   ECHO/40                   ?0        23:'</option>
                                    ' ?0                  	;0
29  32   NOP/0                     ?0        ?0                   ?0                  	;1
30  32   GOTO/253                  ?0        ?31                  ?24                 	;0
31  36   NOP/0                     ?0        ?0                   ?0                  	;1
32  36   GOTO/253                  ?0        ?56                  ?25                 	;0
33  38   FETCH_DIM_R/81            $16=      16?2                 26:'enabled'        	;0
34  38   BOOL_NOT/13               #17=      $16                  ?0                  	;0
35  38   JMPZ/43                   ?0        #17                  ?38                 	;0	>>38
36  39   NOP/0                     ?0        ?0                   ?0                  	;1
37  39   GOTO/253                  ?0        ?31                  ?27                 	;0
38  41   ECHO/40                   ?0        28:'                                    <option value="' ?0                  	;0	<<35
39  42   FETCH_DIM_R/81            $18=      16?2                 29:'id'             	;0
40  42   ECHO/40                   ?0        $18                  ?0                  	;0
41  43   ECHO/40                   ?0        30:'"'               ?0                  	;0
42  44   FETCH_STATIC_PROP_IS/176  $19=      31:'rRequest'        32:'XUI'            	;0
43  44   ISSET_ISEMPTY_DIM_OBJ/115 #20=      $19                  34:'server'         	;33554432
44  44   JMPZ_EX/46                #20=      #20                  ?50                 	;0	>>50
45  44   FETCH_STATIC_PROP_R/173   $21=      35:'rRequest'        36:'XUI'            	;0
46  44   FETCH_DIM_R/81            $22=      $21                  38:'server'         	;0
47  44   FETCH_DIM_R/81            $23=      16?2                 39:'id'             	;0
48  44   IS_EQUAL/17               #24=      $22                  $23                 	;0
49  44   BOOL/52                   #20=      #24                  ?0                  	;0
50  44   BOOL_NOT/13               #25=      #20                  ?0                  	;0	<<44
51  44   JMPZ/43                   ?0        #25                  ?54                 	;0	>>54
52  45   NOP/0                     ?0        ?0                   ?0                  	;1
53  45   GOTO/253                  ?0        ?25                  ?40                 	;0
54  47   NOP/0                     ?0        ?0                   ?0                  	;1	<<51
55  47   GOTO/253                  ?0        ?24                  ?41                 	;0
56  48   JMP/42                    ?0        ?21                  ?0                  	;0	>>21
57  48   FE_FREE/127               ?0        $14                  ?0                  	;0	<<20
58  51   ECHO/40                   ?0        42:'                                </select>
                            </div>
                            <div class="col-md-4">
                                <select id="live_stream" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
59  52   ISSET_ISEMPTY_CV/197      #26=      16?3                 ?0                  	;33554432
60  52   BOOL_NOT/13               #27=      #26                  ?0                  	;0
61  52   JMPZ/43                   ?0        #27                  ?63                 	;0	>>63
62  53   GOTO/253                  ?0        ?64                  ?43                 	;0
63  55   GOTO/253                  ?0        ?379                 ?44                 	;0	<<61
64  58   ECHO/40                   ?0        45:'                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="live_line" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
65  59   ISSET_ISEMPTY_CV/197      #28=      16?4                 ?0                  	;33554432
66  59   BOOL_NOT/13               #29=      #28                  ?0                  	;0
67  59   JMPZ/43                   ?0        #29                  ?69                 	;0	>>69
68  60   GOTO/253                  ?0        ?120                 ?46                 	;0
69  62   ECHO/40                   ?0        47:'                                    <option value="' ?0                  	;0	<<67
70  63   INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'intval'         	;1
71  63   FETCH_DIM_FUNC_ARG/93     $30=      16?4                 50:'id'             	;1
72  63   SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
73  63   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
74  63   ECHO/40                   ?0        $31                  ?0                  	;0
75  64   GOTO/253                  ?0        ?116                 ?51                 	;0
76  66   FETCH_DIM_R/81            $32=      16?0                 52:'show'           	;0
77  66   ECHO/40                   ?0        $32                  ?0                  	;0
78  67   ECHO/40                   ?0        53:'</label>
                            <div class="col-md-1">
                                <select id="live_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
79  68   FE_RESET_R/77             $33=      54:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?95                 	;0
80  68   FE_FETCH_R/78             ?0        $33                  16?5                	;95	>>95	<<94
81  69   ECHO/40                   ?0        55:'                                    <option' ?0                  	;0
82  70   FETCH_DIM_R/81            $34=      16?6                 56:'default_entries'	;0
83  70   IS_EQUAL/17               #35=      $34                  16?5                	;0
84  70   BOOL_NOT/13               #36=      #35                  ?0                  	;0
85  70   JMPZ/43                   ?0        #36                  ?88                 	;0	>>88
86  71   NOP/0                     ?0        ?0                   ?0                  	;1
87  71   GOTO/253                  ?0        ?89                  ?57                 	;0
88  73   ECHO/40                   ?0        58:' selected'       ?0                  	;0	<<85
89  75   ECHO/40                   ?0        59:' value="'        ?0                  	;0
90  76   ECHO/40                   ?0        16?5                 ?0                  	;0
91  77   ECHO/40                   ?0        60:'">'              ?0                  	;0
92  78   ECHO/40                   ?0        16?5                 ?0                  	;0
93  79   ECHO/40                   ?0        61:'</option>
                                    ' ?0                  	;0
94  80   JMP/42                    ?0        ?80                  ?0                  	;0	>>80
95  80   FE_FREE/127               ?0        $33                  ?0                  	;0	<<79
96  83   ECHO/40                   ?0        62:'                                </select>
                            </div>
							' ?0                  	;0
97  84   GOTO/253                  ?0        ?268                 ?63                 	;0
98  87   ECHO/40                   ?0        64:'                                </select>
                            </div>
							' ?0                  	;0
99  88   GOTO/253                  ?0        ?268                 ?65                 	;0
100 90   ECHO/40                   ?0        66:'                            <div class="col-md-3">
                                <select id="live_server" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
101 91   GOTO/253                  ?0        ?140                 ?67                 	;0
102 93   ECHO/40                   ?0        68:'>MAG Devices</option>
                                    <option value="3"' ?0                  	;0
103 94   FETCH_STATIC_PROP_IS/176  $37=      69:'rRequest'        70:'XUI'            	;0
104 94   ISSET_ISEMPTY_DIM_OBJ/115 #38=      $37                  72:'filter'         	;33554432
105 94   JMPZ_EX/46                #38=      #38                  ?110                	;0	>>110
106 94   FETCH_STATIC_PROP_R/173   $39=      73:'rRequest'        74:'XUI'            	;0
107 94   FETCH_DIM_R/81            $40=      $39                  76:'filter'         	;0
108 94   IS_EQUAL/17               #41=      $40                  77:3                	;0
109 94   BOOL/52                   #38=      #41                  ?0                  	;0
110 94   BOOL_NOT/13               #42=      #38                  ?0                  	;0	<<105
111 94   JMPZ/43                   ?0        #42                  ?113                	;0	>>113
112 95   GOTO/253                  ?0        ?114                 ?78                 	;0
113 97   ECHO/40                   ?0        79:' selected'       ?0                  	;0	<<111
114 99   ECHO/40                   ?0        80:'>Enigma2 Devices</option>
                                    <option value="4"' ?0                  	;0
115 100  GOTO/253                  ?0        ?205                 ?81                 	;0
116 102  ECHO/40                   ?0        82:'" selected="selected">' ?0                  	;0
117 103  FETCH_DIM_R/81            $43=      16?4                 83:'username'       	;0
118 103  ECHO/40                   ?0        $43                  ?0                  	;0
119 104  ECHO/40                   ?0        84:'</option>
                                    ' ?0                  	;0
120 106  ECHO/40                   ?0        85:'                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="live_show_entries">' ?0                  	;0
121 107  GOTO/253                  ?0        ?76                  ?86                 	;0
122 110  ASSIGN/38                 ?36       16?7                 87:'Live Connections'	;0
123 111  INCLUDE_OR_EVAL/73        ?37       88:'header.php'      ?0                  	;2
124 112  ECHO/40                   ?0        89:'<div class="wrapper"' ?0                  	;0
125 113  FETCH_IS/89               $46=      90:'_SERVER'         ?0                  	;0
126 113  ISSET_ISEMPTY_DIM_OBJ/115 #47=      $46                  91:'HTTP_X_REQUESTED_WITH'	;16777216
127 113  BOOL_NOT/13               #48=      #47                  ?0                  	;0
128 113  JMPZ_EX/46                #48=      #48                  ?136                	;0	>>136
129 113  INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'strtolower'     	;1
130 113  FETCH_FUNC_ARG/92         $49=      94:'_SERVER'         ?0                  	;1
131 113  FETCH_DIM_FUNC_ARG/93     $50=      $49                  95:'HTTP_X_REQUESTED_WITH'	;1
132 113  SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
133 113  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
134 113  IS_EQUAL/17               #52=      $51                  96:'xmlhttprequest' 	;0
135 113  BOOL/52                   #48=      #52                  ?0                  	;0
136 113  BOOL_NOT/13               #53=      #48                  ?0                  	;0	<<128
137 113  JMPZ/43                   ?0        #53                  ?139                	;0	>>139
138 114  GOTO/253                  ?0        ?178                 ?97                 	;0
139 116  GOTO/253                  ?0        ?177                 ?98                 	;0	<<137
140 118  FETCH_STATIC_PROP_IS/176  $54=      99:'rRequest'        100:'XUI'           	;0
141 118  ISSET_ISEMPTY_DIM_OBJ/115 #55=      $54                  102:'server'        	;33554432
142 118  JMPZ/43                   ?0        #55                  ?144                	;0	>>144
143 119  GOTO/253                  ?0        ?145                 ?103                	;0
144 121  ECHO/40                   ?0        104:' selected'      ?0                  	;0	<<142
145 123  ECHO/40                   ?0        105:'>'              ?0                  	;0
146 124  FETCH_DIM_R/81            $56=      16?0                 106:'all_servers'   	;0
147 124  ECHO/40                   ?0        $56                  ?0                  	;0
148 125  GOTO/253                  ?0        ?18                  ?107                	;0
149 127  ECHO/40                   ?0        108:' form-group row mb-4">
							' ?0                  	;0
150 128  FETCH_STATIC_PROP_R/173   $57=      109:'rSettings'      110:'XUI'           	;0
151 128  FETCH_DIM_R/81            $58=      $57                  112:'redis_handler' 	;0
152 128  JMPZ/43                   ?0        $58                  ?154                	;0	>>154
153 129  GOTO/253                  ?0        ?100                 ?113                	;0
154 131  ECHO/40                   ?0        114:'							<div class="col-md-2">
                                <input type="text" class="form-control" id="live_search" value="' ?0                  	;0	<<152
155 132  FETCH_STATIC_PROP_IS/176  $59=      115:'rRequest'       116:'XUI'           	;0
156 132  ISSET_ISEMPTY_DIM_OBJ/115 #60=      $59                  118:'search'        	;33554432
157 132  BOOL_NOT/13               #61=      #60                  ?0                  	;0
158 132  JMPZ/43                   ?0        #61                  ?160                	;0	>>160
159 133  GOTO/253                  ?0        ?1                   ?119                	;0
160 135  INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'htmlspecialchars'	;1	<<158
161 135  FETCH_STATIC_PROP_FUNC_ARG/177 $62=      122:'rRequest'       123:'XUI'           	;1
162 135  FETCH_DIM_FUNC_ARG/93     $63=      $62                  125:'search'        	;1
163 135  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
164 135  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
165 135  ECHO/40                   ?0        $64                  ?0                  	;0
166 136  GOTO/253                  ?0        ?1                   ?126                	;0
167 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'intval'        	;1
168 138  FETCH_DIM_FUNC_ARG/93     $65=      16?3                 129:'id'            	;1
169 138  SEND_VAR_EX/66            ?80       $65                  ?1                  	;0
170 138  DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
171 138  ECHO/40                   ?0        $66                  ?0                  	;0
172 139  ECHO/40                   ?0        130:'" selected="selected">' ?0                  	;0
173 140  FETCH_DIM_R/81            $67=      16?3                 131:'stream_display_name'	;0
174 140  ECHO/40                   ?0        $67                  ?0                  	;0
175 141  ECHO/40                   ?0        132:'</option>
                                    ' ?0                  	;0
176 143  GOTO/253                  ?0        ?228                 ?133                	;0
177 145  ECHO/40                   ?0        134:' style="display: none;"' ?0                  	;0
178 147  ECHO/40                   ?0        135:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
179 148  INCLUDE_OR_EVAL/73        ?60       136:'topbar.php'     ?0                  	;2
180 149  ECHO/40                   ?0        137:'					</div>
					<h4 class="page-title">' ?0                  	;0
181 150  GOTO/253                  ?0        ?10                  ?138                	;0
182 152  FETCH_STATIC_PROP_IS/176  $69=      139:'rRequest'       140:'XUI'           	;0
183 152  ISSET_ISEMPTY_DIM_OBJ/115 #70=      $69                  142:'user_id'       	;33554432
184 152  BOOL_NOT/13               #71=      #70                  ?0                  	;0
185 152  JMPZ/43                   ?0        #71                  ?187                	;0	>>187
186 153  GOTO/253                  ?0        ?193                 ?143                	;0
187 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'b5aD1d95a92cE732'	;1	<<185
188 155  FETCH_STATIC_PROP_FUNC_ARG/177 $72=      146:'rRequest'       147:'XUI'           	;1
189 155  FETCH_DIM_FUNC_ARG/93     $73=      $72                  149:'user_id'       	;1
190 155  SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
191 155  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
192 155  ASSIGN/38                 ?67       16?4                 $74                 	;0
193 157  FETCH_STATIC_PROP_IS/176  $76=      150:'rRequest'       151:'XUI'           	;0
194 157  ISSET_ISEMPTY_DIM_OBJ/115 #77=      $76                  153:'stream_id'     	;33554432
195 157  BOOL_NOT/13               #78=      #77                  ?0                  	;0
196 157  JMPZ/43                   ?0        #78                  ?198                	;0	>>198
197 158  GOTO/253                  ?0        ?122                 ?154                	;0
198 160  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'F260B7a31F021e39'	;1	<<196
199 160  FETCH_STATIC_PROP_FUNC_ARG/177 $79=      157:'rRequest'       158:'XUI'           	;1
200 160  FETCH_DIM_FUNC_ARG/93     $80=      $79                  160:'stream_id'     	;1
201 160  SEND_VAR_EX/66            ?80       $80                  ?1                  	;0
202 160  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
203 160  ASSIGN/38                 ?74       16?3                 $81                 	;0
204 161  GOTO/253                  ?0        ?122                 ?161                	;0
205 163  FETCH_STATIC_PROP_IS/176  $83=      162:'rRequest'       163:'XUI'           	;0
206 163  ISSET_ISEMPTY_DIM_OBJ/115 #84=      $83                  165:'filter'        	;33554432
207 163  JMPZ_EX/46                #84=      #84                  ?212                	;0	>>212
208 163  FETCH_STATIC_PROP_R/173   $85=      166:'rRequest'       167:'XUI'           	;0
209 163  FETCH_DIM_R/81            $86=      $85                  169:'filter'        	;0
210 163  IS_EQUAL/17               #87=      $86                  170:4               	;0
211 163  BOOL/52                   #84=      #87                  ?0                  	;0
212 163  BOOL_NOT/13               #88=      #84                  ?0                  	;0	<<207
213 163  JMPZ/43                   ?0        #88                  ?215                	;0	>>215
214 164  GOTO/253                  ?0        ?216                 ?171                	;0
215 166  ECHO/40                   ?0        172:' selected'      ?0                  	;0	<<213
216 168  ECHO/40                   ?0        173:'>Trial Lines</option>
                                    <option value="5"' ?0                  	;0
217 169  FETCH_STATIC_PROP_IS/176  $89=      174:'rRequest'       175:'XUI'           	;0
218 169  ISSET_ISEMPTY_DIM_OBJ/115 #90=      $89                  177:'filter'        	;33554432
219 169  JMPZ_EX/46                #90=      #90                  ?224                	;0	>>224
220 169  FETCH_STATIC_PROP_R/173   $91=      178:'rRequest'       179:'XUI'           	;0
221 169  FETCH_DIM_R/81            $92=      $91                  181:'filter'        	;0
222 169  IS_EQUAL/17               #93=      $92                  182:5               	;0
223 169  BOOL/52                   #90=      #93                  ?0                  	;0
224 169  BOOL_NOT/13               #94=      #90                  ?0                  	;0	<<219
225 169  JMPZ/43                   ?0        #94                  ?227                	;0	>>227
226 170  GOTO/253                  ?0        ?242                 ?183                	;0
227 172  GOTO/253                  ?0        ?241                 ?184                	;0	<<225
228 174  ECHO/40                   ?0        185:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="live_line" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
229 175  ISSET_ISEMPTY_CV/197      #95=      16?4                 ?0                  	;33554432
230 175  BOOL_NOT/13               #96=      #95                  ?0                  	;0
231 175  JMPZ/43                   ?0        #96                  ?233                	;0	>>233
232 176  GOTO/253                  ?0        ?373                 ?186                	;0
233 178  ECHO/40                   ?0        187:'                                    <option value="' ?0                  	;0	<<231
234 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   188:'intval'        	;1
235 179  FETCH_DIM_FUNC_ARG/93     $97=      16?4                 190:'id'            	;1
236 179  SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
237 179  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
238 179  ECHO/40                   ?0        $98                  ?0                  	;0
239 180  ECHO/40                   ?0        191:'" selected="selected">' ?0                  	;0
240 181  GOTO/253                  ?0        ?370                 ?192                	;0
241 183  ECHO/40                   ?0        193:' selected'      ?0                  	;0
242 185  ECHO/40                   ?0        194:'>Restreamers</option>
                                    <option value="6"' ?0                  	;0
243 186  FETCH_STATIC_PROP_IS/176  $99=      195:'rRequest'       196:'XUI'           	;0
244 186  ISSET_ISEMPTY_DIM_OBJ/115 #100=     $99                  198:'filter'        	;33554432
245 186  JMPZ_EX/46                #100=     #100                 ?250                	;0	>>250
246 186  FETCH_STATIC_PROP_R/173   $101=     199:'rRequest'       200:'XUI'           	;0
247 186  FETCH_DIM_R/81            $102=     $101                 202:'filter'        	;0
248 186  IS_EQUAL/17               #103=     $102                 203:6               	;0
249 186  BOOL/52                   #100=     #103                 ?0                  	;0
250 186  BOOL_NOT/13               #104=     #100                 ?0                  	;0	<<245
251 186  JMPZ/43                   ?0        #104                 ?253                	;0	>>253
252 187  GOTO/253                  ?0        ?273                 ?204                	;0
253 189  ECHO/40                   ?0        205:' selected'      ?0                  	;0	<<251
254 190  GOTO/253                  ?0        ?273                 ?206                	;0
255 193  ECHO/40                   ?0        207:'>User Lines</option>
                                    <option value="2"' ?0                  	;0
256 194  FETCH_STATIC_PROP_IS/176  $105=     208:'rRequest'       209:'XUI'           	;0
257 194  ISSET_ISEMPTY_DIM_OBJ/115 #106=     $105                 211:'filter'        	;33554432
258 194  JMPZ_EX/46                #106=     #106                 ?263                	;0	>>263
259 194  FETCH_STATIC_PROP_R/173   $107=     212:'rRequest'       213:'XUI'           	;0
260 194  FETCH_DIM_R/81            $108=     $107                 215:'filter'        	;0
261 194  IS_EQUAL/17               #109=     $108                 216:2               	;0
262 194  BOOL/52                   #106=     #109                 ?0                  	;0
263 194  BOOL_NOT/13               #110=     #106                 ?0                  	;0	<<258
264 194  JMPZ/43                   ?0        #110                 ?266                	;0	>>266
265 195  GOTO/253                  ?0        ?267                 ?217                	;0
266 197  ECHO/40                   ?0        218:' selected'      ?0                  	;0	<<264
267 199  GOTO/253                  ?0        ?102                 ?219                	;0
268 202  ECHO/40                   ?0        220:'                        </div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Quality</th>
                                    <th>Line</th>
									<th>Stream</th>
									<th>Server</th>
                                    <th>Player</th>
									<th>ISP</th>
                                    <th class="text-center">IP</th>
                                    <th class="text-center">Duration</th>
                                    <th class="text-center">Output</th>
                                    <th class="text-center">Restreamer</th>
                                    <th class="text-center">' ?0                  	;0
269 203  FETCH_DIM_R/81            $111=     16?0                 221:'actions'       	;0
270 203  ECHO/40                   ?0        $111                 ?0                  	;0
271 204  ECHO/40                   ?0        222:'</th>
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
272 205  GOTO/253                  ?0        ?390                 ?223                	;0
273 208  ECHO/40                   ?0        224:'>Ministra Lines</option>
                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="live_show_entries">' ?0                  	;0
274 209  FETCH_DIM_R/81            $112=     16?0                 225:'show'          	;0
275 209  ECHO/40                   ?0        $112                 ?0                  	;0
276 210  ECHO/40                   ?0        226:'</label>
                            <div class="col-md-1">
                                <select id="live_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
277 211  FE_RESET_R/77             $113=     227:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?293                	;0
278 211  FE_FETCH_R/78             ?0        $113                 16?5                	;293	>>293	<<292
279 212  ECHO/40                   ?0        228:'                                    <option' ?0                  	;0
280 213  FETCH_DIM_R/81            $114=     16?6                 229:'default_entries'	;0
281 213  IS_EQUAL/17               #115=     $114                 16?5                	;0
282 213  BOOL_NOT/13               #116=     #115                 ?0                  	;0
283 213  JMPZ/43                   ?0        #116                 ?286                	;0	>>286
284 214  NOP/0                     ?0        ?0                   ?0                  	;1
285 214  GOTO/253                  ?0        ?287                 ?230                	;0
286 216  ECHO/40                   ?0        231:' selected'      ?0                  	;0	<<283
287 218  ECHO/40                   ?0        232:' value="'       ?0                  	;0
288 219  ECHO/40                   ?0        16?5                 ?0                  	;0
289 220  ECHO/40                   ?0        233:'">'             ?0                  	;0
290 221  ECHO/40                   ?0        16?5                 ?0                  	;0
291 222  ECHO/40                   ?0        234:'</option>
                                    ' ?0                  	;0
292 223  JMP/42                    ?0        ?278                 ?0                  	;0	>>278
293 223  FE_FREE/127               ?0        $113                 ?0                  	;0	<<277
294 225  GOTO/253                  ?0        ?98                  ?235                	;0
295 227  INCLUDE_OR_EVAL/73        ?109      236:'session.php'    ?0                  	;2	<<0
296 228  INCLUDE_OR_EVAL/73        ?110      237:'functions.php'  ?0                  	;2
297 229  INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'e6D500E19634d513'	;0
298 229  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
299 229  JMPZ/43                   ?0        $119                 ?301                	;0	>>301
300 230  GOTO/253                  ?0        ?303                 ?240                	;0
301 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'e72F42A93714Ba87'	;0	<<299
302 232  DO_FCALL_BY_NAME/131      ?112      ?0                   ?0                  	;0
303 234  GOTO/253                  ?0        ?182                 ?243                	;0
304 236  FETCH_STATIC_PROP_R/173   $121=     244:'rServers'       245:'XUI'           	;0
305 236  FE_RESET_R/77             $122=     $121                 ?342                	;0
306 236  FE_FETCH_R/78             ?0        $122                 16?2                	;342	>>342	<<341
307 237  NOP/0                     ?0        ?0                   ?0                  	;1
308 237  GOTO/253                  ?0        ?318                 ?247                	;0
309 241  NOP/0                     ?0        ?0                   ?0                  	;1
310 241  GOTO/253                  ?0        ?341                 ?248                	;0
311 243  ECHO/40                   ?0        249:' selected'      ?0                  	;0
312 245  ECHO/40                   ?0        250:'>'              ?0                  	;0
313 246  FETCH_DIM_R/81            $123=     16?2                 251:'server_name'   	;0
314 246  ECHO/40                   ?0        $123                 ?0                  	;0
315 247  ECHO/40                   ?0        252:'</option>
                                    ' ?0                  	;0
316 248  NOP/0                     ?0        ?0                   ?0                  	;1
317 248  GOTO/253                  ?0        ?309                 ?253                	;0
318 250  FETCH_DIM_R/81            $124=     16?2                 254:'enabled'       	;0
319 250  BOOL_NOT/13               #125=     $124                 ?0                  	;0
320 250  JMPZ/43                   ?0        #125                 ?323                	;0	>>323
321 251  NOP/0                     ?0        ?0                   ?0                  	;1
322 251  GOTO/253                  ?0        ?309                 ?255                	;0
323 253  ECHO/40                   ?0        256:'                                    <option value="' ?0                  	;0	<<320
324 254  FETCH_DIM_R/81            $126=     16?2                 257:'id'            	;0
325 254  ECHO/40                   ?0        $126                 ?0                  	;0
326 255  ECHO/40                   ?0        258:'"'              ?0                  	;0
327 256  FETCH_STATIC_PROP_IS/176  $127=     259:'rRequest'       260:'XUI'           	;0
328 256  ISSET_ISEMPTY_DIM_OBJ/115 #128=     $127                 262:'server'        	;33554432
329 256  JMPZ_EX/46                #128=     #128                 ?335                	;0	>>335
330 256  FETCH_STATIC_PROP_R/173   $129=     263:'rRequest'       264:'XUI'           	;0
331 256  FETCH_DIM_R/81            $130=     $129                 266:'server'        	;0
332 256  FETCH_DIM_R/81            $131=     16?2                 267:'id'            	;0
333 256  IS_EQUAL/17               #132=     $130                 $131                	;0
334 256  BOOL/52                   #128=     #132                 ?0                  	;0
335 256  BOOL_NOT/13               #133=     #128                 ?0                  	;0	<<329
336 256  JMPZ/43                   ?0        #133                 ?339                	;0	>>339
337 257  NOP/0                     ?0        ?0                   ?0                  	;1
338 257  GOTO/253                  ?0        ?312                 ?268                	;0
339 259  NOP/0                     ?0        ?0                   ?0                  	;1	<<336
340 259  GOTO/253                  ?0        ?311                 ?269                	;0
341 260  JMP/42                    ?0        ?306                 ?0                  	;0	>>306
342 260  FE_FREE/127               ?0        $122                 ?0                  	;0	<<305
343 263  ECHO/40                   ?0        270:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="live_stream" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
344 264  ISSET_ISEMPTY_CV/197      #134=     16?3                 ?0                  	;33554432
345 264  BOOL_NOT/13               #135=     #134                 ?0                  	;0
346 264  JMPZ/43                   ?0        #135                 ?348                	;0	>>348
347 265  GOTO/253                  ?0        ?176                 ?271                	;0
348 267  ECHO/40                   ?0        272:'                                    <option value="' ?0                  	;0	<<346
349 268  GOTO/253                  ?0        ?167                 ?273                	;0
350 270  ECHO/40                   ?0        274:' selected'      ?0                  	;0
351 272  ECHO/40                   ?0        275:'>No Filter</option>
                                    <option value="1"' ?0                  	;0
352 273  FETCH_STATIC_PROP_IS/176  $136=     276:'rRequest'       277:'XUI'           	;0
353 273  ISSET_ISEMPTY_DIM_OBJ/115 #137=     $136                 279:'filter'        	;33554432
354 273  JMPZ_EX/46                #137=     #137                 ?359                	;0	>>359
355 273  FETCH_STATIC_PROP_R/173   $138=     280:'rRequest'       281:'XUI'           	;0
356 273  FETCH_DIM_R/81            $139=     $138                 283:'filter'        	;0
357 273  IS_EQUAL/17               #140=     $139                 284:1               	;0
358 273  BOOL/52                   #137=     #140                 ?0                  	;0
359 273  BOOL_NOT/13               #141=     #137                 ?0                  	;0	<<354
360 273  JMPZ/43                   ?0        #141                 ?362                	;0	>>362
361 274  GOTO/253                  ?0        ?255                 ?285                	;0
362 276  ECHO/40                   ?0        286:' selected'      ?0                  	;0	<<360
363 277  GOTO/253                  ?0        ?255                 ?287                	;0
364 279  ECHO/40                   ?0        288:' selected'      ?0                  	;0
365 281  ECHO/40                   ?0        289:'>'              ?0                  	;0
366 282  FETCH_DIM_R/81            $142=     16?0                 290:'all_servers'   	;0
367 282  ECHO/40                   ?0        $142                 ?0                  	;0
368 283  ECHO/40                   ?0        291:'</option>
                                    ' ?0                  	;0
369 284  GOTO/253                  ?0        ?304                 ?292                	;0
370 286  FETCH_DIM_R/81            $143=     16?4                 293:'username'      	;0
371 286  ECHO/40                   ?0        $143                 ?0                  	;0
372 287  ECHO/40                   ?0        294:'</option>
                                    ' ?0                  	;0
373 289  ECHO/40                   ?0        295:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="live_filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
374 290  FETCH_STATIC_PROP_IS/176  $144=     296:'rRequest'       297:'XUI'           	;0
375 290  ISSET_ISEMPTY_DIM_OBJ/115 #145=     $144                 299:'filter'        	;33554432
376 290  JMPZ/43                   ?0        #145                 ?378                	;0	>>378
377 291  GOTO/253                  ?0        ?351                 ?300                	;0
378 293  GOTO/253                  ?0        ?350                 ?301                	;0	<<376
379 295  ECHO/40                   ?0        302:'                                    <option value="' ?0                  	;0
380 296  INIT_FCALL_BY_NAME/59     ?0        ?0                   303:'intval'        	;1
381 296  FETCH_DIM_FUNC_ARG/93     $146=     16?3                 305:'id'            	;1
382 296  SEND_VAR_EX/66            ?80       $146                 ?1                  	;0
383 296  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
384 296  ECHO/40                   ?0        $147                 ?0                  	;0
385 297  ECHO/40                   ?0        306:'" selected="selected">' ?0                  	;0
386 298  FETCH_DIM_R/81            $148=     16?3                 307:'stream_display_name'	;0
387 298  ECHO/40                   ?0        $148                 ?0                  	;0
388 299  ECHO/40                   ?0        308:'</option>
                                    ' ?0                  	;0
389 300  GOTO/253                  ?0        ?64                  ?309                	;0
390 302  INCLUDE_OR_EVAL/73        ?141      310:'footer.php'     ?0                  	;2
391 303  NOP/0                     ?0        311:1                ?0                  	;4294967295
*/

?>
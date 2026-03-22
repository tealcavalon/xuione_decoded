<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?524                 ?0                  	;0	>>524
1   5    INIT_METHOD_CALL/112      ?0        16?0                 1:'get_rows'        	;0
2   5    DO_FCALL/60               $14=      ?0                   ?0                  	;0
3   5    FE_RESET_R/77             $15=      $14                  ?9                  	;0
4   5    FE_FETCH_R/78             ?0        $15                  16?1                	;9	>>9	<<8
5   6    FETCH_DIM_R/81            $17=      16?1                 3:'video_codec'     	;0
6   6    ASSIGN_DIM/147            ?2        16?2                 ?4414262            	;0
7   6    OP_DATA/137               ?0        $17                  ?0                  	;0
8   7    JMP/42                    ?0        ?4                   ?0                  	;0	>>4
9   7    FE_FREE/127               ?0        $15                  ?0                  	;0	<<3
10  10   ASSIGN/38                 ?4        16?3                 4:'Streams'         	;0
11  11   INCLUDE_OR_EVAL/73        ?5        5:'header.php'       ?0                  	;2
12  12   ECHO/40                   ?0        6:'<div class="wrapper"' ?0                  	;0
13  13   GOTO/253                  ?0        ?144                 ?7                  	;0
14  15   FETCH_STATIC_PROP_IS/176  $20=      8:'rRequest'         9:'XUI'             	;0
15  15   ISSET_ISEMPTY_DIM_OBJ/115 #21=      $20                  11:'filter'         	;33554432
16  15   JMPZ_EX/46                #21=      #21                  ?21                 	;0	>>21
17  15   FETCH_STATIC_PROP_R/173   $22=      12:'rRequest'        13:'XUI'            	;0
18  15   FETCH_DIM_R/81            $23=      $22                  15:'filter'         	;0
19  15   IS_EQUAL/17               #24=      $23                  16:1                	;0
20  15   BOOL/52                   #21=      #24                  ?0                  	;0
21  15   BOOL_NOT/13               #25=      #21                  ?0                  	;0	<<16
22  15   JMPZ/43                   ?0        #25                  ?24                 	;0	>>24
23  16   GOTO/253                  ?0        ?25                  ?17                 	;0
24  18   ECHO/40                   ?0        18:' selected'       ?0                  	;0	<<22
25  20   ECHO/40                   ?0        19:'>Online</option>
                                    <option value="2"' ?0                  	;0
26  21   FETCH_STATIC_PROP_IS/176  $26=      20:'rRequest'        21:'XUI'            	;0
27  21   ISSET_ISEMPTY_DIM_OBJ/115 #27=      $26                  23:'filter'         	;33554432
28  21   JMPZ_EX/46                #27=      #27                  ?33                 	;0	>>33
29  21   FETCH_STATIC_PROP_R/173   $28=      24:'rRequest'        25:'XUI'            	;0
30  21   FETCH_DIM_R/81            $29=      $28                  27:'filter'         	;0
31  21   IS_EQUAL/17               #30=      $29                  28:2                	;0
32  21   BOOL/52                   #27=      #30                  ?0                  	;0
33  21   BOOL_NOT/13               #31=      #27                  ?0                  	;0	<<28
34  21   JMPZ/43                   ?0        #31                  ?36                 	;0	>>36
35  22   GOTO/253                  ?0        ?361                 ?29                 	;0
36  24   GOTO/253                  ?0        ?360                 ?30                 	;0	<<34
37  27   ECHO/40                   ?0        31:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
38  28   BOOL_NOT/13               #32=      16?4                 ?0                  	;0
39  28   JMPZ/43                   ?0        #32                  ?41                 	;0	>>41
40  29   GOTO/253                  ?0        ?42                  ?32                 	;0
41  31   ECHO/40                   ?0        33:'collapse'        ?0                  	;0	<<39
42  33   GOTO/253                  ?0        ?116                 ?34                 	;0
43  35   ASSIGN/38                 $33=      16?2                 35:array (
)        	;0
44  35   ASSIGN/38                 ?20       16?5                 $33                 	;0
45  36   INIT_METHOD_CALL/112      ?0        16?0                 36:'query'          	;1
46  36   SEND_VAL_EX/116           ?80       38:'SELECT DISTINCT(`audio_codec`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `audio_codec` IS NOT NULL AND `type` = 1 ORDER BY `audio_codec` ASC;' ?1                  	;0
47  36   DO_FCALL/60               ?21       ?0                   ?0                  	;0
48  37   INIT_METHOD_CALL/112      ?0        16?0                 39:'get_rows'       	;0
49  37   DO_FCALL/60               $36=      ?0                   ?0                  	;0
50  37   FE_RESET_R/77             $37=      $36                  ?56                 	;0
51  37   FE_FETCH_R/78             ?0        $37                  16?1                	;56	>>56	<<55
52  38   FETCH_DIM_R/81            $39=      16?1                 41:'audio_codec'    	;0
53  38   ASSIGN_DIM/147            ?24       16?5                 ?4414262            	;0
54  38   OP_DATA/137               ?0        $39                  ?0                  	;0
55  39   JMP/42                    ?0        ?51                  ?0                  	;0	>>51
56  39   FE_FREE/127               ?0        $37                  ?0                  	;0	<<50
57  42   INIT_METHOD_CALL/112      ?0        16?0                 42:'query'          	;1
58  42   SEND_VAL_EX/116           ?80       44:'SELECT DISTINCT(`video_codec`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `video_codec` IS NOT NULL AND `type` = 1 ORDER BY `video_codec` ASC;' ?1                  	;0
59  42   DO_FCALL/60               ?26       ?0                   ?0                  	;0
60  43   GOTO/253                  ?0        ?1                   ?45                 	;0
61  46   ECHO/40                   ?0        46:'>Transcoding</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <select id="stream_audio" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
62  47   FETCH_STATIC_PROP_IS/176  $41=      47:'rRequest'        48:'XUI'            	;0
63  47   ISSET_ISEMPTY_DIM_OBJ/115 #42=      $41                  50:'audio'          	;33554432
64  47   JMPZ/43                   ?0        #42                  ?66                 	;0	>>66
65  48   GOTO/253                  ?0        ?67                  ?51                 	;0
66  50   ECHO/40                   ?0        52:' selected'       ?0                  	;0	<<64
67  52   GOTO/253                  ?0        ?533                 ?53                 	;0
68  54   FETCH_STATIC_PROP_IS/176  $43=      54:'rRequest'        55:'XUI'            	;0
69  54   ISSET_ISEMPTY_DIM_OBJ/115 #44=      $43                  57:'filter'         	;33554432
70  54   JMPZ_EX/46                #44=      #44                  ?75                 	;0	>>75
71  54   FETCH_STATIC_PROP_R/173   $45=      58:'rRequest'        59:'XUI'            	;0
72  54   FETCH_DIM_R/81            $46=      $45                  61:'filter'         	;0
73  54   IS_EQUAL/17               #47=      $46                  62:6                	;0
74  54   BOOL/52                   #44=      #47                  ?0                  	;0
75  54   BOOL_NOT/13               #48=      #44                  ?0                  	;0	<<70
76  54   JMPZ/43                   ?0        #48                  ?78                 	;0	>>78
77  55   GOTO/253                  ?0        ?79                  ?63                 	;0
78  57   ECHO/40                   ?0        64:' selected'       ?0                  	;0	<<76
79  59   ECHO/40                   ?0        65:'>Direct</option>
                                    <option value="7"' ?0                  	;0
80  60   FETCH_STATIC_PROP_IS/176  $49=      66:'rRequest'        67:'XUI'            	;0
81  60   ISSET_ISEMPTY_DIM_OBJ/115 #50=      $49                  69:'filter'         	;33554432
82  60   JMPZ_EX/46                #50=      #50                  ?87                 	;0	>>87
83  60   FETCH_STATIC_PROP_R/173   $51=      70:'rRequest'        71:'XUI'            	;0
84  60   FETCH_DIM_R/81            $52=      $51                  73:'filter'         	;0
85  60   IS_EQUAL/17               #53=      $52                  74:7                	;0
86  60   BOOL/52                   #50=      #53                  ?0                  	;0
87  60   BOOL_NOT/13               #54=      #50                  ?0                  	;0	<<82
88  60   JMPZ/43                   ?0        #54                  ?90                 	;0	>>90
89  61   GOTO/253                  ?0        ?488                 ?75                 	;0
90  63   GOTO/253                  ?0        ?487                 ?76                 	;0	<<88
91  65   ECHO/40                   ?0        77:' selected'       ?0                  	;0
92  67   ECHO/40                   ?0        78:'>Quality</option>
                                    ' ?0                  	;0
93  68   FE_RESET_R/77             $55=      79:array (
  0 => 240,
  1 => 360,
  2 => 480,
  3 => 576,
  4 => 720,
  5 => 1080,
  6 => 1440,
  7 => 2160,
) ?114                	;0
94  68   FE_FETCH_R/78             ?0        $55                  16?6                	;114	>>114	<<113
95  69   ECHO/40                   ?0        80:'                                    <option value="' ?0                  	;0
96  70   ECHO/40                   ?0        16?6                 ?0                  	;0
97  71   ECHO/40                   ?0        81:'"'               ?0                  	;0
98  72   FETCH_STATIC_PROP_IS/176  $56=      82:'rRequest'        83:'XUI'            	;0
99  72   ISSET_ISEMPTY_DIM_OBJ/115 #57=      $56                  85:'resolution'     	;33554432
100 72   JMPZ_EX/46                #57=      #57                  ?105                	;0	>>105
101 72   FETCH_STATIC_PROP_R/173   $58=      86:'rRequest'        87:'XUI'            	;0
102 72   FETCH_DIM_R/81            $59=      $58                  89:'resolution'     	;0
103 72   IS_EQUAL/17               #60=      $59                  16?6                	;0
104 72   BOOL/52                   #57=      #60                  ?0                  	;0
105 72   BOOL_NOT/13               #61=      #57                  ?0                  	;0	<<100
106 72   JMPZ/43                   ?0        #61                  ?109                	;0	>>109
107 73   NOP/0                     ?0        ?0                   ?0                  	;1
108 73   GOTO/253                  ?0        ?110                 ?90                 	;0
109 75   ECHO/40                   ?0        91:' selected'       ?0                  	;0	<<106
110 77   ECHO/40                   ?0        92:'>'               ?0                  	;0
111 78   ECHO/40                   ?0        16?6                 ?0                  	;0
112 79   ECHO/40                   ?0        93:'p</option>
                                    ' ?0                  	;0
113 80   JMP/42                    ?0        ?94                  ?0                  	;0	>>94
114 80   FE_FREE/127               ?0        $55                  ?0                  	;0	<<93
115 83   GOTO/253                  ?0        ?311                 ?94                 	;0
116 85   ECHO/40                   ?0        95:' form-group row mb-4">
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="stream_search" value="' ?0                  	;0
117 86   FETCH_STATIC_PROP_IS/176  $62=      96:'rRequest'        97:'XUI'            	;0
118 86   ISSET_ISEMPTY_DIM_OBJ/115 #63=      $62                  99:'search'         	;33554432
119 86   BOOL_NOT/13               #64=      #63                  ?0                  	;0
120 86   JMPZ/43                   ?0        #64                  ?122                	;0	>>122
121 87   GOTO/253                  ?0        ?128                 ?100                	;0
122 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'htmlspecialchars'	;1	<<120
123 89   FETCH_STATIC_PROP_FUNC_ARG/177 $65=      103:'rRequest'       104:'XUI'           	;1
124 89   FETCH_DIM_FUNC_ARG/93     $66=      $65                  106:'search'        	;1
125 89   SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
126 89   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
127 89   ECHO/40                   ?0        $67                  ?0                  	;0
128 91   ECHO/40                   ?0        107:'" placeholder="Search Streams...">
                            </div>
                            <div class="col-md-2">
                                <select id="stream_server_id" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
129 92   GOTO/253                  ?0        ?515                 ?108                	;0
130 94   ECHO/40                   ?0        109:' selected'      ?0                  	;0
131 96   ECHO/40                   ?0        110:'>Title Sync</option>
									<option value="13"' ?0                  	;0
132 97   FETCH_STATIC_PROP_IS/176  $68=      111:'rRequest'       112:'XUI'           	;0
133 97   ISSET_ISEMPTY_DIM_OBJ/115 #69=      $68                  114:'filter'        	;33554432
134 97   JMPZ_EX/46                #69=      #69                  ?139                	;0	>>139
135 97   FETCH_STATIC_PROP_R/173   $70=      115:'rRequest'       116:'XUI'           	;0
136 97   FETCH_DIM_R/81            $71=      $70                  118:'filter'        	;0
137 97   IS_EQUAL/17               #72=      $71                  119:13              	;0
138 97   BOOL/52                   #69=      #72                  ?0                  	;0
139 97   BOOL_NOT/13               #73=      #69                  ?0                  	;0	<<134
140 97   JMPZ/43                   ?0        #73                  ?142                	;0	>>142
141 98   GOTO/253                  ?0        ?61                  ?120                	;0
142 100  ECHO/40                   ?0        121:' selected'      ?0                  	;0	<<140
143 101  GOTO/253                  ?0        ?61                  ?122                	;0
144 103  FETCH_IS/89               $74=      123:'_SERVER'        ?0                  	;0
145 103  ISSET_ISEMPTY_DIM_OBJ/115 #75=      $74                  124:'HTTP_X_REQUESTED_WITH'	;16777216
146 103  BOOL_NOT/13               #76=      #75                  ?0                  	;0
147 103  JMPZ_EX/46                #76=      #76                  ?155                	;0	>>155
148 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'strtolower'    	;1
149 103  FETCH_FUNC_ARG/92         $77=      127:'_SERVER'        ?0                  	;1
150 103  FETCH_DIM_FUNC_ARG/93     $78=      $77                  128:'HTTP_X_REQUESTED_WITH'	;1
151 103  SEND_VAR_EX/66            ?80       $78                  ?1                  	;0
152 103  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
153 103  IS_EQUAL/17               #80=      $79                  129:'xmlhttprequest'	;0
154 103  BOOL/52                   #76=      #80                  ?0                  	;0
155 103  BOOL_NOT/13               #81=      #76                  ?0                  	;0	<<147
156 103  JMPZ/43                   ?0        #81                  ?158                	;0	>>158
157 104  GOTO/253                  ?0        ?159                 ?130                	;0
158 106  ECHO/40                   ?0        131:' style="display: none;"' ?0                  	;0	<<156
159 108  ECHO/40                   ?0        132:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
160 109  INCLUDE_OR_EVAL/73        ?68       133:'topbar.php'     ?0                  	;2
161 110  GOTO/253                  ?0        ?501                 ?134                	;0
162 112  ECHO/40                   ?0        135:'>Has EPG</option>
                                    <option value="10"' ?0                  	;0
163 113  FETCH_STATIC_PROP_IS/176  $83=      136:'rRequest'       137:'XUI'           	;0
164 113  ISSET_ISEMPTY_DIM_OBJ/115 #84=      $83                  139:'filter'        	;33554432
165 113  JMPZ_EX/46                #84=      #84                  ?170                	;0	>>170
166 113  FETCH_STATIC_PROP_R/173   $85=      140:'rRequest'       141:'XUI'           	;0
167 113  FETCH_DIM_R/81            $86=      $85                  143:'filter'        	;0
168 113  IS_EQUAL/17               #87=      $86                  144:10              	;0
169 113  BOOL/52                   #84=      #87                  ?0                  	;0
170 113  BOOL_NOT/13               #88=      #84                  ?0                  	;0	<<165
171 113  JMPZ/43                   ?0        #88                  ?173                	;0	>>173
172 114  GOTO/253                  ?0        ?174                 ?145                	;0
173 116  ECHO/40                   ?0        146:' selected'      ?0                  	;0	<<171
174 118  ECHO/40                   ?0        147:'>No EPG</option>
                                    <option value="11"' ?0                  	;0
175 119  GOTO/253                  ?0        ?403                 ?148                	;0
176 121  ECHO/40                   ?0        149:'</option>
                                    <option value="-1"' ?0                  	;0
177 122  FETCH_STATIC_PROP_IS/176  $89=      150:'rRequest'       151:'XUI'           	;0
178 122  ISSET_ISEMPTY_DIM_OBJ/115 #90=      $89                  153:'server'        	;33554432
179 122  JMPZ_EX/46                #90=      #90                  ?184                	;0	>>184
180 122  FETCH_STATIC_PROP_R/173   $91=      154:'rRequest'       155:'XUI'           	;0
181 122  FETCH_DIM_R/81            $92=      $91                  157:'server'        	;0
182 122  IS_EQUAL/17               #93=      $92                  158:-1              	;0
183 122  BOOL/52                   #90=      #93                  ?0                  	;0
184 122  BOOL_NOT/13               #94=      #90                  ?0                  	;0	<<179
185 122  JMPZ/43                   ?0        #94                  ?187                	;0	>>187
186 123  GOTO/253                  ?0        ?188                 ?159                	;0
187 125  ECHO/40                   ?0        160:' selected'      ?0                  	;0	<<185
188 127  ECHO/40                   ?0        161:'>No Servers</option>
                                    ' ?0                  	;0
189 128  GOTO/253                  ?0        ?251                 ?162                	;0
190 130  ECHO/40                   ?0        163:' selected'      ?0                  	;0
191 132  ECHO/40                   ?0        164:'>No Categories</option>
                                    ' ?0                  	;0
192 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'F769e3f0c739d1a6'	;1
193 133  SEND_VAL_EX/116           ?80       167:'live'           ?1                  	;0
194 133  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
195 133  FE_RESET_R/77             $96=      $95                  ?222                	;0
196 133  FE_FETCH_R/78             ?0        $96                  16?7                	;222	>>222	<<221
197 134  ECHO/40                   ?0        168:'                                    <option value="' ?0                  	;0
198 135  INIT_FCALL_BY_NAME/59     ?0        ?0                   169:'intval'        	;1
199 135  FETCH_DIM_FUNC_ARG/93     $97=      16?7                 171:'id'            	;1
200 135  SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
201 135  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
202 135  ECHO/40                   ?0        $98                  ?0                  	;0
203 136  ECHO/40                   ?0        172:'"'              ?0                  	;0
204 137  FETCH_STATIC_PROP_IS/176  $99=      173:'rRequest'       174:'XUI'           	;0
205 137  ISSET_ISEMPTY_DIM_OBJ/115 #100=     $99                  176:'category'      	;33554432
206 137  JMPZ_EX/46                #100=     #100                 ?212                	;0	>>212
207 137  FETCH_STATIC_PROP_R/173   $101=     177:'rRequest'       178:'XUI'           	;0
208 137  FETCH_DIM_R/81            $102=     $101                 180:'category'      	;0
209 137  FETCH_DIM_R/81            $103=     16?7                 181:'id'            	;0
210 137  IS_EQUAL/17               #104=     $102                 $103                	;0
211 137  BOOL/52                   #100=     #104                 ?0                  	;0
212 137  BOOL_NOT/13               #105=     #100                 ?0                  	;0	<<206
213 137  JMPZ/43                   ?0        #105                 ?216                	;0	>>216
214 138  NOP/0                     ?0        ?0                   ?0                  	;1
215 138  GOTO/253                  ?0        ?217                 ?182                	;0
216 140  ECHO/40                   ?0        183:' selected'      ?0                  	;0	<<213
217 142  ECHO/40                   ?0        184:'>'              ?0                  	;0
218 143  FETCH_DIM_R/81            $106=     16?7                 185:'category_name' 	;0
219 143  ECHO/40                   ?0        $106                 ?0                  	;0
220 144  ECHO/40                   ?0        186:'</option>
                                    ' ?0                  	;0
221 145  JMP/42                    ?0        ?196                 ?0                  	;0	>>196
222 145  FE_FREE/127               ?0        $96                  ?0                  	;0	<<195
223 148  GOTO/253                  ?0        ?301                 ?187                	;0
224 151  ECHO/40                   ?0        188:'>Looping</option>
                                    <option value="9"' ?0                  	;0
225 152  FETCH_STATIC_PROP_IS/176  $107=     189:'rRequest'       190:'XUI'           	;0
226 152  ISSET_ISEMPTY_DIM_OBJ/115 #108=     $107                 192:'filter'        	;33554432
227 152  JMPZ_EX/46                #108=     #108                 ?232                	;0	>>232
228 152  FETCH_STATIC_PROP_R/173   $109=     193:'rRequest'       194:'XUI'           	;0
229 152  FETCH_DIM_R/81            $110=     $109                 196:'filter'        	;0
230 152  IS_EQUAL/17               #111=     $110                 197:9               	;0
231 152  BOOL/52                   #108=     #111                 ?0                  	;0
232 152  BOOL_NOT/13               #112=     #108                 ?0                  	;0	<<227
233 152  JMPZ/43                   ?0        #112                 ?235                	;0	>>235
234 153  GOTO/253                  ?0        ?236                 ?198                	;0
235 155  ECHO/40                   ?0        199:' selected'      ?0                  	;0	<<233
236 157  GOTO/253                  ?0        ?162                 ?200                	;0
237 159  ECHO/40                   ?0        201:'>Starting</option>
                                    <option value="5"' ?0                  	;0
238 160  FETCH_STATIC_PROP_IS/176  $113=     202:'rRequest'       203:'XUI'           	;0
239 160  ISSET_ISEMPTY_DIM_OBJ/115 #114=     $113                 205:'filter'        	;33554432
240 160  JMPZ_EX/46                #114=     #114                 ?245                	;0	>>245
241 160  FETCH_STATIC_PROP_R/173   $115=     206:'rRequest'       207:'XUI'           	;0
242 160  FETCH_DIM_R/81            $116=     $115                 209:'filter'        	;0
243 160  IS_EQUAL/17               #117=     $116                 210:5               	;0
244 160  BOOL/52                   #114=     #117                 ?0                  	;0
245 160  BOOL_NOT/13               #118=     #114                 ?0                  	;0	<<240
246 160  JMPZ/43                   ?0        #118                 ?248                	;0	>>248
247 161  GOTO/253                  ?0        ?249                 ?211                	;0
248 163  ECHO/40                   ?0        212:' selected'      ?0                  	;0	<<246
249 165  ECHO/40                   ?0        213:'>On Demand</option>
                                    <option value="6"' ?0                  	;0
250 166  GOTO/253                  ?0        ?68                  ?214                	;0
251 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'C6a90Bfcd425eb63'	;0
252 168  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
253 168  FE_RESET_R/77             $120=     $119                 ?280                	;0
254 168  FE_FETCH_R/78             ?0        $120                 16?8                	;280	>>280	<<279
255 169  ECHO/40                   ?0        217:'                                    <option value="' ?0                  	;0
256 170  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'intval'        	;1
257 170  FETCH_DIM_FUNC_ARG/93     $121=     16?8                 220:'id'            	;1
258 170  SEND_VAR_EX/66            ?80       $121                 ?1                  	;0
259 170  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
260 170  ECHO/40                   ?0        $122                 ?0                  	;0
261 171  ECHO/40                   ?0        221:'"'              ?0                  	;0
262 172  FETCH_STATIC_PROP_IS/176  $123=     222:'rRequest'       223:'XUI'           	;0
263 172  ISSET_ISEMPTY_DIM_OBJ/115 #124=     $123                 225:'server'        	;33554432
264 172  JMPZ_EX/46                #124=     #124                 ?270                	;0	>>270
265 172  FETCH_STATIC_PROP_R/173   $125=     226:'rRequest'       227:'XUI'           	;0
266 172  FETCH_DIM_R/81            $126=     $125                 229:'server'        	;0
267 172  FETCH_DIM_R/81            $127=     16?8                 230:'id'            	;0
268 172  IS_EQUAL/17               #128=     $126                 $127                	;0
269 172  BOOL/52                   #124=     #128                 ?0                  	;0
270 172  BOOL_NOT/13               #129=     #124                 ?0                  	;0	<<264
271 172  JMPZ/43                   ?0        #129                 ?274                	;0	>>274
272 173  NOP/0                     ?0        ?0                   ?0                  	;1
273 173  GOTO/253                  ?0        ?275                 ?231                	;0
274 175  ECHO/40                   ?0        232:' selected'      ?0                  	;0	<<271
275 177  ECHO/40                   ?0        233:'>'              ?0                  	;0
276 178  FETCH_DIM_R/81            $130=     16?8                 234:'server_name'   	;0
277 178  ECHO/40                   ?0        $130                 ?0                  	;0
278 179  ECHO/40                   ?0        235:'</option>
                                    ' ?0                  	;0
279 180  JMP/42                    ?0        ?254                 ?0                  	;0	>>254
280 180  FE_FREE/127               ?0        $120                 ?0                  	;0	<<253
281 183  ECHO/40                   ?0        236:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="stream_category_id" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
282 184  FETCH_STATIC_PROP_IS/176  $131=     237:'rRequest'       238:'XUI'           	;0
283 184  ISSET_ISEMPTY_DIM_OBJ/115 #132=     $131                 240:'category'      	;33554432
284 184  JMPZ/43                   ?0        #132                 ?286                	;0	>>286
285 185  GOTO/253                  ?0        ?443                 ?241                	;0
286 187  ECHO/40                   ?0        242:' selected'      ?0                  	;0	<<284
287 188  GOTO/253                  ?0        ?443                 ?243                	;0
288 191  ECHO/40                   ?0        244:'>Video</option>
                                    <option value="-1"' ?0                  	;0
289 192  FETCH_STATIC_PROP_IS/176  $133=     245:'rRequest'       246:'XUI'           	;0
290 192  ISSET_ISEMPTY_DIM_OBJ/115 #134=     $133                 248:'video'         	;33554432
291 192  JMPZ_EX/46                #134=     #134                 ?296                	;0	>>296
292 192  FETCH_STATIC_PROP_R/173   $135=     249:'rRequest'       250:'XUI'           	;0
293 192  FETCH_DIM_R/81            $136=     $135                 252:'video'         	;0
294 192  IS_EQUAL/17               #137=     $136                 253:'-1'            	;0
295 192  BOOL/52                   #134=     #137                 ?0                  	;0
296 192  BOOL_NOT/13               #138=     #134                 ?0                  	;0	<<291
297 192  JMPZ/43                   ?0        #138                 ?299                	;0	>>299
298 193  GOTO/253                  ?0        ?300                 ?254                	;0
299 195  ECHO/40                   ?0        255:' selected'      ?0                  	;0	<<297
300 197  GOTO/253                  ?0        ?374                 ?256                	;0
301 199  ECHO/40                   ?0        257:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="stream_filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
302 200  FETCH_STATIC_PROP_IS/176  $139=     258:'rRequest'       259:'XUI'           	;0
303 200  ISSET_ISEMPTY_DIM_OBJ/115 #140=     $139                 261:'filter'        	;33554432
304 200  JMPZ/43                   ?0        #140                 ?306                	;0	>>306
305 201  GOTO/253                  ?0        ?307                 ?262                	;0
306 203  ECHO/40                   ?0        263:' selected'      ?0                  	;0	<<304
307 205  ECHO/40                   ?0        264:'>No Filter</option>
                                    <option value="1"' ?0                  	;0
308 206  GOTO/253                  ?0        ?14                  ?265                	;0
309 208  ECHO/40                   ?0        266:'									<th class="text-center">Clients</th>
									<th class="text-center">Uptime</th>
									<th class="text-center">Actions</th>
									<th class="text-center">Player</th>
									<th class="text-center">EPG</th>
									<th class="text-center">Stream Info</th>
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
310 209  GOTO/253                  ?0        ?547                 ?267                	;0
311 211  ECHO/40                   ?0        268:'                                </select>
                            </div>
                            <div class="col-md-1">
                                <select id="stream_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
312 212  FE_RESET_R/77             $141=     269:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?353                	;0
313 212  FE_FETCH_R/78             ?0        $141                 16?9                	;353	>>353	<<352
314 213  NOP/0                     ?0        ?0                   ?0                  	;1
315 213  GOTO/253                  ?0        ?322                 ?270                	;0
316 216  ECHO/40                   ?0        271:' value="'       ?0                  	;0
317 217  ECHO/40                   ?0        16?9                 ?0                  	;0
318 218  ECHO/40                   ?0        272:'">'             ?0                  	;0
319 219  ECHO/40                   ?0        16?9                 ?0                  	;0
320 220  NOP/0                     ?0        ?0                   ?0                  	;1
321 220  GOTO/253                  ?0        ?337                 ?273                	;0
322 222  ECHO/40                   ?0        274:'                                    <option' ?0                  	;0
323 223  FETCH_STATIC_PROP_IS/176  $142=     275:'rRequest'       276:'XUI'           	;0
324 223  ISSET_ISEMPTY_DIM_OBJ/115 #143=     $142                 278:'entries'       	;33554432
325 223  JMPZ/43                   ?0        #143                 ?328                	;0	>>328
326 224  NOP/0                     ?0        ?0                   ?0                  	;1
327 224  GOTO/253                  ?0        ?342                 ?279                	;0
328 226  FETCH_DIM_R/81            $144=     16?10                280:'default_entries'	;0	<<325
329 226  IS_EQUAL/17               #145=     $144                 16?9                	;0
330 226  BOOL_NOT/13               #146=     #145                 ?0                  	;0
331 226  JMPZ/43                   ?0        #146                 ?334                	;0	>>334
332 227  NOP/0                     ?0        ?0                   ?0                  	;1
333 227  GOTO/253                  ?0        ?335                 ?281                	;0
334 229  ECHO/40                   ?0        282:' selected'      ?0                  	;0	<<331
335 231  NOP/0                     ?0        ?0                   ?0                  	;1
336 231  GOTO/253                  ?0        ?340                 ?283                	;0
337 233  ECHO/40                   ?0        284:'</option>
                                    ' ?0                  	;0
338 235  NOP/0                     ?0        ?0                   ?0                  	;1
339 235  GOTO/253                  ?0        ?352                 ?285                	;0
340 237  NOP/0                     ?0        ?0                   ?0                  	;1
341 237  GOTO/253                  ?0        ?316                 ?286                	;0
342 239  FETCH_STATIC_PROP_R/173   $147=     287:'rRequest'       288:'XUI'           	;0
343 239  FETCH_DIM_R/81            $148=     $147                 290:'entries'       	;0
344 239  IS_EQUAL/17               #149=     $148                 16?9                	;0
345 239  BOOL_NOT/13               #150=     #149                 ?0                  	;0
346 239  JMPZ/43                   ?0        #150                 ?349                	;0	>>349
347 240  NOP/0                     ?0        ?0                   ?0                  	;1
348 240  GOTO/253                  ?0        ?350                 ?291                	;0
349 242  ECHO/40                   ?0        292:' selected'      ?0                  	;0	<<346
350 244  NOP/0                     ?0        ?0                   ?0                  	;1
351 244  GOTO/253                  ?0        ?316                 ?293                	;0
352 245  JMP/42                    ?0        ?313                 ?0                  	;0	>>313
353 245  FE_FREE/127               ?0        $141                 ?0                  	;0	<<312
354 248  ECHO/40                   ?0        294:'                                </select>
                            </div>
                        </div>
						<table id="datatable-streampage" class="table table-borderless table-striped dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">Icon</th>
									<th>Name</th>
                                    ' ?0                  	;0
355 249  FETCH_DIM_R/81            $151=     16?10                295:'streams_grouped'	;0
356 249  IS_EQUAL/17               #152=     $151                 296:1               	;0
357 249  JMPZ/43                   ?0        #152                 ?359                	;0	>>359
358 250  GOTO/253                  ?0        ?441                 ?297                	;0
359 252  GOTO/253                  ?0        ?439                 ?298                	;0	<<357
360 254  ECHO/40                   ?0        299:' selected'      ?0                  	;0
361 256  ECHO/40                   ?0        300:'>Down</option>
                                    <option value="3"' ?0                  	;0
362 257  FETCH_STATIC_PROP_IS/176  $153=     301:'rRequest'       302:'XUI'           	;0
363 257  ISSET_ISEMPTY_DIM_OBJ/115 #154=     $153                 304:'filter'        	;33554432
364 257  JMPZ_EX/46                #154=     #154                 ?369                	;0	>>369
365 257  FETCH_STATIC_PROP_R/173   $155=     305:'rRequest'       306:'XUI'           	;0
366 257  FETCH_DIM_R/81            $156=     $155                 308:'filter'        	;0
367 257  IS_EQUAL/17               #157=     $156                 309:3               	;0
368 257  BOOL/52                   #154=     #157                 ?0                  	;0
369 257  BOOL_NOT/13               #158=     #154                 ?0                  	;0	<<364
370 257  JMPZ/43                   ?0        #158                 ?372                	;0	>>372
371 258  GOTO/253                  ?0        ?426                 ?310                	;0
372 260  ECHO/40                   ?0        311:' selected'      ?0                  	;0	<<370
373 261  GOTO/253                  ?0        ?426                 ?312                	;0
374 263  ECHO/40                   ?0        313:'>None</option>
                                    ' ?0                  	;0
375 264  FE_RESET_R/77             $159=     16?2                 ?396                	;0
376 264  FE_FETCH_R/78             ?0        $159                 16?11               	;396	>>396	<<395
377 265  ECHO/40                   ?0        314:'                                    <option value="' ?0                  	;0
378 266  ECHO/40                   ?0        16?11                ?0                  	;0
379 267  ECHO/40                   ?0        315:'"'              ?0                  	;0
380 268  FETCH_STATIC_PROP_IS/176  $160=     316:'rRequest'       317:'XUI'           	;0
381 268  ISSET_ISEMPTY_DIM_OBJ/115 #161=     $160                 319:'video'         	;33554432
382 268  JMPZ_EX/46                #161=     #161                 ?387                	;0	>>387
383 268  FETCH_STATIC_PROP_R/173   $162=     320:'rRequest'       321:'XUI'           	;0
384 268  FETCH_DIM_R/81            $163=     $162                 323:'video'         	;0
385 268  IS_EQUAL/17               #164=     $163                 16?11               	;0
386 268  BOOL/52                   #161=     #164                 ?0                  	;0
387 268  BOOL_NOT/13               #165=     #161                 ?0                  	;0	<<382
388 268  JMPZ/43                   ?0        #165                 ?391                	;0	>>391
389 269  NOP/0                     ?0        ?0                   ?0                  	;1
390 269  GOTO/253                  ?0        ?392                 ?324                	;0
391 271  ECHO/40                   ?0        325:' selected'      ?0                  	;0	<<388
392 273  ECHO/40                   ?0        326:'>'              ?0                  	;0
393 274  ECHO/40                   ?0        16?11                ?0                  	;0
394 275  ECHO/40                   ?0        327:'</option>
                                    ' ?0                  	;0
395 276  JMP/42                    ?0        ?376                 ?0                  	;0	>>376
396 276  FE_FREE/127               ?0        $159                 ?0                  	;0	<<375
397 279  ECHO/40                   ?0        328:'                                </select>
                            </div>
                            <div class="col-md-1">
                                <select id="stream_resolution" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
398 280  FETCH_STATIC_PROP_IS/176  $166=     329:'rRequest'       330:'XUI'           	;0
399 280  ISSET_ISEMPTY_DIM_OBJ/115 #167=     $166                 332:'resolution'    	;33554432
400 280  JMPZ/43                   ?0        #167                 ?402                	;0	>>402
401 281  GOTO/253                  ?0        ?92                  ?333                	;0
402 283  GOTO/253                  ?0        ?91                  ?334                	;0	<<400
403 285  FETCH_STATIC_PROP_IS/176  $168=     335:'rRequest'       336:'XUI'           	;0
404 285  ISSET_ISEMPTY_DIM_OBJ/115 #169=     $168                 338:'filter'        	;33554432
405 285  JMPZ_EX/46                #169=     #169                 ?410                	;0	>>410
406 285  FETCH_STATIC_PROP_R/173   $170=     339:'rRequest'       340:'XUI'           	;0
407 285  FETCH_DIM_R/81            $171=     $170                 342:'filter'        	;0
408 285  IS_EQUAL/17               #172=     $171                 343:11              	;0
409 285  BOOL/52                   #169=     #172                 ?0                  	;0
410 285  BOOL_NOT/13               #173=     #169                 ?0                  	;0	<<405
411 285  JMPZ/43                   ?0        #173                 ?413                	;0	>>413
412 286  GOTO/253                  ?0        ?414                 ?344                	;0
413 288  ECHO/40                   ?0        345:' selected'      ?0                  	;0	<<411
414 290  ECHO/40                   ?0        346:'>Adaptive Link</option>
									<option value="12"' ?0                  	;0
415 291  FETCH_STATIC_PROP_IS/176  $174=     347:'rRequest'       348:'XUI'           	;0
416 291  ISSET_ISEMPTY_DIM_OBJ/115 #175=     $174                 350:'filter'        	;33554432
417 291  JMPZ_EX/46                #175=     #175                 ?422                	;0	>>422
418 291  FETCH_STATIC_PROP_R/173   $176=     351:'rRequest'       352:'XUI'           	;0
419 291  FETCH_DIM_R/81            $177=     $176                 354:'filter'        	;0
420 291  IS_EQUAL/17               #178=     $177                 355:12              	;0
421 291  BOOL/52                   #175=     #178                 ?0                  	;0
422 291  BOOL_NOT/13               #179=     #175                 ?0                  	;0	<<417
423 291  JMPZ/43                   ?0        #179                 ?425                	;0	>>425
424 292  GOTO/253                  ?0        ?131                 ?356                	;0
425 294  GOTO/253                  ?0        ?130                 ?357                	;0	<<423
426 297  ECHO/40                   ?0        358:'>Stopped</option>
                                    <option value="4"' ?0                  	;0
427 298  FETCH_STATIC_PROP_IS/176  $180=     359:'rRequest'       360:'XUI'           	;0
428 298  ISSET_ISEMPTY_DIM_OBJ/115 #181=     $180                 362:'filter'        	;33554432
429 298  JMPZ_EX/46                #181=     #181                 ?434                	;0	>>434
430 298  FETCH_STATIC_PROP_R/173   $182=     363:'rRequest'       364:'XUI'           	;0
431 298  FETCH_DIM_R/81            $183=     $182                 366:'filter'        	;0
432 298  IS_EQUAL/17               #184=     $183                 367:4               	;0
433 298  BOOL/52                   #181=     #184                 ?0                  	;0
434 298  BOOL_NOT/13               #185=     #181                 ?0                  	;0	<<429
435 298  JMPZ/43                   ?0        #185                 ?437                	;0	>>437
436 299  GOTO/253                  ?0        ?438                 ?368                	;0
437 301  ECHO/40                   ?0        369:' selected'      ?0                  	;0	<<435
438 303  GOTO/253                  ?0        ?237                 ?370                	;0
439 305  ECHO/40                   ?0        371:'                                    <th>Source</th>
									' ?0                  	;0
440 306  GOTO/253                  ?0        ?442                 ?372                	;0
441 308  ECHO/40                   ?0        373:'									<th>Servers</th>
                                    ' ?0                  	;0
442 310  GOTO/253                  ?0        ?309                 ?374                	;0
443 313  ECHO/40                   ?0        375:'>'              ?0                  	;0
444 314  FETCH_DIM_R/81            $186=     16?12                376:'all_categories'	;0
445 314  ECHO/40                   ?0        $186                 ?0                  	;0
446 315  ECHO/40                   ?0        377:'</option>
                                    <option value="-1"' ?0                  	;0
447 316  FETCH_STATIC_PROP_IS/176  $187=     378:'rRequest'       379:'XUI'           	;0
448 316  ISSET_ISEMPTY_DIM_OBJ/115 #188=     $187                 381:'category'      	;33554432
449 316  JMPZ_EX/46                #188=     #188                 ?454                	;0	>>454
450 316  FETCH_STATIC_PROP_R/173   $189=     382:'rRequest'       383:'XUI'           	;0
451 316  FETCH_DIM_R/81            $190=     $189                 385:'category'      	;0
452 316  IS_EQUAL/17               #191=     $190                 386:-1              	;0
453 316  BOOL/52                   #188=     #191                 ?0                  	;0
454 316  BOOL_NOT/13               #192=     #188                 ?0                  	;0	<<449
455 316  JMPZ/43                   ?0        #192                 ?457                	;0	>>457
456 317  GOTO/253                  ?0        ?191                 ?387                	;0
457 319  GOTO/253                  ?0        ?190                 ?388                	;0	<<455
458 321  FE_RESET_R/77             $193=     16?5                 ?479                	;0
459 321  FE_FETCH_R/78             ?0        $193                 16?11               	;479	>>479	<<478
460 322  ECHO/40                   ?0        389:'                                    <option value="' ?0                  	;0
461 323  ECHO/40                   ?0        16?11                ?0                  	;0
462 324  ECHO/40                   ?0        390:'"'              ?0                  	;0
463 325  FETCH_STATIC_PROP_IS/176  $194=     391:'rRequest'       392:'XUI'           	;0
464 325  ISSET_ISEMPTY_DIM_OBJ/115 #195=     $194                 394:'audio'         	;33554432
465 325  JMPZ_EX/46                #195=     #195                 ?470                	;0	>>470
466 325  FETCH_STATIC_PROP_R/173   $196=     395:'rRequest'       396:'XUI'           	;0
467 325  FETCH_DIM_R/81            $197=     $196                 398:'audio'         	;0
468 325  IS_EQUAL/17               #198=     $197                 16?11               	;0
469 325  BOOL/52                   #195=     #198                 ?0                  	;0
470 325  BOOL_NOT/13               #199=     #195                 ?0                  	;0	<<465
471 325  JMPZ/43                   ?0        #199                 ?474                	;0	>>474
472 326  NOP/0                     ?0        ?0                   ?0                  	;1
473 326  GOTO/253                  ?0        ?475                 ?399                	;0
474 328  ECHO/40                   ?0        400:' selected'      ?0                  	;0	<<471
475 330  ECHO/40                   ?0        401:'>'              ?0                  	;0
476 331  ECHO/40                   ?0        16?11                ?0                  	;0
477 332  ECHO/40                   ?0        402:'</option>
                                    ' ?0                  	;0
478 333  JMP/42                    ?0        ?459                 ?0                  	;0	>>459
479 333  FE_FREE/127               ?0        $193                 ?0                  	;0	<<458
480 336  ECHO/40                   ?0        403:'                                </select>
                            </div>
                            <div class="col-md-1">
                                <select id="stream_video" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
481 337  FETCH_STATIC_PROP_IS/176  $200=     404:'rRequest'       405:'XUI'           	;0
482 337  ISSET_ISEMPTY_DIM_OBJ/115 #201=     $200                 407:'video'         	;33554432
483 337  JMPZ/43                   ?0        #201                 ?485                	;0	>>485
484 338  GOTO/253                  ?0        ?288                 ?408                	;0
485 340  ECHO/40                   ?0        409:' selected'      ?0                  	;0	<<483
486 341  GOTO/253                  ?0        ?288                 ?410                	;0
487 343  ECHO/40                   ?0        411:' selected'      ?0                  	;0
488 345  ECHO/40                   ?0        412:'>Timeshift</option>
                                    <option value="8"' ?0                  	;0
489 346  FETCH_STATIC_PROP_IS/176  $202=     413:'rRequest'       414:'XUI'           	;0
490 346  ISSET_ISEMPTY_DIM_OBJ/115 #203=     $202                 416:'filter'        	;33554432
491 346  JMPZ_EX/46                #203=     #203                 ?496                	;0	>>496
492 346  FETCH_STATIC_PROP_R/173   $204=     417:'rRequest'       418:'XUI'           	;0
493 346  FETCH_DIM_R/81            $205=     $204                 420:'filter'        	;0
494 346  IS_EQUAL/17               #206=     $205                 421:8               	;0
495 346  BOOL/52                   #203=     #206                 ?0                  	;0
496 346  BOOL_NOT/13               #207=     #203                 ?0                  	;0	<<491
497 346  JMPZ/43                   ?0        #207                 ?499                	;0	>>499
498 347  GOTO/253                  ?0        ?224                 ?422                	;0
499 349  ECHO/40                   ?0        423:' selected'      ?0                  	;0	<<497
500 350  GOTO/253                  ?0        ?224                 ?424                	;0
501 352  ECHO/40                   ?0        425:'					</div>
					<h4 class="page-title">Streams</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
502 353  ISSET_ISEMPTY_CV/197      #208=     16?13                ?0                  	;33554432
503 353  JMPZ_EX/46                #208=     #208                 ?507                	;0	>>507
504 353  FETCH_CONSTANT/99         #209=     ?0                   426:'STATUS_SUCCESS'	;16
505 353  IS_EQUAL/17               #210=     16?13                #209                	;0
506 353  BOOL/52                   #208=     #210                 ?0                  	;0
507 353  BOOL_NOT/13               #211=     #208                 ?0                  	;0	<<503
508 353  JMPZ/43                   ?0        #211                 ?510                	;0	>>510
509 354  GOTO/253                  ?0        ?37                  ?429                	;0
510 356  ECHO/40                   ?0        430:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    ' ?0                  	;0	<<508
511 357  FETCH_DIM_R/81            $212=     16?12                431:'stream_success'	;0
512 357  ECHO/40                   ?0        $212                 ?0                  	;0
513 358  ECHO/40                   ?0        432:'                </div>
                ' ?0                  	;0
514 359  GOTO/253                  ?0        ?37                  ?433                	;0
515 361  FETCH_STATIC_PROP_IS/176  $213=     434:'rRequest'       435:'XUI'           	;0
516 361  ISSET_ISEMPTY_DIM_OBJ/115 #214=     $213                 437:'server'        	;33554432
517 361  JMPZ/43                   ?0        #214                 ?519                	;0	>>519
518 362  GOTO/253                  ?0        ?520                 ?438                	;0
519 364  ECHO/40                   ?0        439:' selected'      ?0                  	;0	<<517
520 366  ECHO/40                   ?0        440:'>'              ?0                  	;0
521 367  FETCH_DIM_R/81            $215=     16?12                441:'all_servers'   	;0
522 367  ECHO/40                   ?0        $215                 ?0                  	;0
523 368  GOTO/253                  ?0        ?176                 ?442                	;0
524 370  INCLUDE_OR_EVAL/73        ?202      443:'session.php'    ?0                  	;2	<<0
525 371  INCLUDE_OR_EVAL/73        ?203      444:'functions.php'  ?0                  	;2
526 372  INIT_FCALL_BY_NAME/59     ?0        ?0                   445:'E6D500e19634D513'	;0
527 372  DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
528 372  JMPZ/43                   ?0        $218                 ?530                	;0	>>530
529 373  GOTO/253                  ?0        ?532                 ?447                	;0
530 375  INIT_FCALL_BY_NAME/59     ?0        ?0                   448:'E72F42A93714BA87'	;0	<<528
531 375  DO_FCALL_BY_NAME/131      ?205      ?0                   ?0                  	;0
532 377  GOTO/253                  ?0        ?43                  ?450                	;0
533 379  ECHO/40                   ?0        451:'>Audio</option>
                                    <option value="-1"' ?0                  	;0
534 380  FETCH_STATIC_PROP_IS/176  $220=     452:'rRequest'       453:'XUI'           	;0
535 380  ISSET_ISEMPTY_DIM_OBJ/115 #221=     $220                 455:'audio'         	;33554432
536 380  JMPZ_EX/46                #221=     #221                 ?541                	;0	>>541
537 380  FETCH_STATIC_PROP_R/173   $222=     456:'rRequest'       457:'XUI'           	;0
538 380  FETCH_DIM_R/81            $223=     $222                 459:'audio'         	;0
539 380  IS_EQUAL/17               #224=     $223                 460:'-1'            	;0
540 380  BOOL/52                   #221=     #224                 ?0                  	;0
541 380  BOOL_NOT/13               #225=     #221                 ?0                  	;0	<<536
542 380  JMPZ/43                   ?0        #225                 ?544                	;0	>>544
543 381  GOTO/253                  ?0        ?545                 ?461                	;0
544 383  ECHO/40                   ?0        462:' selected'      ?0                  	;0	<<542
545 385  ECHO/40                   ?0        463:'>None</option>
                                    ' ?0                  	;0
546 386  GOTO/253                  ?0        ?458                 ?464                	;0
547 388  INCLUDE_OR_EVAL/73        ?212      465:'footer.php'     ?0                  	;2
548 389  NOP/0                     ?0        466:1                ?0                  	;4294967295
*/

?>
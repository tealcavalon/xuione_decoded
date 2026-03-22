<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?150                 ?0                  	;0	>>150
1   5    ECHO/40                   ?0        1:'</option>
                                    <option value="2"' ?0                  	;0
2   6    FETCH_STATIC_PROP_IS/176  $13=      2:'rRequest'         3:'XUI'             	;0
3   6    ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  5:'filter'          	;33554432
4   6    JMPZ_EX/46                #14=      #14                  ?9                  	;0	>>9
5   6    FETCH_STATIC_PROP_R/173   $15=      6:'rRequest'         7:'XUI'             	;0
6   6    FETCH_DIM_R/81            $16=      $15                  9:'filter'          	;0
7   6    IS_EQUAL/17               #17=      $16                  10:2                	;0
8   6    BOOL/52                   #14=      #17                  ?0                  	;0
9   6    BOOL_NOT/13               #18=      #14                  ?0                  	;0	<<4
10  6    JMPZ/43                   ?0        #18                  ?12                 	;0	>>12
11  7    GOTO/253                  ?0        ?13                  ?11                 	;0
12  9    ECHO/40                   ?0        12:' selected'       ?0                  	;0	<<10
13  11   ECHO/40                   ?0        13:'>'               ?0                  	;0
14  12   GOTO/253                  ?0        ?15                  ?14                 	;0
15  14   FETCH_DIM_R/81            $19=      16?0                 15:'encoding'       	;0
16  14   ECHO/40                   ?0        $19                  ?0                  	;0
17  15   ECHO/40                   ?0        16:'</option>
                                    <option value="3"' ?0                  	;0
18  16   FETCH_STATIC_PROP_IS/176  $20=      17:'rRequest'        18:'XUI'            	;0
19  16   ISSET_ISEMPTY_DIM_OBJ/115 #21=      $20                  20:'filter'         	;33554432
20  16   JMPZ_EX/46                #21=      #21                  ?25                 	;0	>>25
21  16   FETCH_STATIC_PROP_R/173   $22=      21:'rRequest'        22:'XUI'            	;0
22  16   FETCH_DIM_R/81            $23=      $22                  24:'filter'         	;0
23  16   IS_EQUAL/17               #24=      $23                  25:3                	;0
24  16   BOOL/52                   #21=      #24                  ?0                  	;0
25  16   BOOL_NOT/13               #25=      #21                  ?0                  	;0	<<20
26  16   JMPZ/43                   ?0        #25                  ?28                 	;0	>>28
27  17   GOTO/253                  ?0        ?29                  ?26                 	;0
28  19   ECHO/40                   ?0        27:' selected'       ?0                  	;0	<<26
29  21   GOTO/253                  ?0        ?261                 ?28                 	;0
30  23   ECHO/40                   ?0        29:'" placeholder="' ?0                  	;0
31  24   FETCH_DIM_R/81            $26=      16?0                 30:'search_episodes'	;0
32  24   ECHO/40                   ?0        $26                  ?0                  	;0
33  25   ECHO/40                   ?0        31:'...">
                            </div>
                            <div class="col-md-2">
                                <select id="episodes_server" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
34  26   FETCH_STATIC_PROP_IS/176  $27=      32:'rRequest'        33:'XUI'            	;0
35  26   ISSET_ISEMPTY_DIM_OBJ/115 #28=      $27                  35:'server'         	;33554432
36  26   JMPZ/43                   ?0        #28                  ?38                 	;0	>>38
37  27   GOTO/253                  ?0        ?286                 ?36                 	;0
38  29   ECHO/40                   ?0        37:' selected'       ?0                  	;0	<<36
39  30   GOTO/253                  ?0        ?286                 ?38                 	;0
40  33   ECHO/40                   ?0        39:'>Audio</option>
                                    <option value="-1"' ?0                  	;0
41  34   FETCH_STATIC_PROP_IS/176  $29=      40:'rRequest'        41:'XUI'            	;0
42  34   ISSET_ISEMPTY_DIM_OBJ/115 #30=      $29                  43:'audio'          	;33554432
43  34   JMPZ_EX/46                #30=      #30                  ?48                 	;0	>>48
44  34   FETCH_STATIC_PROP_R/173   $31=      44:'rRequest'        45:'XUI'            	;0
45  34   FETCH_DIM_R/81            $32=      $31                  47:'audio'          	;0
46  34   IS_EQUAL/17               #33=      $32                  48:'-1'             	;0
47  34   BOOL/52                   #30=      #33                  ?0                  	;0
48  34   BOOL_NOT/13               #34=      #30                  ?0                  	;0	<<43
49  34   JMPZ/43                   ?0        #34                  ?51                 	;0	>>51
50  35   GOTO/253                  ?0        ?52                  ?49                 	;0
51  37   ECHO/40                   ?0        50:' selected'       ?0                  	;0	<<49
52  39   GOTO/253                  ?0        ?53                  ?51                 	;0
53  41   ECHO/40                   ?0        52:'>None</option>
                                    ' ?0                  	;0
54  42   FE_RESET_R/77             $35=      16?1                 ?75                 	;0
55  42   FE_FETCH_R/78             ?0        $35                  16?2                	;75	>>75	<<74
56  43   ECHO/40                   ?0        53:'                                    <option value="' ?0                  	;0
57  44   ECHO/40                   ?0        16?2                 ?0                  	;0
58  45   ECHO/40                   ?0        54:'"'               ?0                  	;0
59  46   FETCH_STATIC_PROP_IS/176  $36=      55:'rRequest'        56:'XUI'            	;0
60  46   ISSET_ISEMPTY_DIM_OBJ/115 #37=      $36                  58:'audio'          	;33554432
61  46   JMPZ_EX/46                #37=      #37                  ?66                 	;0	>>66
62  46   FETCH_STATIC_PROP_R/173   $38=      59:'rRequest'        60:'XUI'            	;0
63  46   FETCH_DIM_R/81            $39=      $38                  62:'audio'          	;0
64  46   IS_EQUAL/17               #40=      $39                  16?2                	;0
65  46   BOOL/52                   #37=      #40                  ?0                  	;0
66  46   BOOL_NOT/13               #41=      #37                  ?0                  	;0	<<61
67  46   JMPZ/43                   ?0        #41                  ?70                 	;0	>>70
68  47   NOP/0                     ?0        ?0                   ?0                  	;1
69  47   GOTO/253                  ?0        ?71                  ?63                 	;0
70  49   ECHO/40                   ?0        64:' selected'       ?0                  	;0	<<67
71  51   ECHO/40                   ?0        65:'>'               ?0                  	;0
72  52   ECHO/40                   ?0        16?2                 ?0                  	;0
73  53   ECHO/40                   ?0        66:'</option>
                                    ' ?0                  	;0
74  54   JMP/42                    ?0        ?55                  ?0                  	;0	>>55
75  54   FE_FREE/127               ?0        $35                  ?0                  	;0	<<54
76  57   ECHO/40                   ?0        67:'                                </select>
                            </div>
                            <div class="col-md-1">
                                <select id="episodes_video" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
77  58   FETCH_STATIC_PROP_IS/176  $42=      68:'rRequest'        69:'XUI'            	;0
78  58   ISSET_ISEMPTY_DIM_OBJ/115 #43=      $42                  71:'video'          	;33554432
79  58   JMPZ/43                   ?0        #43                  ?81                 	;0	>>81
80  59   GOTO/253                  ?0        ?383                 ?72                 	;0
81  61   GOTO/253                  ?0        ?382                 ?73                 	;0	<<79
82  63   ECHO/40                   ?0        74:'									<th>'   ?0                  	;0
83  64   FETCH_DIM_R/81            $44=      16?0                 75:'servers'        	;0
84  64   ECHO/40                   ?0        $44                  ?0                  	;0
85  65   ECHO/40                   ?0        76:'</th>
                                    ' ?0                  	;0
86  67   ECHO/40                   ?0        77:'                                    <th class="text-center">' ?0                  	;0
87  68   GOTO/253                  ?0        ?252                 ?78                 	;0
88  70   INIT_METHOD_CALL/112      ?0        16?3                 79:'get_rows'       	;0
89  70   DO_FCALL/60               $45=      ?0                   ?0                  	;0
90  70   FE_RESET_R/77             $46=      $45                  ?96                 	;0
91  70   FE_FETCH_R/78             ?0        $46                  16?4                	;96	>>96	<<95
92  71   FETCH_DIM_R/81            $48=      16?4                 81:'video_codec'    	;0
93  71   ASSIGN_DIM/147            ?34       16?5                 ?4414262            	;0
94  71   OP_DATA/137               ?0        $48                  ?0                  	;0
95  72   JMP/42                    ?0        ?91                  ?0                  	;0	>>91
96  72   FE_FREE/127               ?0        $46                  ?0                  	;0	<<90
97  75   ASSIGN/38                 ?36       16?6                 82:'Episodes'       	;0
98  76   INCLUDE_OR_EVAL/73        ?37       83:'header.php'      ?0                  	;2
99  77   ECHO/40                   ?0        84:'<div class="wrapper"' ?0                  	;0
100 78   GOTO/253                  ?0        ?450                 ?85                 	;0
101 80   ASSIGN/38                 $51=      16?5                 86:array (
)        	;0
102 80   ASSIGN/38                 ?39       16?1                 $51                 	;0
103 81   INIT_METHOD_CALL/112      ?0        16?3                 87:'query'          	;1
104 81   SEND_VAL_EX/116           ?80       89:'SELECT DISTINCT(`audio_codec`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `audio_codec` IS NOT NULL AND `type` = 5 ORDER BY `audio_codec` ASC;' ?1                  	;0
105 81   DO_FCALL/60               ?40       ?0                   ?0                  	;0
106 82   INIT_METHOD_CALL/112      ?0        16?3                 90:'get_rows'       	;0
107 82   DO_FCALL/60               $54=      ?0                   ?0                  	;0
108 82   FE_RESET_R/77             $55=      $54                  ?114                	;0
109 82   FE_FETCH_R/78             ?0        $55                  16?4                	;114	>>114	<<113
110 83   FETCH_DIM_R/81            $57=      16?4                 92:'audio_codec'    	;0
111 83   ASSIGN_DIM/147            ?43       16?1                 ?4414262            	;0
112 83   OP_DATA/137               ?0        $57                  ?0                  	;0
113 84   JMP/42                    ?0        ?109                 ?0                  	;0	>>109
114 84   FE_FREE/127               ?0        $55                  ?0                  	;0	<<108
115 87   INIT_METHOD_CALL/112      ?0        16?3                 93:'query'          	;1
116 87   SEND_VAL_EX/116           ?80       95:'SELECT DISTINCT(`video_codec`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `video_codec` IS NOT NULL AND `type` = 5 ORDER BY `video_codec` ASC;' ?1                  	;0
117 87   DO_FCALL/60               ?45       ?0                   ?0                  	;0
118 88   GOTO/253                  ?0        ?88                  ?96                 	;0
119 90   ECHO/40                   ?0        97:'                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="episodes_series">Series &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearSeries();"><i class="mdi mdi-close"></i></button></label>
                            <div class="col-md-2">
                                <select id="episodes_series" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
120 91   FETCH_STATIC_PROP_IS/176  $59=      98:'rRequest'        99:'XUI'            	;0
121 91   ISSET_ISEMPTY_DIM_OBJ/115 #60=      $59                  101:'series'        	;33554432
122 91   JMPZ_EX/46                #60=      #60                  ?133                	;0	>>133
123 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'A2297542D8bd35F6'	;1
124 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'intval'        	;1
125 91   FETCH_STATIC_PROP_FUNC_ARG/177 $61=      106:'rRequest'       107:'XUI'           	;1
126 91   FETCH_DIM_FUNC_ARG/93     $62=      $61                  109:'series'        	;1
127 91   SEND_VAR_EX/66            ?80       $62                  ?1                  	;0
128 91   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
129 91   SEND_VAR_NO_REF_EX/50     ?80       $63                  ?1                  	;0
130 91   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
131 91   ASSIGN/38                 $65=      16?7                 $64                 	;0
132 91   BOOL/52                   #60=      $65                  ?0                  	;0
133 91   BOOL_NOT/13               #66=      #60                  ?0                  	;0	<<122
134 91   JMPZ/43                   ?0        #66                  ?136                	;0	>>136
135 92   GOTO/253                  ?0        ?280                 ?110                	;0
136 94   ECHO/40                   ?0        111:'                                    <option value="' ?0                  	;0	<<134
137 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'intval'        	;1
138 95   FETCH_DIM_FUNC_ARG/93     $67=      16?7                 114:'id'            	;1
139 95   SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
140 95   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
141 95   ECHO/40                   ?0        $68                  ?0                  	;0
142 96   ECHO/40                   ?0        115:'" selected="selected">' ?0                  	;0
143 97   GOTO/253                  ?0        ?277                 ?116                	;0
144 99   ECHO/40                   ?0        117:'                                    <th>' ?0                  	;0
145 100  FETCH_DIM_R/81            $69=      16?0                 118:'server'        	;0
146 100  ECHO/40                   ?0        $69                  ?0                  	;0
147 101  ECHO/40                   ?0        119:'</th>
									' ?0                  	;0
148 102  GOTO/253                  ?0        ?86                  ?120                	;0
149 104  GOTO/253                  ?0        ?82                  ?121                	;0
150 106  INCLUDE_OR_EVAL/73        ?57       122:'session.php'    ?0                  	;2	<<0
151 107  INCLUDE_OR_EVAL/73        ?58       123:'functions.php'  ?0                  	;2
152 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'e6D500E19634d513'	;0
153 108  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
154 108  JMPZ/43                   ?0        $72                  ?156                	;0	>>156
155 109  GOTO/253                  ?0        ?158                 ?126                	;0
156 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'e72F42a93714BA87'	;0	<<154
157 111  DO_FCALL_BY_NAME/131      ?60       ?0                   ?0                  	;0
158 113  GOTO/253                  ?0        ?101                 ?129                	;0
159 115  ECHO/40                   ?0        130:' selected'      ?0                  	;0
160 117  ECHO/40                   ?0        131:'>'              ?0                  	;0
161 118  FETCH_DIM_R/81            $74=      16?0                 132:'no_filter'     	;0
162 118  ECHO/40                   ?0        $74                  ?0                  	;0
163 119  ECHO/40                   ?0        133:'</option>
                                    <option value="1"' ?0                  	;0
164 120  GOTO/253                  ?0        ?468                 ?134                	;0
165 123  ECHO/40                   ?0        135:'>'              ?0                  	;0
166 124  FETCH_DIM_R/81            $75=      16?0                 136:'ready'         	;0
167 124  ECHO/40                   ?0        $75                  ?0                  	;0
168 125  ECHO/40                   ?0        137:'</option>
                                    <option value="5"' ?0                  	;0
169 126  FETCH_STATIC_PROP_IS/176  $76=      138:'rRequest'       139:'XUI'           	;0
170 126  ISSET_ISEMPTY_DIM_OBJ/115 #77=      $76                  141:'filter'        	;33554432
171 126  JMPZ_EX/46                #77=      #77                  ?176                	;0	>>176
172 126  FETCH_STATIC_PROP_R/173   $78=      142:'rRequest'       143:'XUI'           	;0
173 126  FETCH_DIM_R/81            $79=      $78                  145:'filter'        	;0
174 126  IS_EQUAL/17               #80=      $79                  146:5               	;0
175 126  BOOL/52                   #77=      #80                  ?0                  	;0
176 126  BOOL_NOT/13               #81=      #77                  ?0                  	;0	<<171
177 126  JMPZ/43                   ?0        #81                  ?179                	;0	>>179
178 127  GOTO/253                  ?0        ?354                 ?147                	;0
179 129  GOTO/253                  ?0        ?353                 ?148                	;0	<<177
180 132  ECHO/40                   ?0        149:'                                </select>
                            </div>
                            <div class="col-md-1">
                                <select id="episodes_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
181 133  FE_RESET_R/77             $82=      150:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?222                	;0
182 133  FE_FETCH_R/78             ?0        $82                  16?8                	;222	>>222	<<221
183 134  NOP/0                     ?0        ?0                   ?0                  	;1
184 134  GOTO/253                  ?0        ?203                 ?151                	;0
185 136  NOP/0                     ?0        ?0                   ?0                  	;1
186 136  GOTO/253                  ?0        ?197                 ?152                	;0
187 138  FETCH_STATIC_PROP_R/173   $83=      153:'rRequest'       154:'XUI'           	;0
188 138  FETCH_DIM_R/81            $84=      $83                  156:'entries'       	;0
189 138  IS_EQUAL/17               #85=      $84                  16?8                	;0
190 138  BOOL_NOT/13               #86=      #85                  ?0                  	;0
191 138  JMPZ/43                   ?0        #86                  ?194                	;0	>>194
192 139  NOP/0                     ?0        ?0                   ?0                  	;1
193 139  GOTO/253                  ?0        ?195                 ?157                	;0
194 141  ECHO/40                   ?0        158:' selected'      ?0                  	;0	<<191
195 143  NOP/0                     ?0        ?0                   ?0                  	;1
196 143  GOTO/253                  ?0        ?197                 ?159                	;0
197 146  ECHO/40                   ?0        160:' value="'       ?0                  	;0
198 147  ECHO/40                   ?0        16?8                 ?0                  	;0
199 148  ECHO/40                   ?0        161:'">'             ?0                  	;0
200 149  ECHO/40                   ?0        16?8                 ?0                  	;0
201 150  NOP/0                     ?0        ?0                   ?0                  	;1
202 150  GOTO/253                  ?0        ?218                 ?162                	;0
203 152  ECHO/40                   ?0        163:'                                    <option' ?0                  	;0
204 153  FETCH_STATIC_PROP_IS/176  $87=      164:'rRequest'       165:'XUI'           	;0
205 153  ISSET_ISEMPTY_DIM_OBJ/115 #88=      $87                  167:'entries'       	;33554432
206 153  JMPZ/43                   ?0        #88                  ?209                	;0	>>209
207 154  NOP/0                     ?0        ?0                   ?0                  	;1
208 154  GOTO/253                  ?0        ?187                 ?168                	;0
209 156  FETCH_DIM_R/81            $89=      16?9                 169:'default_entries'	;0	<<206
210 156  IS_EQUAL/17               #90=      $89                  16?8                	;0
211 156  BOOL_NOT/13               #91=      #90                  ?0                  	;0
212 156  JMPZ/43                   ?0        #91                  ?215                	;0	>>215
213 157  NOP/0                     ?0        ?0                   ?0                  	;1
214 157  GOTO/253                  ?0        ?216                 ?170                	;0
215 159  ECHO/40                   ?0        171:' selected'      ?0                  	;0	<<212
216 161  NOP/0                     ?0        ?0                   ?0                  	;1
217 161  GOTO/253                  ?0        ?185                 ?172                	;0
218 163  ECHO/40                   ?0        173:'</option>
                                    ' ?0                  	;0
219 165  NOP/0                     ?0        ?0                   ?0                  	;1
220 165  GOTO/253                  ?0        ?221                 ?174                	;0
221 166  JMP/42                    ?0        ?182                 ?0                  	;0	>>182
222 166  FE_FREE/127               ?0        $82                  ?0                  	;0	<<181
223 169  ECHO/40                   ?0        175:'                                </select>
                            </div>
                        </div>
                        <table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">
                            <thead>
                                <tr>
                                    <th class="text-center">' ?0                  	;0
224 170  GOTO/253                  ?0        ?241                 ?176                	;0
225 172  ECHO/40                   ?0        177:' selected'      ?0                  	;0
226 174  ECHO/40                   ?0        178:'>Transcoding</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <select id="episodes_audio" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
227 175  FETCH_STATIC_PROP_IS/176  $92=      179:'rRequest'       180:'XUI'           	;0
228 175  ISSET_ISEMPTY_DIM_OBJ/115 #93=      $92                  182:'audio'         	;33554432
229 175  JMPZ/43                   ?0        #93                  ?231                	;0	>>231
230 176  GOTO/253                  ?0        ?40                  ?183                	;0
231 178  ECHO/40                   ?0        184:' selected'      ?0                  	;0	<<229
232 179  GOTO/253                  ?0        ?40                  ?185                	;0
233 181  ECHO/40                   ?0        186:'</th>
                                    <th class="text-center">' ?0                  	;0
234 182  FETCH_DIM_R/81            $94=      16?0                 187:'player'        	;0
235 182  ECHO/40                   ?0        $94                  ?0                  	;0
236 183  ECHO/40                   ?0        188:'</th>
                                    <th class="text-center">' ?0                  	;0
237 184  FETCH_DIM_R/81            $95=      16?0                 189:'stream_info'   	;0
238 184  ECHO/40                   ?0        $95                  ?0                  	;0
239 185  ECHO/40                   ?0        190:'</th>
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
240 186  GOTO/253                  ?0        ?483                 ?191                	;0
241 188  FETCH_DIM_R/81            $96=      16?0                 192:'id'            	;0
242 188  ECHO/40                   ?0        $96                  ?0                  	;0
243 189  ECHO/40                   ?0        193:'</th>
                                    <th class="text-center">Image</th>
                                    <th>' ?0                  	;0
244 190  FETCH_DIM_R/81            $97=      16?0                 194:'name'          	;0
245 190  ECHO/40                   ?0        $97                  ?0                  	;0
246 191  ECHO/40                   ?0        195:'</th>
                                    ' ?0                  	;0
247 192  FETCH_DIM_R/81            $98=      16?9                 196:'streams_grouped'	;0
248 192  IS_EQUAL/17               #99=      $98                  197:1               	;0
249 192  JMPZ/43                   ?0        #99                  ?251                	;0	>>251
250 193  GOTO/253                  ?0        ?149                 ?198                	;0
251 195  GOTO/253                  ?0        ?144                 ?199                	;0	<<249
252 197  FETCH_DIM_R/81            $100=     16?0                 200:'clients'       	;0
253 197  ECHO/40                   ?0        $100                 ?0                  	;0
254 198  ECHO/40                   ?0        201:'</th>
                                    <th class="text-center">' ?0                  	;0
255 199  FETCH_DIM_R/81            $101=     16?0                 202:'status'        	;0
256 199  ECHO/40                   ?0        $101                 ?0                  	;0
257 200  ECHO/40                   ?0        203:'</th>
                                    <th class="text-center">' ?0                  	;0
258 201  FETCH_DIM_R/81            $102=     16?0                 204:'actions'       	;0
259 201  ECHO/40                   ?0        $102                 ?0                  	;0
260 202  GOTO/253                  ?0        ?233                 ?205                	;0
261 204  ECHO/40                   ?0        206:'>'              ?0                  	;0
262 205  FETCH_DIM_R/81            $103=     16?0                 207:'down'          	;0
263 205  ECHO/40                   ?0        $103                 ?0                  	;0
264 206  ECHO/40                   ?0        208:'</option>
                                    <option value="4"' ?0                  	;0
265 207  FETCH_STATIC_PROP_IS/176  $104=     209:'rRequest'       210:'XUI'           	;0
266 207  ISSET_ISEMPTY_DIM_OBJ/115 #105=     $104                 212:'filter'        	;33554432
267 207  JMPZ_EX/46                #105=     #105                 ?272                	;0	>>272
268 207  FETCH_STATIC_PROP_R/173   $106=     213:'rRequest'       214:'XUI'           	;0
269 207  FETCH_DIM_R/81            $107=     $106                 216:'filter'        	;0
270 207  IS_EQUAL/17               #108=     $107                 217:4               	;0
271 207  BOOL/52                   #105=     #108                 ?0                  	;0
272 207  BOOL_NOT/13               #109=     #105                 ?0                  	;0	<<267
273 207  JMPZ/43                   ?0        #109                 ?275                	;0	>>275
274 208  GOTO/253                  ?0        ?165                 ?218                	;0
275 210  ECHO/40                   ?0        219:' selected'      ?0                  	;0	<<273
276 211  GOTO/253                  ?0        ?165                 ?220                	;0
277 213  FETCH_DIM_R/81            $110=     16?7                 221:'title'         	;0
278 213  ECHO/40                   ?0        $110                 ?0                  	;0
279 214  ECHO/40                   ?0        222:'</option>
                                    ' ?0                  	;0
280 216  ECHO/40                   ?0        223:'                                </select>
                            </div>
                            <div class="col-md-1">
                                <select id="episodes_filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
281 217  FETCH_STATIC_PROP_IS/176  $111=     224:'rRequest'       225:'XUI'           	;0
282 217  ISSET_ISEMPTY_DIM_OBJ/115 #112=     $111                 227:'filter'        	;33554432
283 217  JMPZ/43                   ?0        #112                 ?285                	;0	>>285
284 218  GOTO/253                  ?0        ?160                 ?228                	;0
285 220  GOTO/253                  ?0        ?159                 ?229                	;0	<<283
286 223  ECHO/40                   ?0        230:'>'              ?0                  	;0
287 224  FETCH_DIM_R/81            $113=     16?0                 231:'all_servers'   	;0
288 224  ECHO/40                   ?0        $113                 ?0                  	;0
289 225  ECHO/40                   ?0        232:'</option>
                                    <option value="-1"' ?0                  	;0
290 226  FETCH_STATIC_PROP_IS/176  $114=     233:'rRequest'       234:'XUI'           	;0
291 226  ISSET_ISEMPTY_DIM_OBJ/115 #115=     $114                 236:'server'        	;33554432
292 226  JMPZ_EX/46                #115=     #115                 ?297                	;0	>>297
293 226  FETCH_STATIC_PROP_R/173   $116=     237:'rRequest'       238:'XUI'           	;0
294 226  FETCH_DIM_R/81            $117=     $116                 240:'server'        	;0
295 226  IS_EQUAL/17               #118=     $117                 241:-1              	;0
296 226  BOOL/52                   #115=     #118                 ?0                  	;0
297 226  BOOL_NOT/13               #119=     #115                 ?0                  	;0	<<292
298 226  JMPZ/43                   ?0        #119                 ?300                	;0	>>300
299 227  GOTO/253                  ?0        ?302                 ?242                	;0
300 229  GOTO/253                  ?0        ?301                 ?243                	;0	<<298
301 231  ECHO/40                   ?0        244:' selected'      ?0                  	;0
302 233  ECHO/40                   ?0        245:'>No Servers</option>
                                    ' ?0                  	;0
303 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'C6A90bFcd425eb63'	;0
304 234  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
305 234  FE_RESET_R/77             $121=     $120                 ?329                	;0
306 234  FE_FETCH_R/78             ?0        $121                 16?10               	;329	>>329	<<328
307 235  ECHO/40                   ?0        248:'                                    <option value="' ?0                  	;0
308 236  FETCH_DIM_R/81            $122=     16?10                249:'id'            	;0
309 236  ECHO/40                   ?0        $122                 ?0                  	;0
310 237  ECHO/40                   ?0        250:'"'              ?0                  	;0
311 238  FETCH_STATIC_PROP_IS/176  $123=     251:'rRequest'       252:'XUI'           	;0
312 238  ISSET_ISEMPTY_DIM_OBJ/115 #124=     $123                 254:'server'        	;33554432
313 238  JMPZ_EX/46                #124=     #124                 ?319                	;0	>>319
314 238  FETCH_STATIC_PROP_R/173   $125=     255:'rRequest'       256:'XUI'           	;0
315 238  FETCH_DIM_R/81            $126=     $125                 258:'server'        	;0
316 238  FETCH_DIM_R/81            $127=     16?10                259:'id'            	;0
317 238  IS_EQUAL/17               #128=     $126                 $127                	;0
318 238  BOOL/52                   #124=     #128                 ?0                  	;0
319 238  BOOL_NOT/13               #129=     #124                 ?0                  	;0	<<313
320 238  JMPZ/43                   ?0        #129                 ?323                	;0	>>323
321 239  NOP/0                     ?0        ?0                   ?0                  	;1
322 239  GOTO/253                  ?0        ?324                 ?260                	;0
323 241  ECHO/40                   ?0        261:' selected'      ?0                  	;0	<<320
324 243  ECHO/40                   ?0        262:'>'              ?0                  	;0
325 244  FETCH_DIM_R/81            $130=     16?10                263:'server_name'   	;0
326 244  ECHO/40                   ?0        $130                 ?0                  	;0
327 245  ECHO/40                   ?0        264:'</option>
                                    ' ?0                  	;0
328 246  JMP/42                    ?0        ?306                 ?0                  	;0	>>306
329 246  FE_FREE/127               ?0        $121                 ?0                  	;0	<<305
330 249  GOTO/253                  ?0        ?119                 ?265                	;0
331 252  ECHO/40                   ?0        266:' form-group row mb-4">
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="episodes_search" value="' ?0                  	;0
332 253  FETCH_STATIC_PROP_IS/176  $131=     267:'rRequest'       268:'XUI'           	;0
333 253  ISSET_ISEMPTY_DIM_OBJ/115 #132=     $131                 270:'search'        	;33554432
334 253  BOOL_NOT/13               #133=     #132                 ?0                  	;0
335 253  JMPZ/43                   ?0        #133                 ?337                	;0	>>337
336 254  GOTO/253                  ?0        ?343                 ?271                	;0
337 256  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'htmlspecialchars'	;1	<<335
338 256  FETCH_STATIC_PROP_FUNC_ARG/177 $134=     274:'rRequest'       275:'XUI'           	;1
339 256  FETCH_DIM_FUNC_ARG/93     $135=     $134                 277:'search'        	;1
340 256  SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
341 256  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
342 256  ECHO/40                   ?0        $136                 ?0                  	;0
343 258  GOTO/253                  ?0        ?30                  ?278                	;0
344 260  ECHO/40                   ?0        279:'					</div>
                    <h4 class="page-title">' ?0                  	;0
345 261  FETCH_DIM_R/81            $137=     16?0                 280:'episodes'      	;0
346 261  ECHO/40                   ?0        $137                 ?0                  	;0
347 262  ECHO/40                   ?0        281:'</h4>
                </div>
            </div>
        </div>     
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
348 263  BOOL_NOT/13               #138=     16?11                ?0                  	;0
349 263  JMPZ/43                   ?0        #138                 ?351                	;0	>>351
350 264  GOTO/253                  ?0        ?331                 ?282                	;0
351 266  ECHO/40                   ?0        283:'collapse'       ?0                  	;0	<<349
352 267  GOTO/253                  ?0        ?331                 ?284                	;0
353 269  ECHO/40                   ?0        285:' selected'      ?0                  	;0
354 271  ECHO/40                   ?0        286:'>'              ?0                  	;0
355 272  FETCH_DIM_R/81            $139=     16?0                 287:'direct'        	;0
356 272  ECHO/40                   ?0        $139                 ?0                  	;0
357 273  ECHO/40                   ?0        288:'</option>
									<option value="6"' ?0                  	;0
358 274  GOTO/253                  ?0        ?359                 ?289                	;0
359 276  FETCH_STATIC_PROP_IS/176  $140=     290:'rRequest'       291:'XUI'           	;0
360 276  ISSET_ISEMPTY_DIM_OBJ/115 #141=     $140                 293:'filter'        	;33554432
361 276  JMPZ_EX/46                #141=     #141                 ?366                	;0	>>366
362 276  FETCH_STATIC_PROP_R/173   $142=     294:'rRequest'       295:'XUI'           	;0
363 276  FETCH_DIM_R/81            $143=     $142                 297:'filter'        	;0
364 276  IS_EQUAL/17               #144=     $143                 298:6               	;0
365 276  BOOL/52                   #141=     #144                 ?0                  	;0
366 276  BOOL_NOT/13               #145=     #141                 ?0                  	;0	<<361
367 276  JMPZ/43                   ?0        #145                 ?369                	;0	>>369
368 277  GOTO/253                  ?0        ?370                 ?299                	;0
369 279  ECHO/40                   ?0        300:' selected'      ?0                  	;0	<<367
370 281  ECHO/40                   ?0        301:'>Duplicate</option>
									<option value="7"' ?0                  	;0
371 282  FETCH_STATIC_PROP_IS/176  $146=     302:'rRequest'       303:'XUI'           	;0
372 282  ISSET_ISEMPTY_DIM_OBJ/115 #147=     $146                 305:'filter'        	;33554432
373 282  JMPZ_EX/46                #147=     #147                 ?378                	;0	>>378
374 282  FETCH_STATIC_PROP_R/173   $148=     306:'rRequest'       307:'XUI'           	;0
375 282  FETCH_DIM_R/81            $149=     $148                 309:'filter'        	;0
376 282  IS_EQUAL/17               #150=     $149                 310:7               	;0
377 282  BOOL/52                   #147=     #150                 ?0                  	;0
378 282  BOOL_NOT/13               #151=     #147                 ?0                  	;0	<<373
379 282  JMPZ/43                   ?0        #151                 ?381                	;0	>>381
380 283  GOTO/253                  ?0        ?226                 ?311                	;0
381 285  GOTO/253                  ?0        ?225                 ?312                	;0	<<379
382 287  ECHO/40                   ?0        313:' selected'      ?0                  	;0
383 289  ECHO/40                   ?0        314:'>Video</option>
                                    <option value="-1"' ?0                  	;0
384 290  FETCH_STATIC_PROP_IS/176  $152=     315:'rRequest'       316:'XUI'           	;0
385 290  ISSET_ISEMPTY_DIM_OBJ/115 #153=     $152                 318:'video'         	;33554432
386 290  JMPZ_EX/46                #153=     #153                 ?391                	;0	>>391
387 290  FETCH_STATIC_PROP_R/173   $154=     319:'rRequest'       320:'XUI'           	;0
388 290  FETCH_DIM_R/81            $155=     $154                 322:'video'         	;0
389 290  IS_EQUAL/17               #156=     $155                 323:'-1'            	;0
390 290  BOOL/52                   #153=     #156                 ?0                  	;0
391 290  BOOL_NOT/13               #157=     #153                 ?0                  	;0	<<386
392 290  JMPZ/43                   ?0        #157                 ?394                	;0	>>394
393 291  GOTO/253                  ?0        ?425                 ?324                	;0
394 293  ECHO/40                   ?0        325:' selected'      ?0                  	;0	<<392
395 294  GOTO/253                  ?0        ?425                 ?326                	;0
396 296  FETCH_STATIC_PROP_IS/176  $158=     327:'rRequest'       328:'XUI'           	;0
397 296  ISSET_ISEMPTY_DIM_OBJ/115 #159=     $158                 330:'resolution'    	;33554432
398 296  JMPZ/43                   ?0        #159                 ?400                	;0	>>400
399 297  GOTO/253                  ?0        ?401                 ?331                	;0
400 299  ECHO/40                   ?0        332:' selected'      ?0                  	;0	<<398
401 301  ECHO/40                   ?0        333:'>Quality</option>
                                    ' ?0                  	;0
402 302  FE_RESET_R/77             $160=     334:array (
  0 => 240,
  1 => 360,
  2 => 480,
  3 => 576,
  4 => 720,
  5 => 1080,
  6 => 1440,
  7 => 2160,
) ?423                	;0
403 302  FE_FETCH_R/78             ?0        $160                 16?12               	;423	>>423	<<422
404 303  ECHO/40                   ?0        335:'                                    <option value="' ?0                  	;0
405 304  ECHO/40                   ?0        16?12                ?0                  	;0
406 305  ECHO/40                   ?0        336:'"'              ?0                  	;0
407 306  FETCH_STATIC_PROP_IS/176  $161=     337:'rRequest'       338:'XUI'           	;0
408 306  ISSET_ISEMPTY_DIM_OBJ/115 #162=     $161                 340:'resolution'    	;33554432
409 306  JMPZ_EX/46                #162=     #162                 ?414                	;0	>>414
410 306  FETCH_STATIC_PROP_R/173   $163=     341:'rRequest'       342:'XUI'           	;0
411 306  FETCH_DIM_R/81            $164=     $163                 344:'resolution'    	;0
412 306  IS_EQUAL/17               #165=     $164                 16?12               	;0
413 306  BOOL/52                   #162=     #165                 ?0                  	;0
414 306  BOOL_NOT/13               #166=     #162                 ?0                  	;0	<<409
415 306  JMPZ/43                   ?0        #166                 ?418                	;0	>>418
416 307  NOP/0                     ?0        ?0                   ?0                  	;1
417 307  GOTO/253                  ?0        ?419                 ?345                	;0
418 309  ECHO/40                   ?0        346:' selected'      ?0                  	;0	<<415
419 311  ECHO/40                   ?0        347:'>'              ?0                  	;0
420 312  ECHO/40                   ?0        16?12                ?0                  	;0
421 313  ECHO/40                   ?0        348:'p</option>
                                    ' ?0                  	;0
422 314  JMP/42                    ?0        ?403                 ?0                  	;0	>>403
423 314  FE_FREE/127               ?0        $160                 ?0                  	;0	<<402
424 316  GOTO/253                  ?0        ?180                 ?349                	;0
425 319  ECHO/40                   ?0        350:'>None</option>
                                    ' ?0                  	;0
426 320  FE_RESET_R/77             $167=     16?5                 ?447                	;0
427 320  FE_FETCH_R/78             ?0        $167                 16?2                	;447	>>447	<<446
428 321  ECHO/40                   ?0        351:'                                    <option value="' ?0                  	;0
429 322  ECHO/40                   ?0        16?2                 ?0                  	;0
430 323  ECHO/40                   ?0        352:'"'              ?0                  	;0
431 324  FETCH_STATIC_PROP_IS/176  $168=     353:'rRequest'       354:'XUI'           	;0
432 324  ISSET_ISEMPTY_DIM_OBJ/115 #169=     $168                 356:'video'         	;33554432
433 324  JMPZ_EX/46                #169=     #169                 ?438                	;0	>>438
434 324  FETCH_STATIC_PROP_R/173   $170=     357:'rRequest'       358:'XUI'           	;0
435 324  FETCH_DIM_R/81            $171=     $170                 360:'video'         	;0
436 324  IS_EQUAL/17               #172=     $171                 16?2                	;0
437 324  BOOL/52                   #169=     #172                 ?0                  	;0
438 324  BOOL_NOT/13               #173=     #169                 ?0                  	;0	<<433
439 324  JMPZ/43                   ?0        #173                 ?442                	;0	>>442
440 325  NOP/0                     ?0        ?0                   ?0                  	;1
441 325  GOTO/253                  ?0        ?443                 ?361                	;0
442 327  ECHO/40                   ?0        362:' selected'      ?0                  	;0	<<439
443 329  ECHO/40                   ?0        363:'>'              ?0                  	;0
444 330  ECHO/40                   ?0        16?2                 ?0                  	;0
445 331  ECHO/40                   ?0        364:'</option>
                                    ' ?0                  	;0
446 332  JMP/42                    ?0        ?427                 ?0                  	;0	>>427
447 332  FE_FREE/127               ?0        $167                 ?0                  	;0	<<426
448 335  ECHO/40                   ?0        365:'                                </select>
                            </div>
                            <div class="col-md-1">
                                <select id="episodes_resolution" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
449 336  GOTO/253                  ?0        ?396                 ?366                	;0
450 338  FETCH_IS/89               $174=     367:'_SERVER'        ?0                  	;0
451 338  ISSET_ISEMPTY_DIM_OBJ/115 #175=     $174                 368:'HTTP_X_REQUESTED_WITH'	;16777216
452 338  BOOL_NOT/13               #176=     #175                 ?0                  	;0
453 338  JMPZ_EX/46                #176=     #176                 ?461                	;0	>>461
454 338  INIT_FCALL_BY_NAME/59     ?0        ?0                   369:'strtolower'    	;1
455 338  FETCH_FUNC_ARG/92         $177=     371:'_SERVER'        ?0                  	;1
456 338  FETCH_DIM_FUNC_ARG/93     $178=     $177                 372:'HTTP_X_REQUESTED_WITH'	;1
457 338  SEND_VAR_EX/66            ?80       $178                 ?1                  	;0
458 338  DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
459 338  IS_EQUAL/17               #180=     $179                 373:'xmlhttprequest'	;0
460 338  BOOL/52                   #176=     #180                 ?0                  	;0
461 338  BOOL_NOT/13               #181=     #176                 ?0                  	;0	<<453
462 338  JMPZ/43                   ?0        #181                 ?464                	;0	>>464
463 339  GOTO/253                  ?0        ?465                 ?374                	;0
464 341  ECHO/40                   ?0        375:' style="display: none;"' ?0                  	;0	<<462
465 343  ECHO/40                   ?0        376:'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
466 344  INCLUDE_OR_EVAL/73        ?169      377:'topbar.php'     ?0                  	;2
467 345  GOTO/253                  ?0        ?344                 ?378                	;0
468 347  FETCH_STATIC_PROP_IS/176  $183=     379:'rRequest'       380:'XUI'           	;0
469 347  ISSET_ISEMPTY_DIM_OBJ/115 #184=     $183                 382:'filter'        	;33554432
470 347  JMPZ_EX/46                #184=     #184                 ?475                	;0	>>475
471 347  FETCH_STATIC_PROP_R/173   $185=     383:'rRequest'       384:'XUI'           	;0
472 347  FETCH_DIM_R/81            $186=     $185                 386:'filter'        	;0
473 347  IS_EQUAL/17               #187=     $186                 387:1               	;0
474 347  BOOL/52                   #184=     #187                 ?0                  	;0
475 347  BOOL_NOT/13               #188=     #184                 ?0                  	;0	<<470
476 347  JMPZ/43                   ?0        #188                 ?478                	;0	>>478
477 348  GOTO/253                  ?0        ?479                 ?388                	;0
478 350  ECHO/40                   ?0        389:' selected'      ?0                  	;0	<<476
479 352  ECHO/40                   ?0        390:'>'              ?0                  	;0
480 353  FETCH_DIM_R/81            $189=     16?0                 391:'encoded'       	;0
481 353  ECHO/40                   ?0        $189                 ?0                  	;0
482 354  GOTO/253                  ?0        ?1                   ?392                	;0
483 356  INCLUDE_OR_EVAL/73        ?177      393:'footer.php'     ?0                  	;2
484 357  NOP/0                     ?0        394:1                ?0                  	;4294967295
*/

?>
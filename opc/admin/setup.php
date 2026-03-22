<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?76                  ?0                  	;0	>>76
1   7    FETCH_STATIC_PROP_IS/176  $24=      1:'rRequest'         2:'XUI'             	;0
2   7    ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  4:'update'          	;33554432
3   7    BOOL_NOT/13               #26=      #25                  ?0                  	;0
4   7    JMPZ/43                   ?0        #26                  ?6                  	;0	>>6
5   8    GOTO/253                  ?0        ?553                 ?5                  	;0
6   10   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'file_exists'     	;1	<<4
7   10   FETCH_CONSTANT/99         #27=      ?0                   8:'TMP_PATH'        	;16
8   10   CONCAT/8                  #28=      #27                  11:'.migration.log' 	;0
9   10   SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
10  10   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
11  10   JMPZ/43                   ?0        $29                  ?13                 	;0	>>13
12  11   GOTO/253                  ?0        ?391                 ?12                 	;0
13  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'json_encode'    	;1	<<11
14  13   SEND_VAL_EX/116           ?80       15:array (
  'result' => false,
) ?1                  	;0
15  13   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
16  13   ECHO/40                   ?0        $30                  ?0                  	;0
17  14   GOTO/253                  ?0        ?390                 ?16                 	;0
18  16   ASSIGN/38                 ?7        16?0                 17:true             	;0
19  18   INIT_METHOD_CALL/112      ?0        16?1                 18:'query'          	;1
20  18   SEND_VAL_EX/116           ?80       20:'SHOW TABLES LIKE \'access_codes\';' ?1                  	;0
21  18   DO_FCALL/60               ?8        ?0                   ?0                  	;0
22  19   INIT_METHOD_CALL/112      ?0        16?1                 21:'num_rows'       	;0
23  19   DO_FCALL/60               $33=      ?0                   ?0                  	;0
24  19   IS_SMALLER/19             #34=      23:0                 $33                 	;0
25  19   BOOL_NOT/13               #35=      #34                  ?0                  	;0
26  19   JMPZ/43                   ?0        #35                  ?28                 	;0	>>28
27  20   GOTO/253                  ?0        ?483                 ?24                 	;0
28  22   ASSIGN/38                 ?12       16?2                 25:true             	;0	<<26
29  23   GOTO/253                  ?0        ?483                 ?26                 	;0
30  25   FE_RESET_R/77             $37=      16?3                 ?36                 	;0
31  25   FE_FETCH_R/78             #38=      $37                  16?4                	;36	>>36	<<35
32  25   ASSIGN/38                 ?15       16?5                 #38                 	;0
33  26   FETCH_DIM_R/81            $40=      16?4                 27:1                	;0
34  26   ASSIGN_ADD/23             ?17       16?6                 $40                 	;0
35  27   JMP/42                    ?0        ?31                  ?0                  	;0	>>31
36  27   FE_FREE/127               ?0        $37                  ?0                  	;0	<<30
37  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'ksort'          	;1
38  30   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
39  30   DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
40  32   BOOL_NOT/13               #43=      16?7                 ?0                  	;0
41  32   JMPZ_EX/46                #43=      #43                  ?46                 	;0	>>46
42  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'e6d500e19634D513'	;0
43  32   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
44  32   BOOL_NOT/13               #45=      $44                  ?0                  	;0
45  32   BOOL/52                   #43=      #45                  ?0                  	;0
46  32   BOOL_NOT/13               #46=      #43                  ?0                  	;0	<<41
47  32   JMPZ/43                   ?0        #46                  ?49                 	;0	>>49
48  33   GOTO/253                  ?0        ?263                 ?32                 	;0
49  35   GOTO/253                  ?0        ?261                 ?33                 	;0	<<47
50  37   GOTO/253                  ?0        ?482                 ?34                 	;0
51  39   ASSIGN/38                 ?23       16?8                 35:array (
)        	;0
52  40   FETCH_STATIC_PROP_R/173   $48=      36:'rRequest'        37:'XUI'            	;0
53  40   FE_RESET_R/77             $49=      $48                  ?74                 	;0
54  40   FE_FETCH_R/78             #50=      $49                  16?9                	;74	>>74	<<73
55  40   ASSIGN/38                 ?27       16?10                #50                 	;0
56  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'substr'         	;3
57  41   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
58  41   SEND_VAL_EX/116           ?96       41:0                 ?2                  	;0
59  41   SEND_VAL_EX/116           ?112      42:8                 ?3                  	;0
60  41   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
61  41   IS_EQUAL/17               #53=      $52                  43:'migrate#'       	;0
62  41   BOOL_NOT/13               #54=      #53                  ?0                  	;0
63  41   JMPZ/43                   ?0        #54                  ?66                 	;0	>>66
64  42   NOP/0                     ?0        ?0                   ?0                  	;1
65  42   GOTO/253                  ?0        ?73                  ?44                 	;0
66  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'explode'        	;2	<<63
67  44   SEND_VAL_EX/116           ?80       47:'#'               ?1                  	;0
68  44   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
69  44   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
70  44   FETCH_DIM_R/81            $57=      $56                  48:1                	;0
71  44   ASSIGN_DIM/147            ?31       16?8                 ?4397406            	;0
72  44   OP_DATA/137               ?0        $57                  ?0                  	;0
73  46   JMP/42                    ?0        ?54                  ?0                  	;0	>>54
74  46   FE_FREE/127               ?0        $49                  ?0                  	;0	<<53
75  49   GOTO/253                  ?0        ?349                 ?49                 	;0
76  51   INCLUDE_OR_EVAL/73        ?34       50:'functions.php'   ?0                  	;2	<<0
77  52   ASSIGN/38                 ?35       16?7                 51:true             	;0
78  53   INIT_METHOD_CALL/112      ?0        16?11                52:'query'          	;1
79  53   SEND_VAL_EX/116           ?80       54:'SELECT COUNT(`id`) AS `count` FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `users_groups`.`is_admin` = 1;' ?1                  	;0
80  53   DO_FCALL/60               ?36       ?0                   ?0                  	;0
81  54   INIT_METHOD_CALL/112      ?0        16?11                55:'get_row'        	;0
82  54   DO_FCALL/60               $61=      ?0                   ?0                  	;0
83  54   FETCH_DIM_R/81            $62=      $61                  57:'count'          	;0
84  54   IS_SMALLER/19             #63=      58:0                 $62                 	;0
85  54   BOOL_NOT/13               #64=      #63                  ?0                  	;0
86  54   JMPZ/43                   ?0        #64                  ?88                 	;0	>>88
87  55   GOTO/253                  ?0        ?376                 ?59                 	;0
88  57   ASSIGN/38                 ?41       16?7                 60:false            	;0	<<86
89  58   GOTO/253                  ?0        ?369                 ?61                 	;0
90  60   FETCH_R/80                $66=      62:'_SESSION'        ?0                  	;0
91  60   FETCH_DIM_R/81            $67=      $66                  63:'code'           	;0
92  60   IS_EQUAL/17               #68=      $67                  64:'setup'          	;0
93  60   JMPZ/43                   ?0        #68                  ?95                 	;0	>>95
94  61   GOTO/253                  ?0        ?100                 ?65                 	;0
95  63   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'header'         	;1	<<93
96  63   SEND_VAL_EX/116           ?80       68:'Location: ./dashboard' ?1                  	;0
97  63   DO_FCALL_BY_NAME/131      ?45       ?0                   ?0                  	;0
98  64   EXIT/79                   ?0        ?0                   ?0                  	;0
99  65   GOTO/253                  ?0        ?444                 ?69                 	;0
100 67   GOTO/253                  ?0        ?440                 ?70                 	;0
101 70   BOOL_NOT/13               #70=      16?2                 ?0                  	;0
102 70   JMPZ/43                   ?0        #70                  ?104                	;0	>>104
103 71   GOTO/253                  ?0        ?105                 ?71                 	;0
104 73   ECHO/40                   ?0        72:'                                <div class="alert alert-danger mb-4" role="alert">
                                    The data restored to the xui_migrate database seems to contain tables attributed with XUI.one. You cannot migrate using this data, you need to restore it via the Databases section in the admin panel.
                                </div>
                                ' ?0                  	;0	<<102
105 75   ECHO/40                   ?0        73:'                            </div> 
                        </div> 
                        ' ?0                  	;0
106 76   GOTO/253                  ?0        ?107                 ?74                 	;0
107 78   JMPZ_EX/46                #71=      16?0                 ?110                	;0	>>110
108 78   BOOL_NOT/13               #72=      16?2                 ?0                  	;0
109 78   BOOL/52                   #71=      #72                  ?0                  	;0
110 78   JMPZ_EX/46                #71=      #71                  ?113                	;0	>>113	<<107
111 78   IS_SMALLER/19             #73=      75:0                 16?6                	;0
112 78   BOOL/52                   #71=      #73                  ?0                  	;0
113 78   BOOL_NOT/13               #74=      #71                  ?0                  	;0	<<110
114 78   JMPZ/43                   ?0        #74                  ?116                	;0	>>116
115 79   GOTO/253                  ?0        ?587                 ?76                 	;0
116 81   ECHO/40                   ?0        77:'                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-secondary mb-4" role="alert">
                                    Below is a list of records found in the migration database. Please check this over and click Migrate when you\'re ready to begin. You can also uncheck tables you don\'t want to migrate.
                                </div>
                                <table class="table table-striped table-borderless mb-4">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Table Name</th>
                                            <th class="text-center">Records</th>
                                            <th class="text-center">Migrate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ' ?0                  	;0	<<114
117 82   FE_RESET_R/77             $75=      16?3                 ?166                	;0
118 82   FE_FETCH_R/78             #76=      $75                  16?12               	;166	>>166	<<165
119 82   ASSIGN/38                 ?53       16?5                 #76                 	;0
120 83   NOP/0                     ?0        ?0                   ?0                  	;1
121 83   GOTO/253                  ?0        ?139                 ?78                 	;0
122 85   ECHO/40                   ?0        79:' type="checkbox" class="activate">
                                                    <label></label>
                                                </div>
                                            </td>
                                        </tr>
                                        ' ?0                  	;0
123 87   NOP/0                     ?0        ?0                   ?0                  	;1
124 87   GOTO/253                  ?0        ?165                 ?80                 	;0
125 89   FETCH_DIM_R/81            $78=      16?12                81:1                	;0
126 89   ECHO/40                   ?0        $78                  ?0                  	;0
127 90   ECHO/40                   ?0        82:'</button></td>
                                            <td class="text-center">
                                                <div class="checkbox checkbox-single checkbox-info">
                                                    <input name="migrate#' ?0                  	;0
128 91   ECHO/40                   ?0        16?5                 ?0                  	;0
129 92   ECHO/40                   ?0        83:'" '              ?0                  	;0
130 93   FETCH_DIM_R/81            $79=      16?12                84:1                	;0
131 93   IS_SMALLER/19             #80=      85:0                 $79                 	;0
132 93   JMPZ/43                   ?0        #80                  ?135                	;0	>>135
133 93   QM_ASSIGN/22              #81=      86:'checked'         ?0                  	;0
134 93   JMP/42                    ?0        ?136                 ?0                  	;0	>>136
135 93   QM_ASSIGN/22              #81=      87:'disabled'        ?0                  	;0	<<132
136 93   ECHO/40                   ?0        #81                  ?0                  	;0	<<134
137 94   NOP/0                     ?0        ?0                   ?0                  	;1
138 94   GOTO/253                  ?0        ?122                 ?88                 	;0
139 96   FETCH_DIM_R/81            $82=      16?12                89:1                	;0
140 96   IS_EQUAL/17               #83=      $82                  90:0                	;0
141 96   BOOL_NOT/13               #84=      #83                  ?0                  	;0
142 96   JMPZ/43                   ?0        #84                  ?145                	;0	>>145
143 97   NOP/0                     ?0        ?0                   ?0                  	;1
144 97   GOTO/253                  ?0        ?147                 ?91                 	;0
145 99   NOP/0                     ?0        ?0                   ?0                  	;1	<<142
146 99   GOTO/253                  ?0        ?123                 ?92                 	;0
147 101  ECHO/40                   ?0        93:'                                        <tr>
                                            <td>' ?0                  	;0
148 102  FETCH_DIM_R/81            $85=      16?12                94:0                	;0
149 102  ECHO/40                   ?0        $85                  ?0                  	;0
150 103  NOP/0                     ?0        ?0                   ?0                  	;1
151 103  GOTO/253                  ?0        ?152                 ?95                 	;0
152 105  ECHO/40                   ?0        96:'</td>
                                            <td>' ?0                  	;0
153 106  ECHO/40                   ?0        16?5                 ?0                  	;0
154 107  ECHO/40                   ?0        97:'</td>
                                            <td class="text-center"><button type="button" class="btn btn-' ?0                  	;0
155 108  FETCH_DIM_R/81            $86=      16?12                98:1                	;0
156 108  IS_SMALLER/19             #87=      99:0                 $86                 	;0
157 108  JMPZ/43                   ?0        #87                  ?160                	;0	>>160
158 108  QM_ASSIGN/22              #88=      100:'info'           ?0                  	;0
159 108  JMP/42                    ?0        ?161                 ?0                  	;0	>>161
160 108  QM_ASSIGN/22              #88=      101:'secondary'      ?0                  	;0	<<157
161 108  ECHO/40                   ?0        #88                  ?0                  	;0	<<159
162 109  ECHO/40                   ?0        102:' btn-xs waves-effect waves-light">' ?0                  	;0
163 110  NOP/0                     ?0        ?0                   ?0                  	;1
164 110  GOTO/253                  ?0        ?125                 ?103                	;0
165 111  JMP/42                    ?0        ?118                 ?0                  	;0	>>118
166 111  FE_FREE/127               ?0        $75                  ?0                  	;0	<<117
167 114  ECHO/40                   ?0        104:'                                    </tbody>
                                </table>
                            </div>
                        </div>
                        ' ?0                  	;0
168 115  GOTO/253                  ?0        ?587                 ?105                	;0
169 117  INIT_METHOD_CALL/112      ?0        16?11                106:'query'         	;1
170 117  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
171 117  FETCH_DIM_R/81            $89=      16?14                108:'data'          	;0
172 117  SEND_UNPACK/165           ?80       $89                  ?1                  	;0
173 117  DO_FCALL/60               $90=      ?0                   ?0                  	;0
174 117  JMPZ/43                   ?0        $90                  ?176                	;0	>>176
175 118  GOTO/253                  ?0        ?182                 ?109                	;0
176 120  FETCH_STATIC_PROP_W/174   $91=      110:'rRequest'       111:'XUI'           	;0	<<174
177 120  ASSIGN_DIM/147            ?68       $91                  113:'new'           	;0
178 120  OP_DATA/137               ?0        114:1                ?0                  	;0
179 121  FETCH_CONSTANT/99         #93=      ?0                   115:'STATUS_FAILURE'	;16
180 121  ASSIGN/38                 ?70       16?15                #93                 	;0
181 122  GOTO/253                  ?0        ?444                 ?118                	;0
182 124  GOTO/253                  ?0        ?291                 ?119                	;0
183 126  INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'unlink'        	;1
184 126  FETCH_CONSTANT/99         #95=      ?0                   122:'TMP_PATH'      	;16
185 126  CONCAT/8                  #96=      #95                  125:'.migration.pid'	;0
186 126  SEND_VAL_EX/116           ?80       #96                  ?1                  	;0
187 126  DO_FCALL_BY_NAME/131      ?73       ?0                   ?0                  	;0
188 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'unlink'        	;1
189 127  FETCH_CONSTANT/99         #98=      ?0                   128:'TMP_PATH'      	;16
190 127  CONCAT/8                  #99=      #98                  131:'.migration.log'	;0
191 127  SEND_VAL_EX/116           ?80       #99                  ?1                  	;0
192 127  DO_FCALL_BY_NAME/131      ?76       ?0                   ?0                  	;0
193 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'json_encode'   	;1
194 129  INIT_ARRAY/71             #101=     134:true             135:'result'        	;14
195 129  ADD_ARRAY_ELEMENT/72      #101=     16?16                136:'status'        	;0
196 129  ADD_ARRAY_ELEMENT/72      #101=     16?17                137:'data'          	;0
197 129  SEND_VAL_EX/116           ?80       #101                 ?1                  	;0
198 129  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
199 129  ECHO/40                   ?0        $102                 ?0                  	;0
200 131  GOTO/253                  ?0        ?552                 ?138                	;0
201 133  ASSIGN/38                 ?79       16?16                139:1               	;0
202 135  IS_EQUAL/17               #104=     16?16                140:2               	;0
203 135  BOOL_NOT/13               #105=     #104                 ?0                  	;0
204 135  JMPZ/43                   ?0        #105                 ?206                	;0	>>206
205 136  GOTO/253                  ?0        ?193                 ?141                	;0
206 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'unlink'        	;1	<<204
207 138  FETCH_CONSTANT/99         #106=     ?0                   144:'TMP_PATH'      	;16
208 138  CONCAT/8                  #107=     #106                 147:'.migration.options'	;0
209 138  SEND_VAL_EX/116           ?80       #107                 ?1                  	;0
210 138  DO_FCALL_BY_NAME/131      ?84       ?0                   ?0                  	;0
211 139  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'unlink'        	;1
212 139  FETCH_CONSTANT/99         #109=     ?0                   150:'TMP_PATH'      	;16
213 139  CONCAT/8                  #110=     #109                 153:'.migration.status'	;0
214 139  SEND_VAL_EX/116           ?80       #110                 ?1                  	;0
215 139  DO_FCALL_BY_NAME/131      ?87       ?0                   ?0                  	;0
216 140  GOTO/253                  ?0        ?183                 ?154                	;0
217 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'C73Ed8D0B70Ce12f'	;1
218 142  SEND_VAL_EX/116           ?80       157:'users'          ?1                  	;0
219 142  DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
220 142  ASSIGN/38                 ?89       16?18                $112                	;0
221 143  FETCH_STATIC_PROP_R/173   $115=     159:'rRequest'       160:'XUI'           	;0
222 143  FETCH_DIM_R/81            $116=     $115                 162:'username'      	;0
223 143  ASSIGN_DIM/147            ?90       16?18                158:'username'      	;0
224 143  OP_DATA/137               ?0        $116                 ?0                  	;0
225 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   164:'Deba522C14D0644C'	;1
226 144  FETCH_STATIC_PROP_FUNC_ARG/177 $118=     166:'rRequest'       167:'XUI'           	;1
227 144  FETCH_DIM_FUNC_ARG/93     $119=     $118                 169:'password'      	;1
228 144  SEND_VAR_EX/66            ?80       $119                 ?1                  	;0
229 144  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
230 144  ASSIGN_DIM/147            ?93       16?18                163:'password'      	;0
231 144  OP_DATA/137               ?0        $120                 ?0                  	;0
232 145  FETCH_STATIC_PROP_R/173   $122=     171:'rRequest'       172:'XUI'           	;0
233 145  FETCH_DIM_R/81            $123=     $122                 174:'email'         	;0
234 145  ASSIGN_DIM/147            ?97       16?18                170:'email'         	;0
235 145  OP_DATA/137               ?0        $123                 ?0                  	;0
236 146  INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'time'          	;0
237 146  DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
238 146  ASSIGN_DIM/147            $125=     16?18                176:'last_login'    	;0
239 146  OP_DATA/137               ?0        $126                 ?0                  	;0
240 146  ASSIGN_DIM/147            ?100      16?18                175:'date_registered'	;0
241 146  OP_DATA/137               ?0        $125                 ?0                  	;0
242 147  GOTO/253                  ?0        ?323                 ?179                	;0
243 149  ECHO/40                   ?0        180:'<div class="wrapper boxed-layout"' ?0                  	;0
244 150  FETCH_IS/89               $127=     181:'_SERVER'        ?0                  	;0
245 150  ISSET_ISEMPTY_DIM_OBJ/115 #128=     $127                 182:'HTTP_X_REQUESTED_WITH'	;16777216
246 150  BOOL_NOT/13               #129=     #128                 ?0                  	;0
247 150  JMPZ_EX/46                #129=     #129                 ?255                	;0	>>255
248 150  INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'strtolower'    	;1
249 150  FETCH_FUNC_ARG/92         $130=     185:'_SERVER'        ?0                  	;1
250 150  FETCH_DIM_FUNC_ARG/93     $131=     $130                 186:'HTTP_X_REQUESTED_WITH'	;1
251 150  SEND_VAR_EX/66            ?80       $131                 ?1                  	;0
252 150  DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
253 150  IS_EQUAL/17               #133=     $132                 187:'xmlhttprequest'	;0
254 150  BOOL/52                   #129=     #133                 ?0                  	;0
255 150  BOOL_NOT/13               #134=     #129                 ?0                  	;0	<<247
256 150  JMPZ/43                   ?0        #134                 ?258                	;0	>>258
257 151  GOTO/253                  ?0        ?259                 ?188                	;0
258 153  ECHO/40                   ?0        189:' style="display: none;"' ?0                  	;0	<<256
259 155  ECHO/40                   ?0        190:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">Database Migration</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
                <div class="card-box">
                    ' ?0                  	;0
260 156  GOTO/253                  ?0        ?267                 ?191                	;0
261 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'e72f42A93714ba87'	;0
262 158  DO_FCALL_BY_NAME/131      ?111      ?0                   ?0                  	;0
263 160  ASSIGN/38                 ?112      16?19                194:'Database Migration'	;0
264 161  ASSIGN/38                 ?113      16?20                195:true            	;0
265 162  INCLUDE_OR_EVAL/73        ?114      196:'header.php'     ?0                  	;2
266 163  GOTO/253                  ?0        ?243                 ?197                	;0
267 165  JMPZ/43                   ?0        16?21                ?269                	;0	>>269
268 166  GOTO/253                  ?0        ?346                 ?198                	;0
269 168  FETCH_STATIC_PROP_IS/176  $139=     199:'rRequest'       200:'XUI'           	;0	<<267
270 168  ISSET_ISEMPTY_DIM_OBJ/115 #140=     $139                 202:'new'           	;33554432
271 168  JMPZ_EX/46                #140=     #140                 ?273                	;0	>>273
272 168  BOOL/52                   #140=     16?7                 ?0                  	;0
273 168  JMPZ/43                   ?0        #140                 ?275                	;0	>>275	<<271
274 169  GOTO/253                  ?0        ?280                 ?203                	;0
275 171  ECHO/40                   ?0        204:'                    <form action="./setup" method="POST" data-parsley-validate="">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-secondary mb-4" role="alert">
                                    In order to migrate your database from a previous installation of Xtream UI, ZapX (original and NXT), StreamCreed or generic Xtream Codes v2 installation, you will need to restore your migration database to the <strong>xui_migrate</strong> database as XUI will have access to it.<br/><br/>The script will then loop through all of your previously existing data and alter it to work with XUI. No logs will be migrated and some clean up may need to be done post-migration but this tool should help significantly in carrying over your data to your new panel.<br/><br/>For instructions visit the <a href="https://xui.one/billing/index.php?rp=/knowledgebase/3">XUI FAQ here</a>.<br/><br/>Once you\'re done, refresh the page.
                                </div>
                                ' ?0                  	;0	<<273
276 172  JMPZ/43                   ?0        16?0                 ?278                	;0	>>278
277 173  GOTO/253                  ?0        ?101                 ?205                	;0
278 175  ECHO/40                   ?0        206:'                                <div class="alert alert-danger mb-4" role="alert">
                                    A connection to the xui_migrate database could not be made. Please ensure the database exists, if it does not, create it.
                                </div>
                                ' ?0                  	;0	<<276
279 176  GOTO/253                  ?0        ?101                 ?207                	;0
280 179  ECHO/40                   ?0        208:'                    <form action="./setup" method="POST" data-parsley-validate="">
                        <div class="row">
                            <div class="col-12">
                                ' ?0                  	;0
281 180  ISSET_ISEMPTY_CV/197      #141=     16?15                ?0                  	;33554432
282 180  JMPZ_EX/46                #141=     #141                 ?286                	;0	>>286
283 180  FETCH_CONSTANT/99         #142=     ?0                   209:'STATUS_FAILURE'	;16
284 180  IS_EQUAL/17               #143=     16?15                #142                	;0
285 180  BOOL/52                   #141=     #143                 ?0                  	;0
286 180  JMPZ/43                   ?0        #141                 ?288                	;0	>>288	<<282
287 181  GOTO/253                  ?0        ?549                 ?212                	;0
288 183  ECHO/40                   ?0        213:'                                <div class="alert alert-info mb-4" role="alert">
                                    As you\'ve decided not to migrate a previous database, you need to create an admin account below.<br/>Choose a strong username and password or you may be susceptible to attacks.
                                </div>
                                ' ?0                  	;0	<<286
289 184  GOTO/253                  ?0        ?550                 ?214                	;0
290 185  GOTO/253                  ?0        ?549                 ?215                	;0
291 187  INIT_METHOD_CALL/112      ?0        16?11                218:'last_insert_id'	;0
292 187  DO_FCALL/60               $146=     ?0                   ?0                  	;0
293 187  FETCH_W/83                $144=     216:'_SESSION'       ?0                  	;0
294 187  ASSIGN_DIM/147            ?121      $144                 217:'hash'          	;0
295 187  OP_DATA/137               ?0        $146                 ?0                  	;0
296 188  INIT_FCALL_BY_NAME/59     ?0        ?0                   222:'dFaC1b11D332C193'	;0
297 188  DO_FCALL_BY_NAME/131      $149=     ?0                   ?0                  	;0
298 188  FETCH_W/83                $147=     220:'_SESSION'       ?0                  	;0
299 188  ASSIGN_DIM/147            ?124      $147                 221:'ip'            	;0
300 188  OP_DATA/137               ?0        $149                 ?0                  	;0
301 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'c9359222b3E3D256'	;0
302 189  DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
303 189  FETCH_W/83                $150=     224:'_SESSION'       ?0                  	;0
304 189  ASSIGN_DIM/147            ?127      $150                 225:'code'          	;0
305 189  OP_DATA/137               ?0        $152                 ?0                  	;0
306 190  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'md5'           	;1
307 190  FETCH_DIM_R/81            $155=     16?18                232:'username'      	;0
308 190  CONCAT/8                  #156=     $155                 233:'||'            	;0
309 190  FETCH_DIM_R/81            $157=     16?18                234:'password'      	;0
310 190  CONCAT/8                  #158=     #156                 $157                	;0
311 190  SEND_VAL_EX/116           ?80       #158                 ?1                  	;0
312 190  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
313 190  FETCH_W/83                $153=     228:'_SESSION'       ?0                  	;0
314 190  ASSIGN_DIM/147            ?130      $153                 229:'verify'        	;0
315 190  OP_DATA/137               ?0        $159                 ?0                  	;0
316 191  INIT_METHOD_CALL/112      ?0        16?11                235:'query'         	;2
317 191  SEND_VAL_EX/116           ?80       237:'UPDATE `servers` SET `server_ip` = ? WHERE `is_main` = 1 AND `server_type` = 0 LIMIT 1;' ?1                  	;0
318 191  FETCH_FUNC_ARG/92         $160=     238:'_SERVER'        ?0                  	;2
319 191  FETCH_DIM_FUNC_ARG/93     $161=     $160                 239:'SERVER_ADDR'   	;2
320 191  SEND_VAR_EX/66            ?96       $161                 ?2                  	;0
321 191  DO_FCALL/60               ?138      ?0                   ?0                  	;0
322 192  GOTO/253                  ?0        ?90                  ?240                	;0
323 194  ASSIGN_DIM/147            ?139      16?18                241:'member_group_id'	;0
324 194  OP_DATA/137               ?0        242:1                ?0                  	;0
325 195  INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'DFaC1B11D332c193'	;0
326 195  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
327 195  ASSIGN_DIM/147            ?140      16?18                243:'ip'            	;0
328 195  OP_DATA/137               ?0        $165                 ?0                  	;0
329 196  INIT_FCALL_BY_NAME/59     ?0        ?0                   247:'time'          	;0
330 196  DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
331 196  ASSIGN_DIM/147            ?142      16?18                246:'last_login'    	;0
332 196  OP_DATA/137               ?0        $167                 ?0                  	;0
333 197  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'c483A3A59265139e'	;1
334 197  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
335 197  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
336 197  ASSIGN/38                 ?145      16?14                $168                	;0
337 198  FETCH_DIM_R/81            $170=     16?14                251:'columns'       	;0
338 198  CONCAT/8                  #171=     252:'INSERT INTO `users`(' $170                	;0
339 198  CONCAT/8                  #172=     #171                 253:') VALUES('     	;0
340 198  FETCH_DIM_R/81            $173=     16?14                254:'placeholder'   	;0
341 198  CONCAT/8                  #174=     #172                 $173                	;0
342 198  CONCAT/8                  #175=     #174                 255:');'            	;0
343 198  ASSIGN/38                 ?152      16?13                #175                	;0
344 199  GOTO/253                  ?0        ?169                 ?256                	;0
345 201  GOTO/253                  ?0        ?347                 ?257                	;0
346 203  ECHO/40                   ?0        258:'					<div class="col-md-12 align-self-center">
                        <div class="text-center" style="padding-top: 15px;">
                            <i class="mdi mdi-creation avatar-title font-24 text-info"></i><br/>
                            <h4 class="header-title text-info">Migrating...</h4>
                            <textarea readonly style="padding: 15px; margin-top: 20px; background: #56c2d6; color: #fff; border: 0; width: 100%; height: 300px; scroll-y: auto;" id="migration_progress"></textarea>
                            <ul class="list-inline wizard mb-4">
                                <li class="float-right">
                                    <button disabled onClick="migrateServer();" class="btn btn-info" id="migrate_button">Try Again</button>
                                </li>
                            </ul>
                        </div>
					</div>
                    ' ?0                  	;0
347 205  ECHO/40                   ?0        259:'				</div>
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
348 206  GOTO/253                  ?0        ?593                 ?260                	;0
349 208  INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'count'         	;1
350 208  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
351 208  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
352 208  IS_EQUAL/17               #178=     $177                 263:0               	;0
353 208  BOOL_NOT/13               #179=     #178                 ?0                  	;0
354 208  JMPZ/43                   ?0        #179                 ?356                	;0	>>356
355 209  GOTO/253                  ?0        ?360                 ?264                	;0
356 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'header'        	;1	<<354
357 211  SEND_VAL_EX/116           ?80       267:'Location: ./setup' ?1                  	;0
358 211  DO_FCALL_BY_NAME/131      ?156      ?0                   ?0                  	;0
359 212  EXIT/79                   ?0        ?0                   ?0                  	;0
360 214  INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'file_exists'   	;1
361 214  FETCH_CONSTANT/99         #181=     ?0                   270:'TMP_PATH'      	;16
362 214  CONCAT/8                  #182=     #181                 273:'.migration.pid'	;0
363 214  SEND_VAL_EX/116           ?80       #182                 ?1                  	;0
364 214  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
365 214  BOOL_NOT/13               #184=     $183                 ?0                  	;0
366 214  JMPZ/43                   ?0        #184                 ?368                	;0	>>368
367 215  GOTO/253                  ?0        ?534                 ?274                	;0
368 217  GOTO/253                  ?0        ?520                 ?275                	;0	<<366
369 219  INCLUDE_OR_EVAL/73        ?161      276:'session.php'    ?0                  	;2
370 220  INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'e6D500E19634D513'	;0
371 220  DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
372 220  JMPZ/43                   ?0        $186                 ?374                	;0	>>374
373 221  GOTO/253                  ?0        ?376                 ?279                	;0
374 223  INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'e72F42A93714Ba87'	;0	<<372
375 223  DO_FCALL_BY_NAME/131      ?163      ?0                   ?0                  	;0
376 226  GOTO/253                  ?0        ?409                 ?282                	;0
377 228  JMPZ_EX/46                #188=     16?0                 ?380                	;0	>>380
378 228  BOOL_NOT/13               #189=     16?2                 ?0                  	;0
379 228  BOOL/52                   #188=     #189                 ?0                  	;0
380 228  JMPZ_EX/46                #188=     #188                 ?383                	;0	>>383	<<377
381 228  IS_SMALLER/19             #190=     283:0                16?6                	;0
382 228  BOOL/52                   #188=     #190                 ?0                  	;0
383 228  BOOL_NOT/13               #191=     #188                 ?0                  	;0	<<380
384 228  JMPZ/43                   ?0        #191                 ?386                	;0	>>386
385 229  GOTO/253                  ?0        ?387                 ?284                	;0
386 231  ECHO/40                   ?0        285:'                                    <li class="list-inline-item float-right">
                                        <input name="migrate" type="submit" class="btn btn-primary" value="Migrate" />
                                    </li>
                                    ' ?0                  	;0	<<384
387 233  ECHO/40                   ?0        286:'                                </ul>
                            </div>
                        </div>
                    </form>
                    ' ?0                  	;0
388 234  GOTO/253                  ?0        ?551                 ?287                	;0
389 235  GOTO/253                  ?0        ?280                 ?288                	;0
390 237  GOTO/253                  ?0        ?200                 ?289                	;0
391 239  INIT_FCALL_BY_NAME/59     ?0        ?0                   290:'file_get_contents'	;1
392 239  FETCH_CONSTANT/99         #192=     ?0                   292:'TMP_PATH'      	;16
393 239  CONCAT/8                  #193=     #192                 295:'.migration.log'	;0
394 239  SEND_VAL_EX/116           ?80       #193                 ?1                  	;0
395 239  DO_FCALL_BY_NAME/131      $194=     ?0                   ?0                  	;0
396 239  ASSIGN/38                 ?171      16?17                $194                	;0
397 240  INIT_FCALL_BY_NAME/59     ?0        ?0                   296:'intval'        	;1
398 240  INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'file_get_contents'	;1
399 240  FETCH_CONSTANT/99         #196=     ?0                   300:'TMP_PATH'      	;16
400 240  CONCAT/8                  #197=     #196                 303:'.migration.status'	;0
401 240  SEND_VAL_EX/116           ?80       #197                 ?1                  	;0
402 240  DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
403 240  SEND_VAR_NO_REF_EX/50     ?80       $198                 ?1                  	;0
404 240  DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
405 240  ASSIGN/38                 ?176      16?16                $199                	;0
406 241  JMPZ/43                   ?0        16?16                ?408                	;0	>>408
407 242  GOTO/253                  ?0        ?202                 ?304                	;0
408 244  GOTO/253                  ?0        ?201                 ?305                	;0	<<406
409 246  ASSIGN/38                 ?177      16?21                306:false           	;0
410 247  INIT_FCALL_BY_NAME/59     ?0        ?0                   307:'file_exists'   	;1
411 247  FETCH_CONSTANT/99         #202=     ?0                   309:'TMP_PATH'      	;16
412 247  CONCAT/8                  #203=     #202                 312:'.migration.status'	;0
413 247  SEND_VAL_EX/116           ?80       #203                 ?1                  	;0
414 247  DO_FCALL_BY_NAME/131      $204=     ?0                   ?0                  	;0
415 247  JMPZ_EX/46                #205=     $204                 ?422                	;0	>>422
416 247  INIT_FCALL_BY_NAME/59     ?0        ?0                   313:'file_exists'   	;1
417 247  FETCH_CONSTANT/99         #206=     ?0                   315:'TMP_PATH'      	;16
418 247  CONCAT/8                  #207=     #206                 318:'.migration.pid'	;0
419 247  SEND_VAL_EX/116           ?80       #207                 ?1                  	;0
420 247  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
421 247  BOOL/52                   #205=     $208                 ?0                  	;0
422 247  BOOL_NOT/13               #209=     #205                 ?0                  	;0	<<415
423 247  JMPZ/43                   ?0        #209                 ?425                	;0	>>425
424 248  GOTO/253                  ?0        ?1                   ?319                	;0
425 250  INIT_FCALL_BY_NAME/59     ?0        ?0                   320:'file_get_contents'	;1	<<423
426 250  FETCH_CONSTANT/99         #210=     ?0                   322:'TMP_PATH'      	;16
427 250  CONCAT/8                  #211=     #210                 325:'.migration.pid'	;0
428 250  SEND_VAL_EX/116           ?80       #211                 ?1                  	;0
429 250  DO_FCALL_BY_NAME/131      $212=     ?0                   ?0                  	;0
430 250  ASSIGN/38                 ?189      16?22                $212                	;0
431 251  INIT_FCALL_BY_NAME/59     ?0        ?0                   326:'file_exists'   	;1
432 251  CONCAT/8                  #214=     328:'/proc/'         16?22               	;0
433 251  SEND_VAL_EX/116           ?80       #214                 ?1                  	;0
434 251  DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
435 251  BOOL_NOT/13               #216=     $215                 ?0                  	;0
436 251  JMPZ/43                   ?0        #216                 ?438                	;0	>>438
437 252  GOTO/253                  ?0        ?1                   ?329                	;0
438 254  ASSIGN/38                 ?193      16?21                330:true            	;0	<<436
439 255  GOTO/253                  ?0        ?1                   ?331                	;0
440 257  INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'header'        	;1
441 257  SEND_VAL_EX/116           ?80       334:'Location: ./codes' ?1                  	;0
442 257  DO_FCALL_BY_NAME/131      ?194      ?0                   ?0                  	;0
443 258  EXIT/79                   ?0        ?0                   ?0                  	;0
444 261  GOTO/253                  ?0        ?586                 ?335                	;0
445 262  GOTO/253                  ?0        ?581                 ?336                	;0
446 264  JMPZ/43                   ?0        16?21                ?448                	;0	>>448
447 265  GOTO/253                  ?0        ?40                  ?337                	;0
448 267  ASSIGN/38                 ?195      16?0                 338:false           	;0	<<446
449 268  ASSIGN/38                 ?196      16?2                 339:false           	;0
450 269  NEW/68                    $221=     340:'Database'       ?128                	;2
451 269  SEND_VAL_EX/116           ?80       342:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
452 269  SEND_VAL_EX/116           ?96       343:true             ?2                  	;0
453 269  DO_FCALL/60               ?198      ?8                   ?0                  	;0
454 269  ASSIGN/38                 ?199      16?1                 $221                	;0
455 270  FETCH_OBJ_R/82            $224=     16?1                 344:'connected'     	;0
456 270  BOOL_NOT/13               #225=     $224                 ?0                  	;0
457 270  JMPZ/43                   ?0        #225                 ?459                	;0	>>459
458 271  GOTO/253                  ?0        ?19                  ?345                	;0
459 273  GOTO/253                  ?0        ?18                  ?346                	;0	<<457
460 275  INIT_FCALL_BY_NAME/59     ?0        ?0                   347:'unlink'        	;1
461 275  FETCH_CONSTANT/99         #226=     ?0                   349:'TMP_PATH'      	;16
462 275  CONCAT/8                  #227=     #226                 352:'.migration.pid'	;0
463 275  SEND_VAL_EX/116           ?80       #227                 ?1                  	;0
464 275  DO_FCALL_BY_NAME/131      ?204      ?0                   ?0                  	;0
465 276  INIT_FCALL_BY_NAME/59     ?0        ?0                   353:'unlink'        	;1
466 276  FETCH_CONSTANT/99         #229=     ?0                   355:'TMP_PATH'      	;16
467 276  CONCAT/8                  #230=     #229                 358:'.migration.log'	;0
468 276  SEND_VAL_EX/116           ?80       #230                 ?1                  	;0
469 276  DO_FCALL_BY_NAME/131      ?207      ?0                   ?0                  	;0
470 277  INIT_FCALL_BY_NAME/59     ?0        ?0                   359:'shell_exec'    	;1
471 277  FETCH_CONSTANT/99         #232=     ?0                   361:'PHP_BIN'       	;16
472 277  CONCAT/8                  #233=     #232                 364:' '             	;0
473 277  FETCH_CONSTANT/99         #234=     ?0                   365:'CLI_PATH'      	;16
474 277  CONCAT/8                  #235=     #233                 #234                	;0
475 277  CONCAT/8                  #236=     #235                 368:'migrate.php > '	;0
476 277  FETCH_CONSTANT/99         #237=     ?0                   369:'TMP_PATH'      	;16
477 277  CONCAT/8                  #238=     #236                 #237                	;0
478 277  CONCAT/8                  #239=     #238                 372:'.migration.log 2>&1 &'	;0
479 277  SEND_VAL_EX/116           ?80       #239                 ?1                  	;0
480 277  DO_FCALL_BY_NAME/131      ?216      ?0                   ?0                  	;0
481 278  ASSIGN/38                 ?217      16?21                373:true            	;0
482 280  GOTO/253                  ?0        ?446                 ?374                	;0
483 283  ASSIGN/38                 ?218      16?3                 375:array (
  'reg_users' => 
  array (
    0 => 'Users & Resellers',
    1 => 0,
  ),
  'users' => 
  array (
    0 => 'Lines - Standard, MAG & Enigma2 Devices',
    1 => 0,
  ),
  'enigma2_devices' => 
  array (
    0 => 'Device Info - Engima2',
    1 => 0,
  ),
  'mag_devices' => 
  array (
    0 => 'Device Info - MAG',
    1 => 0,
  ),
  'user_output' => 
  array (
    0 => 'Line Output - HLS, MPEG-TS & RTMP',
    1 => 0,
  ),
  'streaming_servers' => 
  array (
    0 => 'Servers - Load Balancers',
    1 => 0,
  ),
  'series' => 
  array (
    0 => 'TV Series',
    1 => 0,
  ),
  'series_episodes' => 
  array (
    0 => 'TV Episodes',
    1 => 0,
  ),
  'streams' => 
  array (
    0 => 'Streams - Live, Radio, Created & VOD',
    1 => 0,
  ),
  'streams_sys' => 
  array (
    0 => 'Stream Servers',
    1 => 0,
  ),
  'streams_options' => 
  array (
    0 => 'Stream Options',
    1 => 0,
  ),
  'stream_categories' => 
  array (
    0 => 'Stream Categories',
    1 => 0,
  ),
  'bouquets' => 
  array (
    0 => 'Bouquets',
    1 => 0,
  ),
  'member_groups' => 
  array (
    0 => 'Member Groups',
    1 => 0,
  ),
  'packages' => 
  array (
    0 => 'Reseller Packages',
    1 => 0,
  ),
  'rtmp_ips' => 
  array (
    0 => 'RTMP IP\'s',
    1 => 0,
  ),
  'epg' => 
  array (
    0 => 'EPG Providers ',
    1 => 0,
  ),
  'blocked_ips' => 
  array (
    0 => 'Blocked IP Addresses',
    1 => 0,
  ),
  'blocked_user_agents' => 
  array (
    0 => 'Blocked User-Agents',
    1 => 0,
  ),
  'isp_addon' => 
  array (
    0 => 'Blocked ISP\'s',
    1 => 0,
  ),
  'tickets' => 
  array (
    0 => 'Tickets',
    1 => 0,
  ),
  'tickets_replies' => 
  array (
    0 => 'Ticket Replies',
    1 => 0,
  ),
  'transcoding_profiles' => 
  array (
    0 => 'Transcoding Profile',
    1 => 0,
  ),
  'watch_folders' => 
  array (
    0 => 'Watch Folders',
    1 => 0,
  ),
  'members' => 
  array (
    0 => 'Users & Resellers',
    1 => 0,
  ),
  'epg_sources' => 
  array (
    0 => 'EPG Providers',
    1 => 0,
  ),
  'blocked_isps' => 
  array (
    0 => 'Blocked ISP\'s',
    1 => 0,
  ),
  'categories' => 
  array (
    0 => 'Stream Categories',
    1 => 0,
  ),
  'groups' => 
  array (
    0 => 'Member Groups',
    1 => 0,
  ),
  'servers' => 
  array (
    0 => 'Servers - Load Balancers',
    1 => 0,
  ),
  'stream_servers' => 
  array (
    0 => 'Stream Servers',
    1 => 0,
  ),
)	;0
484 284  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'array_keys'    	;1
485 284  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
486 284  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
487 284  FE_RESET_R/77             $244=     $243                 ?517                	;0
488 284  FE_FETCH_R/78             ?0        $244                 16?5                	;517	>>517	<<516
489 286  INIT_METHOD_CALL/112      ?0        16?1                 378:'query'         	;1	<<515
490 286  ROPE_INIT/54              #246=     ?0                   380:'SHOW TABLES LIKE \''	;3
491 286  ROPE_ADD/55               #246=     #246                 16?5                	;1
492 286  ROPE_END/56               #245=     #246                 381:'\';'           	;2
493 286  SEND_VAL_EX/116           ?80       #245                 ?1                  	;0
494 286  DO_FCALL/60               ?224      ?0                   ?0                  	;0
495 287  INIT_METHOD_CALL/112      ?0        16?1                 382:'num_rows'      	;0
496 287  DO_FCALL/60               $249=     ?0                   ?0                  	;0
497 287  IS_SMALLER/19             #250=     384:0                $249                	;0
498 287  BOOL_NOT/13               #251=     #250                 ?0                  	;0
499 287  JMPZ/43                   ?0        #251                 ?502                	;0	>>502
500 288  NOP/0                     ?0        ?0                   ?0                  	;1
501 288  GOTO/253                  ?0        ?514                 ?385                	;0
502 290  INIT_METHOD_CALL/112      ?0        16?1                 386:'query'         	;1	<<499
503 290  ROPE_INIT/54              #253=     ?0                   388:'SELECT COUNT(*) AS `count` FROM `'	;3
504 290  ROPE_ADD/55               #253=     #253                 16?5                	;1
505 290  ROPE_END/56               #252=     #253                 389:'`;'            	;2
506 290  SEND_VAL_EX/116           ?80       #252                 ?1                  	;0
507 290  DO_FCALL/60               ?231      ?0                   ?0                  	;0
508 291  INIT_METHOD_CALL/112      ?0        16?1                 391:'get_row'       	;0
509 291  DO_FCALL/60               $258=     ?0                   ?0                  	;0
510 291  FETCH_DIM_R/81            $259=     $258                 393:'count'         	;0
511 291  FETCH_DIM_W/84            $256=     16?3                 16?5                	;0
512 291  ASSIGN_DIM/147            ?233      $256                 390:1               	;0
513 291  OP_DATA/137               ?0        $259                 ?0                  	;0
514 292  JMP/42                    ?0        ?516                 ?0                  	;0	>>516
515 293  CATCH/107                 ?1        394:'Exception'      16?23               	;0 CB	>>516,489
516 295  JMP/42                    ?0        ?488                 ?0                  	;0	>>488	<<514,515
517 295  FE_FREE/127               ?0        $244                 ?0                  	;0	<<487
518 298  ASSIGN/38                 ?236      16?6                 396:0               	;0
519 299  GOTO/253                  ?0        ?30                  ?397                	;0
520 301  INIT_FCALL_BY_NAME/59     ?0        ?0                   398:'intval'        	;1
521 301  INIT_FCALL_BY_NAME/59     ?0        ?0                   400:'file_get_contents'	;1
522 301  FETCH_CONSTANT/99         #261=     ?0                   402:'TMP_PATH'      	;16
523 301  CONCAT/8                  #262=     #261                 405:'.migration.pid'	;0
524 301  SEND_VAL_EX/116           ?80       #262                 ?1                  	;0
525 301  DO_FCALL_BY_NAME/131      $263=     ?0                   ?0                  	;0
526 301  SEND_VAR_NO_REF_EX/50     ?80       $263                 ?1                  	;0
527 301  DO_FCALL_BY_NAME/131      $264=     ?0                   ?0                  	;0
528 301  ASSIGN/38                 ?241      16?22                $264                	;0
529 302  INIT_FCALL_BY_NAME/59     ?0        ?0                   406:'exec'          	;1
530 302  NOP/0                     ?0        ?0                   ?0                  	;0
531 302  FAST_CONCAT/53            #266=     408:'kill -9 '       16?22               	;0
532 302  SEND_VAL_EX/116           ?80       #266                 ?1                  	;0
533 302  DO_FCALL_BY_NAME/131      ?243      ?0                   ?0                  	;0
534 304  INIT_FCALL_BY_NAME/59     ?0        ?0                   409:'file_put_contents'	;2
535 304  FETCH_CONSTANT/99         #268=     ?0                   411:'TMP_PATH'      	;16
536 304  CONCAT/8                  #269=     #268                 414:'.migration.options'	;0
537 304  SEND_VAL_EX/116           ?80       #269                 ?1                  	;0
538 304  INIT_FCALL_BY_NAME/59     ?0        ?0                   415:'json_encode'   	;1
539 304  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
540 304  DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
541 304  SEND_VAR_NO_REF_EX/50     ?96       $270                 ?2                  	;0
542 304  DO_FCALL_BY_NAME/131      ?247      ?0                   ?0                  	;0
543 305  INIT_FCALL_BY_NAME/59     ?0        ?0                   417:'unlink'        	;1
544 305  FETCH_CONSTANT/99         #272=     ?0                   419:'TMP_PATH'      	;16
545 305  CONCAT/8                  #273=     #272                 422:'.migration.status'	;0
546 305  SEND_VAL_EX/116           ?80       #273                 ?1                  	;0
547 305  DO_FCALL_BY_NAME/131      ?250      ?0                   ?0                  	;0
548 306  GOTO/253                  ?0        ?460                 ?423                	;0
549 309  ECHO/40                   ?0        424:'                                <div class="alert alert-danger mb-4" role="alert">
                                    Please ensure your username and password are at least 8 characters long.
                                </div>
                                ' ?0                  	;0
550 311  ECHO/40                   ?0        425:'                                <div class="form-group row mb-4">
                                    <label class="col-md-4 col-form-label" for="username">Admin Username</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="username" name="username" value="" required data-parsley-trigger="change">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-md-4 col-form-label" for="password">Admin Password</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" id="password" name="password" value="" required data-parsley-trigger="change">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-md-4 col-form-label" for="email">Email Address</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="email" name="email" value="">
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <ul class="list-inline wizard mb-4">
                            <li class="list-inline-item float-right">
                                <input name="new_user" type="submit" class="btn btn-primary" value="Create" />
                            </li>
                        </ul>
                    </form>
                    ' ?0                  	;0
551 313  GOTO/253                  ?0        ?345                 ?426                	;0
552 315  EXIT/79                   ?0        ?0                   ?0                  	;0
553 317  FETCH_STATIC_PROP_IS/176  $275=     427:'rRequest'       428:'XUI'           	;0
554 317  ISSET_ISEMPTY_DIM_OBJ/115 #276=     $275                 430:'migrate'       	;33554432
555 317  JMPZ/43                   ?0        #276                 ?557                	;0	>>557
556 318  GOTO/253                  ?0        ?51                  ?431                	;0
557 320  FETCH_STATIC_PROP_IS/176  $277=     432:'rRequest'       433:'XUI'           	;0	<<555
558 320  ISSET_ISEMPTY_DIM_OBJ/115 #278=     $277                 435:'new_user'      	;33554432
559 320  JMPZ_EX/46                #278=     #278                 ?561                	;0	>>561
560 320  BOOL/52                   #278=     16?7                 ?0                  	;0
561 320  BOOL_NOT/13               #279=     #278                 ?0                  	;0	<<559
562 320  JMPZ/43                   ?0        #279                 ?564                	;0	>>564
563 321  GOTO/253                  ?0        ?586                 ?436                	;0
564 323  INIT_FCALL_BY_NAME/59     ?0        ?0                   437:'strlen'        	;1	<<562
565 323  FETCH_STATIC_PROP_FUNC_ARG/177 $280=     439:'rRequest'       440:'XUI'           	;1
566 323  FETCH_DIM_FUNC_ARG/93     $281=     $280                 442:'password'      	;1
567 323  SEND_VAR_EX/66            ?80       $281                 ?1                  	;0
568 323  DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
569 323  IS_SMALLER/19             #283=     $282                 443:8               	;0
570 323  JMPNZ_EX/47               #283=     #283                 ?578                	;0	>>578
571 323  INIT_FCALL_BY_NAME/59     ?0        ?0                   444:'strlen'        	;1
572 323  FETCH_STATIC_PROP_FUNC_ARG/177 $284=     446:'rRequest'       447:'XUI'           	;1
573 323  FETCH_DIM_FUNC_ARG/93     $285=     $284                 449:'username'      	;1
574 323  SEND_VAR_EX/66            ?80       $285                 ?1                  	;0
575 323  DO_FCALL_BY_NAME/131      $286=     ?0                   ?0                  	;0
576 323  IS_SMALLER/19             #287=     $286                 450:8               	;0
577 323  BOOL/52                   #283=     #287                 ?0                  	;0
578 323  JMPZ/43                   ?0        #283                 ?580                	;0	>>580	<<570
579 324  GOTO/253                  ?0        ?581                 ?451                	;0
580 326  GOTO/253                  ?0        ?217                 ?452                	;0	<<578
581 329  FETCH_STATIC_PROP_W/174   $288=     453:'rRequest'       454:'XUI'           	;0
582 329  ASSIGN_DIM/147            ?265      $288                 456:'new'           	;0
583 329  OP_DATA/137               ?0        457:1                ?0                  	;0
584 330  FETCH_CONSTANT/99         #290=     ?0                   458:'STATUS_FAILURE'	;16
585 330  ASSIGN/38                 ?267      16?15                #290                	;0
586 333  GOTO/253                  ?0        ?50                  ?461                	;0
587 336  ECHO/40                   ?0        462:'                        <div class="row">
                            <div class="col-12">
                                <ul class="list-inline wizard">
                                    ' ?0                  	;0
588 337  BOOL_NOT/13               #292=     16?7                 ?0                  	;0
589 337  JMPZ/43                   ?0        #292                 ?591                	;0	>>591
590 338  GOTO/253                  ?0        ?592                 ?463                	;0
591 340  ECHO/40                   ?0        464:'                                    <li class="list-inline-item">
                                        <a href="./setup?new"><button name="dont_migrate" class="btn btn-danger" type="button">Don\'t Migrate</button></a>
                                    </li>
                                    ' ?0                  	;0	<<589
592 342  GOTO/253                  ?0        ?377                 ?465                	;0
593 344  INCLUDE_OR_EVAL/73        ?269      466:'footer.php'     ?0                  	;2
594 345  NOP/0                     ?0        467:1                ?0                  	;4294967295
*/

?>
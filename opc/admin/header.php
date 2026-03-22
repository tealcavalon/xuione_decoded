<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?2320                ?0                  	;0	>>2320
1    5     ECHO/40                   ?0        1:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
									' ?0                  	;0
2    6     INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'E589A4bF54A2dad1'	;2
3    6     SEND_VAL_EX/116           ?80       4:'adv'              ?1                  	;0
4    6     SEND_VAL_EX/116           ?96       5:'servers'          ?2                  	;0
5    6     DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
6    6     BOOL_NOT/13               #29=      $28                  ?0                  	;0
7    6     JMPZ/43                   ?0        #29                  ?9                  	;0	>>9
8    7     GOTO/253                  ?0        ?318                 ?6                  	;0
9    9     ECHO/40                   ?0        7:'                                    <li><a href="servers">' ?0                  	;0	<<7
10   10    FETCH_DIM_R/81            $30=      16?0                 8:'manage_servers'  	;0
11   10    ECHO/40                   ?0        $30                  ?0                  	;0
12   11    ECHO/40                   ?0        9:'</a></li>
                                    <li><a href="proxies">' ?0                  	;0
13   12    GOTO/253                  ?0        ?315                 ?10                 	;0
14   14    ECHO/40                   ?0        11:'                                        </ul>
                                    </li>
                                    ' ?0                  	;0
15   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'e589A4Bf54A2daD1'	;2
16   16    SEND_VAL_EX/116           ?80       14:'adv'             ?1                  	;0
17   16    SEND_VAL_EX/116           ?96       15:'mass_edit_enigmas' ?2                  	;0
18   16    DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
19   16    JMPNZ_EX/47               #32=      $31                  ?25                 	;0	>>25
20   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'E589A4bF54A2daD1'	;2
21   16    SEND_VAL_EX/116           ?80       18:'adv'             ?1                  	;0
22   16    SEND_VAL_EX/116           ?96       19:'mass_sedits'     ?2                  	;0
23   16    DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
24   16    BOOL/52                   #32=      $33                  ?0                  	;0
25   16    JMPNZ_EX/47               #32=      #32                  ?31                 	;0	>>31	<<19
26   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'E589a4Bf54a2DaD1'	;2
27   16    SEND_VAL_EX/116           ?80       22:'adv'             ?1                  	;0
28   16    SEND_VAL_EX/116           ?96       23:'mass_edit_lines' ?2                  	;0
29   16    DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
30   16    BOOL/52                   #32=      $34                  ?0                  	;0
31   16    JMPNZ_EX/47               #32=      #32                  ?37                 	;0	>>37	<<25
32   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'E589A4bF54A2dAD1'	;2
33   16    SEND_VAL_EX/116           ?80       26:'adv'             ?1                  	;0
34   16    SEND_VAL_EX/116           ?96       27:'mass_edit_mags'  ?2                  	;0
35   16    DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
36   16    BOOL/52                   #32=      $35                  ?0                  	;0
37   16    JMPNZ_EX/47               #32=      #32                  ?43                 	;0	>>43	<<31
38   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'e589A4bF54a2DAd1'	;2
39   16    SEND_VAL_EX/116           ?80       30:'adv'             ?1                  	;0
40   16    SEND_VAL_EX/116           ?96       31:'mass_sedits_vod' ?2                  	;0
41   16    DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
42   16    BOOL/52                   #32=      $36                  ?0                  	;0
43   16    JMPNZ_EX/47               #32=      #32                  ?49                 	;0	>>49	<<37
44   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'E589A4bf54a2dAD1'	;2
45   16    SEND_VAL_EX/116           ?80       34:'adv'             ?1                  	;0
46   16    SEND_VAL_EX/116           ?96       35:'mass_sedits'     ?2                  	;0
47   16    DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
48   16    BOOL/52                   #32=      $37                  ?0                  	;0
49   16    JMPNZ_EX/47               #32=      #32                  ?55                 	;0	>>55	<<43
50   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'e589a4bF54a2Dad1'	;2
51   16    SEND_VAL_EX/116           ?80       38:'adv'             ?1                  	;0
52   16    SEND_VAL_EX/116           ?96       39:'mass_edit_radio' ?2                  	;0
53   16    DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
54   16    BOOL/52                   #32=      $38                  ?0                  	;0
55   16    JMPNZ_EX/47               #32=      #32                  ?61                 	;0	>>61	<<49
56   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'E589a4Bf54a2dAD1'	;2
57   16    SEND_VAL_EX/116           ?80       42:'adv'             ?1                  	;0
58   16    SEND_VAL_EX/116           ?96       43:'mass_edit_streams' ?2                  	;0
59   16    DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
60   16    BOOL/52                   #32=      $39                  ?0                  	;0
61   16    JMPNZ_EX/47               #32=      #32                  ?67                 	;0	>>67	<<55
62   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'e589a4BF54a2DaD1'	;2
63   16    SEND_VAL_EX/116           ?80       46:'adv'             ?1                  	;0
64   16    SEND_VAL_EX/116           ?96       47:'mass_edit_users' ?2                  	;0
65   16    DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
66   16    BOOL/52                   #32=      $40                  ?0                  	;0
67   16    BOOL_NOT/13               #41=      #32                  ?0                  	;0	<<61
68   16    JMPZ/43                   ?0        #41                  ?70                 	;0	>>70
69   17    GOTO/253                  ?0        ?2127                ?48                 	;0
70   19    ECHO/40                   ?0        49:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0	<<68
71   20    FETCH_DIM_R/81            $42=      16?0                 50:'mass_edit'      	;0
72   20    ECHO/40                   ?0        $42                  ?0                  	;0
73   21    GOTO/253                  ?0        ?367                 ?51                 	;0
74   23    ECHO/40                   ?0        52:'                                <div class="dropdown-divider"></div>
                                <a href="settings_plex" class="dropdown-item notify-item">
                                    <span>Plex Settings</span>
                                </a>
                                <a href="settings_watch" class="dropdown-item notify-item">
                                    <span>Watch Settings</span>
                                </a>
                                ' ?0                  	;0
75   25    ECHO/40                   ?0        53:'                                <div class="dropdown-divider"></div>
                                ' ?0                  	;0
76   26    INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'e589A4BF54a2DaD1'	;2
77   26    SEND_VAL_EX/116           ?80       56:'adv'             ?1                  	;0
78   26    SEND_VAL_EX/116           ?96       57:'license'         ?2                  	;0
79   26    DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
80   26    JMPZ_EX/46                #44=      $43                  ?83                 	;0	>>83
81   26    BOOL_NOT/13               #45=      16?1                 ?0                  	;0
82   26    BOOL/52                   #44=      #45                  ?0                  	;0
83   26    BOOL_NOT/13               #46=      #44                  ?0                  	;0	<<80
84   26    JMPZ/43                   ?0        #46                  ?86                 	;0	>>86
85   27    GOTO/253                  ?0        ?332                 ?58                 	;0
86   29    ECHO/40                   ?0        59:'                                <a href="license_info" class="dropdown-item notify-item">
                                    <span>License Info</span>
                                </a>
                                ' ?0                  	;0	<<84
87   30    GOTO/253                  ?0        ?332                 ?60                 	;0
88   32    IS_SMALLER/19             #47=      16?2                 61:100              	;0
89   32    JMPZ/43                   ?0        #47                  ?92                 	;0	>>92
90   32    QM_ASSIGN/22              #48=      16?2                 ?0                  	;0
91   32    JMP/42                    ?0        ?93                  ?0                  	;0	>>93
92   32    QM_ASSIGN/22              #48=      62:'99+'             ?0                  	;0	<<89
93   32    ECHO/40                   ?0        #48                  ?0                  	;0	<<91
94   33    ECHO/40                   ?0        63:'</span>
                                ' ?0                  	;0
95   35    ECHO/40                   ?0        64:'                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        Tickets
                                    </h5>
                                </div>
                                <div class="slimscroll noti-scroll">
                                    ' ?0                  	;0
96   36    FE_RESET_R/77             $49=      16?3                 ?169                	;0
97   36    FE_FETCH_R/78             ?0        $49                  16?4                	;169	>>169	<<168
98   37    NOP/0                     ?0        ?0                   ?0                  	;1
99   37    GOTO/253                  ?0        ?128                 ?65                 	;0
100  40    INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'ceil'           	;1
101  40    DIV/4                     #50=      16?5                 68:60               	;0
102  40    SEND_VAL_EX/116           ?80       #50                  ?1                  	;0
103  40    DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
104  40    CONCAT/8                  #52=      $51                  69:' minutes ago'   	;0
105  40    ASSIGN/38                 ?25       16?5                 #52                 	;0
106  42    NOP/0                     ?0        ?0                   ?0                  	;1
107  42    GOTO/253                  ?0        ?112                 ?70                 	;0
108  44    NOP/0                     ?0        ?0                   ?0                  	;1
109  44    GOTO/253                  ?0        ?110                 ?71                 	;0
110  46    CONCAT/8                  #54=      16?5                 72:' seconds ago'   	;0
111  46    ASSIGN/38                 ?27       16?5                 #54                 	;0
112  48    ECHO/40                   ?0        73:'                                    <a href="ticket_view?id=' ?0                  	;0
113  49    FETCH_DIM_R/81            $56=      16?4                 74:'id'             	;0
114  49    ECHO/40                   ?0        $56                  ?0                  	;0
115  50    ECHO/40                   ?0        75:'" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment"></i>
                                        </div>
                                        <p class="notify-details">' ?0                  	;0
116  51    NOP/0                     ?0        ?0                   ?0                  	;1
117  51    GOTO/253                  ?0        ?118                 ?76                 	;0
118  53    INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'htmlspecialchars'	;1
119  53    FETCH_DIM_FUNC_ARG/93     $57=      16?4                 79:'title'          	;1
120  53    SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
121  53    DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
122  53    ECHO/40                   ?0        $58                  ?0                  	;0
123  54    ECHO/40                   ?0        80:'                                            <small class="text-muted">' ?0                  	;0
124  55    ECHO/40                   ?0        16?5                 ?0                  	;0
125  56    ECHO/40                   ?0        81:'</small>
                                        </p>
                                    </a>
                                    ' ?0                  	;0
126  58    NOP/0                     ?0        ?0                   ?0                  	;1
127  58    GOTO/253                  ?0        ?168                 ?82                 	;0
128  60    INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'time'           	;0
129  60    DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
130  60    INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'intval'         	;1
131  60    FETCH_DIM_FUNC_ARG/93     $60=      16?4                 87:'date'           	;1
132  60    SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
133  60    DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
134  60    SUB/2                     #62=      $59                  $61                 	;0
135  60    ASSIGN/38                 ?35       16?5                 #62                 	;0
136  61    IS_SMALLER/19             #64=      16?5                 88:60               	;0
137  61    JMPZ/43                   ?0        #64                  ?140                	;0	>>140
138  62    NOP/0                     ?0        ?0                   ?0                  	;1
139  62    GOTO/253                  ?0        ?108                 ?89                 	;0
140  64    IS_SMALLER/19             #65=      16?5                 90:3600             	;0	<<137
141  64    JMPZ/43                   ?0        #65                  ?144                	;0	>>144
142  65    NOP/0                     ?0        ?0                   ?0                  	;1
143  65    GOTO/253                  ?0        ?100                 ?91                 	;0
144  67    IS_SMALLER/19             #66=      16?5                 92:86400            	;0	<<141
145  67    JMPZ/43                   ?0        #66                  ?148                	;0	>>148
146  68    NOP/0                     ?0        ?0                   ?0                  	;1
147  68    GOTO/253                  ?0        ?158                 ?93                 	;0
148  70    INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'ceil'           	;1	<<145
149  70    DIV/4                     #67=      16?5                 96:86400            	;0
150  70    SEND_VAL_EX/116           ?80       #67                  ?1                  	;0
151  70    DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
152  70    CONCAT/8                  #69=      $68                  97:' days ago'      	;0
153  70    ASSIGN/38                 ?42       16?5                 #69                 	;0
154  71    NOP/0                     ?0        ?0                   ?0                  	;1
155  71    GOTO/253                  ?0        ?156                 ?98                 	;0
156  73    NOP/0                     ?0        ?0                   ?0                  	;1
157  73    GOTO/253                  ?0        ?164                 ?99                 	;0
158  75    INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'ceil'          	;1
159  75    DIV/4                     #71=      16?5                 102:3600            	;0
160  75    SEND_VAL_EX/116           ?80       #71                  ?1                  	;0
161  75    DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
162  75    CONCAT/8                  #73=      $72                  103:' hours ago'    	;0
163  75    ASSIGN/38                 ?46       16?5                 #73                 	;0
164  77    NOP/0                     ?0        ?0                   ?0                  	;1
165  77    GOTO/253                  ?0        ?106                 ?104                	;0
166  78    NOP/0                     ?0        ?0                   ?0                  	;1
167  78    GOTO/253                  ?0        ?100                 ?105                	;0
168  79    JMP/42                    ?0        ?97                  ?0                  	;0	>>97
169  79    FE_FREE/127               ?0        $49                  ?0                  	;0	<<96
170  81    GOTO/253                  ?0        ?1712                ?106                	;0
171  83    ECHO/40                   ?0        107:'                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="opacity: 80%" id="header_stats">
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./live_connections" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name text-white ml-1">
                                    <i class="fe-zap text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate' ?0                  	;0
172  84    INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'strlen'        	;1
173  84    FETCH_DIM_FUNC_ARG/93     $75=      16?6                 110:'hue'           	;1
174  84    SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
175  84    DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
176  84    IS_SMALLER/19             #77=      111:0                $76                 	;0
177  84    JMPZ_EX/46                #77=      #77                  ?187                	;0	>>187
178  84    INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'in_array'      	;2
179  84    FETCH_DIM_FUNC_ARG/93     $78=      16?6                 114:'hue'           	;1
180  84    SEND_VAR_EX/66            ?80       $78                  ?1                  	;0
181  84    INIT_FCALL_BY_NAME/59     ?0        ?0                   115:'array_keys'    	;1
182  84    SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
183  84    DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
184  84    SEND_VAR_NO_REF_EX/50     ?96       $79                  ?2                  	;0
185  84    DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
186  84    BOOL/52                   #77=      $80                  ?0                  	;0
187  84    BOOL_NOT/13               #81=      #77                  ?0                  	;0	<<177
188  84    JMPZ/43                   ?0        #81                  ?190                	;0	>>190
189  85    GOTO/253                  ?0        ?193                 ?117                	;0
190  87    FETCH_DIM_R/81            $82=      16?6                 118:'hue'           	;0	<<188
191  87    CONCAT/8                  #83=      119:'-'              $82                 	;0
192  87    ECHO/40                   ?0        #83                  ?0                  	;0
193  89    ECHO/40                   ?0        120:' btn-xs waves-effect waves-light no-border"><span id="header_connections">0</span></button>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./live_connections" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name text-white ml-1">
                                    <i class="fe-users text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate' ?0                  	;0
194  90    GOTO/253                  ?0        ?820                 ?121                	;0
195  93    INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'e589a4BF54A2dAd1'	;2
196  93    SEND_VAL_EX/116           ?80       124:'adv'            ?1                  	;0
197  93    SEND_VAL_EX/116           ?96       125:'add_user'       ?2                  	;0
198  93    DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
199  93    JMPNZ_EX/47               #85=      $84                  ?205                	;0	>>205
200  93    INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'E589A4Bf54a2DaD1'	;2
201  93    SEND_VAL_EX/116           ?80       128:'adv'            ?1                  	;0
202  93    SEND_VAL_EX/116           ?96       129:'users'          ?2                  	;0
203  93    DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
204  93    BOOL/52                   #85=      $86                  ?0                  	;0
205  93    JMPNZ_EX/47               #85=      #85                  ?211                	;0	>>211	<<199
206  93    INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'e589A4bF54a2DAd1'	;2
207  93    SEND_VAL_EX/116           ?80       132:'adv'            ?1                  	;0
208  93    SEND_VAL_EX/116           ?96       133:'add_mag'        ?2                  	;0
209  93    DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
210  93    BOOL/52                   #85=      $87                  ?0                  	;0
211  93    JMPNZ_EX/47               #85=      #85                  ?217                	;0	>>217	<<205
212  93    INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'E589A4bf54A2daD1'	;2
213  93    SEND_VAL_EX/116           ?80       136:'adv'            ?1                  	;0
214  93    SEND_VAL_EX/116           ?96       137:'manage_mag'     ?2                  	;0
215  93    DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
216  93    BOOL/52                   #85=      $88                  ?0                  	;0
217  93    JMPNZ_EX/47               #85=      #85                  ?223                	;0	>>223	<<211
218  93    INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'e589A4Bf54A2DaD1'	;2
219  93    SEND_VAL_EX/116           ?80       140:'adv'            ?1                  	;0
220  93    SEND_VAL_EX/116           ?96       141:'add_e2'         ?2                  	;0
221  93    DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
222  93    BOOL/52                   #85=      $89                  ?0                  	;0
223  93    JMPNZ_EX/47               #85=      #85                  ?229                	;0	>>229	<<217
224  93    INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'E589a4BF54a2dAD1'	;2
225  93    SEND_VAL_EX/116           ?80       144:'adv'            ?1                  	;0
226  93    SEND_VAL_EX/116           ?96       145:'manage_e2'      ?2                  	;0
227  93    DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
228  93    BOOL/52                   #85=      $90                  ?0                  	;0
229  93    BOOL_NOT/13               #91=      #85                  ?0                  	;0	<<223
230  93    JMPZ/43                   ?0        #91                  ?232                	;0	>>232
231  94    GOTO/253                  ?0        ?1565                ?146                	;0
232  96    ECHO/40                   ?0        147:'							<li class="has-submenu">
                                <a href="#"> <i class="fas fa-desktop"></i>' ?0                  	;0	<<230
233  97    FETCH_DIM_R/81            $92=      16?0                 148:'lines'         	;0
234  97    ECHO/40                   ?0        $92                  ?0                  	;0
235  98    ECHO/40                   ?0        149:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    ' ?0                  	;0
236  99    GOTO/253                  ?0        ?1102                ?150                	;0
237  101   ECHO/40                   ?0        151:'						<li class="notification-list">
                            <a href="settings" class="nav-link right-bar-toggle waves-effect ' ?0                  	;0
238  102   FETCH_DIM_R/81            $93=      16?6                 152:'theme'         	;0
239  102   IS_EQUAL/17               #94=      $93                  153:1               	;0
240  102   JMPZ/43                   ?0        #94                  ?242                	;0	>>242
241  103   GOTO/253                  ?0        ?244                 ?154                	;0
242  105   ECHO/40                   ?0        155:'text-warning'   ?0                  	;0	<<240
243  106   GOTO/253                  ?0        ?686                 ?156                	;0
244  108   GOTO/253                  ?0        ?685                 ?157                	;0
245  111   ECHO/40                   ?0        158:'        <style>
        body {
            background: url(\'./assets/images/theme/' ?0                  	;0
246  112   INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'basename'      	;1
247  112   FETCH_DIM_R/81            $95=      16?6                 161:'theme'         	;0
248  112   FETCH_DIM_FUNC_ARG/93     $96=      16?8                 $95                 	;1
249  112   FETCH_DIM_FUNC_ARG/93     $97=      $96                  162:'image'         	;1
250  112   SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
251  112   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
252  112   ECHO/40                   ?0        $98                  ?0                  	;0
253  113   ECHO/40                   ?0        163:'\');
        }
        </style>
		' ?0                  	;0
254  115   GOTO/253                  ?0        ?1703                ?164                	;0
255  117   ECHO/40                   ?0        165:'                                        </ul>
                                    </li>
									' ?0                  	;0
256  119   INIT_FCALL_BY_NAME/59     ?0        ?0                   166:'E589A4bF54A2DaD1'	;2
257  119   SEND_VAL_EX/116           ?80       168:'adv'            ?1                  	;0
258  119   SEND_VAL_EX/116           ?96       169:'add_e2'         ?2                  	;0
259  119   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
260  119   JMPNZ_EX/47               #100=     $99                  ?266                	;0	>>266
261  119   INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'e589a4bF54a2DaD1'	;2
262  119   SEND_VAL_EX/116           ?80       172:'adv'            ?1                  	;0
263  119   SEND_VAL_EX/116           ?96       173:'manage_e2'      ?2                  	;0
264  119   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
265  119   BOOL/52                   #100=     $101                 ?0                  	;0
266  119   BOOL_NOT/13               #102=     #100                 ?0                  	;0	<<260
267  119   JMPZ/43                   ?0        #102                 ?269                	;0	>>269
268  120   GOTO/253                  ?0        ?1564                ?174                	;0
269  122   ECHO/40                   ?0        175:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0	<<267
270  123   FETCH_DIM_R/81            $103=     16?0                 176:'enigma_devices'	;0
271  123   ECHO/40                   ?0        $103                 ?0                  	;0
272  124   GOTO/253                  ?0        ?1077                ?177                	;0
273  126   FETCH_DIM_R/81            $104=     16?0                 178:'transcode_profiles'	;0
274  126   ECHO/40                   ?0        $104                 ?0                  	;0
275  127   ECHO/40                   ?0        179:'</a></li>
                                            ' ?0                  	;0
276  129   INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'E589a4bf54a2dad1'	;2
277  129   SEND_VAL_EX/116           ?80       182:'adv'            ?1                  	;0
278  129   SEND_VAL_EX/116           ?96       183:'folder_watch'   ?2                  	;0
279  129   DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
280  129   BOOL_NOT/13               #106=     $105                 ?0                  	;0
281  129   JMPZ/43                   ?0        #106                 ?283                	;0	>>283
282  130   GOTO/253                  ?0        ?2359                ?184                	;0
283  132   ECHO/40                   ?0        185:'                                            <li><a href="plex">Plex Sync</a></li>
                                            <li><a href="watch">' ?0                  	;0	<<281
284  133   GOTO/253                  ?0        ?2356                ?186                	;0
285  136   INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'e589A4bF54a2dad1'	;2
286  136   SEND_VAL_EX/116           ?80       189:'adv'            ?1                  	;0
287  136   SEND_VAL_EX/116           ?96       190:'add_mag'        ?2                  	;0
288  136   DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
289  136   JMPNZ_EX/47               #108=     $107                 ?295                	;0	>>295
290  136   INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'E589A4bf54a2Dad1'	;2
291  136   SEND_VAL_EX/116           ?80       193:'adv'            ?1                  	;0
292  136   SEND_VAL_EX/116           ?96       194:'manage_mag'     ?2                  	;0
293  136   DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
294  136   BOOL/52                   #108=     $109                 ?0                  	;0
295  136   BOOL_NOT/13               #110=     #108                 ?0                  	;0	<<289
296  136   JMPZ/43                   ?0        #110                 ?298                	;0	>>298
297  137   GOTO/253                  ?0        ?256                 ?195                	;0
298  139   ECHO/40                   ?0        196:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0	<<296
299  140   FETCH_DIM_R/81            $111=     16?0                 197:'mag_devices'   	;0
300  140   ECHO/40                   ?0        $111                 ?0                  	;0
301  141   ECHO/40                   ?0        198:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0
302  142   GOTO/253                  ?0        ?1229                ?199                	;0
303  144   FETCH_DIM_R/81            $112=     16?0                 200:'blocked_ips'   	;0
304  144   ECHO/40                   ?0        $112                 ?0                  	;0
305  145   ECHO/40                   ?0        201:'</a></li>
                                            ' ?0                  	;0
306  147   INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'E589a4bF54a2DAd1'	;2
307  147   SEND_VAL_EX/116           ?80       204:'adv'            ?1                  	;0
308  147   SEND_VAL_EX/116           ?96       205:'block_isps'     ?2                  	;0
309  147   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
310  147   BOOL_NOT/13               #114=     $113                 ?0                  	;0
311  147   JMPZ/43                   ?0        #114                 ?313                	;0	>>313
312  148   GOTO/253                  ?0        ?1068                ?206                	;0
313  150   ECHO/40                   ?0        207:'                                            <li><a href="isps">' ?0                  	;0	<<311
314  151   GOTO/253                  ?0        ?1065                ?208                	;0
315  153   FETCH_DIM_R/81            $115=     16?0                 209:'manage_proxies'	;0
316  153   ECHO/40                   ?0        $115                 ?0                  	;0
317  154   ECHO/40                   ?0        210:'</a></li>
                                    <li><a href="server_order">Server Order</a></li>
									' ?0                  	;0
318  156   INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'e589A4bF54A2DAD1'	;2
319  156   SEND_VAL_EX/116           ?80       213:'adv'            ?1                  	;0
320  156   SEND_VAL_EX/116           ?96       214:'process_monitor' ?2                  	;0
321  156   DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
322  156   BOOL_NOT/13               #117=     $116                 ?0                  	;0
323  156   JMPZ/43                   ?0        #117                 ?325                	;0	>>325
324  157   GOTO/253                  ?0        ?330                 ?215                	;0
325  159   ECHO/40                   ?0        216:'                                    <li><a href="process_monitor">' ?0                  	;0	<<323
326  160   GOTO/253                  ?0        ?327                 ?217                	;0
327  162   FETCH_DIM_R/81            $118=     16?0                 218:'process_monitor'	;0
328  162   ECHO/40                   ?0        $118                 ?0                  	;0
329  163   ECHO/40                   ?0        219:'</a></li>
                                    ' ?0                  	;0
330  165   ECHO/40                   ?0        220:'                                </ul>
                            </li>
                            ' ?0                  	;0
331  167   GOTO/253                  ?0        ?660                 ?221                	;0
332  170   ECHO/40                   ?0        222:'                                <a href="https://xui.one/billing/index.php?rp=/knowledgebase" class="dropdown-item notify-item">
                                    <span>XUI Knowledgebase</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="logout" class="dropdown-item notify-item">
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                        ' ?0                  	;0
333  171   FETCH_STATIC_PROP_R/173   $119=     223:'rSettings'      224:'XUI'           	;0
334  171   FETCH_DIM_R/81            $120=     $119                 226:'security_key'  	;0
335  171   JMP_SET/152               #121=     $120                 ?337                	;0
336  171   QM_ASSIGN/22              #121=     227:''               ?0                  	;0
337  171   BOOL_NOT/13               #122=     #121                 ?0                  	;0
338  171   JMPZ_EX/46                #122=     #122                 ?344                	;0	>>344
339  171   INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'e589A4bF54A2DAd1'	;2
340  171   SEND_VAL_EX/116           ?80       230:'adv'            ?1                  	;0
341  171   SEND_VAL_EX/116           ?96       231:'servers'        ?2                  	;0
342  171   DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
343  171   BOOL/52                   #122=     $123                 ?0                  	;0
344  171   BOOL_NOT/13               #124=     #122                 ?0                  	;0	<<338
345  171   JMPZ/43                   ?0        #124                 ?347                	;0	>>347
346  172   GOTO/253                  ?0        ?2106                ?232                	;0
347  174   ECHO/40                   ?0        233:'                        <li class="notification-list">
                            <a title="<strong>No security key set!</strong><br/><br/>Once you have updated all of your load balancers, go to <strong>Quick Tools -> General</strong> and select <strong>Renew Security Key</strong>." href="quick_tools" class="nav-link right-bar-toggle waves-effect tooltip-left ' ?0                  	;0	<<345
348  175   FETCH_DIM_R/81            $125=     16?6                 234:'theme'         	;0
349  175   IS_EQUAL/17               #126=     $125                 235:1               	;0
350  175   JMPZ/43                   ?0        #126                 ?352                	;0	>>352
351  176   GOTO/253                  ?0        ?936                 ?236                	;0
352  178   GOTO/253                  ?0        ?934                 ?237                	;0	<<350
353  180   ECHO/40                   ?0        238:'</a></li>
                                            ' ?0                  	;0
354  182   ECHO/40                   ?0        239:'                                            ' ?0                  	;0
355  183   BOOL_NOT/13               #127=     16?9                 ?0                  	;0
356  183   JMPZ_EX/46                #127=     #127                 ?362                	;0	>>362
357  183   INIT_FCALL_BY_NAME/59     ?0        ?0                   240:'e589a4BF54A2DaD1'	;2
358  183   SEND_VAL_EX/116           ?80       242:'adv'            ?1                  	;0
359  183   SEND_VAL_EX/116           ?96       243:'mass_edit_streams' ?2                  	;0
360  183   DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
361  183   BOOL/52                   #127=     $128                 ?0                  	;0
362  183   BOOL_NOT/13               #129=     #127                 ?0                  	;0	<<356
363  183   JMPZ/43                   ?0        #129                 ?365                	;0	>>365
364  184   GOTO/253                  ?0        ?2308                ?244                	;0
365  186   ECHO/40                   ?0        245:'                                            <li><a href="stream_review">Stream Review</a></li>
                                            ' ?0                  	;0	<<363
366  187   GOTO/253                  ?0        ?2308                ?246                	;0
367  189   ECHO/40                   ?0        247:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0
368  190   INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'E589A4Bf54A2DaD1'	;2
369  190   SEND_VAL_EX/116           ?80       250:'adv'            ?1                  	;0
370  190   SEND_VAL_EX/116           ?96       251:'mass_edit_streams' ?2                  	;0
371  190   DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
372  190   BOOL_NOT/13               #131=     $130                 ?0                  	;0
373  190   JMPZ/43                   ?0        #131                 ?375                	;0	>>375
374  191   GOTO/253                  ?0        ?376                 ?252                	;0
375  193   ECHO/40                   ?0        253:'                                            <li><a href="created_channel_mass">Created Channels</a></li>
                                            ' ?0                  	;0	<<373
376  195   ECHO/40                   ?0        254:'                                            ' ?0                  	;0
377  196   GOTO/253                  ?0        ?1259                ?255                	;0
378  198   INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'E589a4Bf54a2dAD1'	;2
379  198   SEND_VAL_EX/116           ?80       258:'adv'            ?1                  	;0
380  198   SEND_VAL_EX/116           ?96       259:'mass_sedits'    ?2                  	;0
381  198   DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
382  198   BOOL_NOT/13               #133=     $132                 ?0                  	;0
383  198   JMPZ/43                   ?0        #133                 ?385                	;0	>>385
384  199   GOTO/253                  ?0        ?389                 ?260                	;0
385  201   ECHO/40                   ?0        261:'                                            <li><a href="series_mass">' ?0                  	;0	<<383
386  202   FETCH_DIM_R/81            $134=     16?0                 262:'series'        	;0
387  202   ECHO/40                   ?0        $134                 ?0                  	;0
388  203   ECHO/40                   ?0        263:'</a></li>
                                            ' ?0                  	;0
389  205   GOTO/253                  ?0        ?390                 ?264                	;0
390  207   ECHO/40                   ?0        265:'                                            ' ?0                  	;0
391  208   INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'E589A4Bf54a2dAd1'	;2
392  208   SEND_VAL_EX/116           ?80       268:'adv'            ?1                  	;0
393  208   SEND_VAL_EX/116           ?96       269:'mass_edit_radio' ?2                  	;0
394  208   DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
395  208   BOOL_NOT/13               #136=     $135                 ?0                  	;0
396  208   JMPZ/43                   ?0        #136                 ?398                	;0	>>398
397  209   GOTO/253                  ?0        ?1614                ?270                	;0
398  211   ECHO/40                   ?0        271:'                                            <li><a href="radio_mass">' ?0                  	;0	<<396
399  212   FETCH_DIM_R/81            $137=     16?0                 272:'stations'      	;0
400  212   ECHO/40                   ?0        $137                 ?0                  	;0
401  213   ECHO/40                   ?0        273:'</a></li>
                                            ' ?0                  	;0
402  214   GOTO/253                  ?0        ?1614                ?274                	;0
403  216   INIT_FCALL_BY_NAME/59     ?0        ?0                   275:'E589a4bf54A2dad1'	;2
404  216   SEND_VAL_EX/116           ?80       277:'adv'            ?1                  	;0
405  216   SEND_VAL_EX/116           ?96       278:'categories'     ?2                  	;0
406  216   DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
407  216   BOOL_NOT/13               #139=     $138                 ?0                  	;0
408  216   JMPZ/43                   ?0        #139                 ?410                	;0	>>410
409  217   GOTO/253                  ?0        ?414                 ?279                	;0
410  219   ECHO/40                   ?0        280:'                                            <li><a href="stream_categories">' ?0                  	;0	<<408
411  220   FETCH_DIM_R/81            $140=     16?0                 281:'categories'    	;0
412  220   ECHO/40                   ?0        $140                 ?0                  	;0
413  221   ECHO/40                   ?0        282:'</a></li>
                                            ' ?0                  	;0
414  223   GOTO/253                  ?0        ?2296                ?283                	;0
415  226   ECHO/40                   ?0        284:'</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="noindex,nofollow">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/libs/jquery-nice-select/nice-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/treeview/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/nestable2/jquery.nestable.min.css" rel="stylesheet" />
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/quill/quill.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/jbox/jBox.all.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
		' ?0                  	;0
416  227   ISSET_ISEMPTY_CV/197      #141=     16?10                ?0                  	;33554432
417  227   JMPNZ_EX/47               #141=     #141                 ?423                	;0	>>423
418  227   FETCH_DIM_R/81            $142=     16?6                 285:'theme'         	;0
419  227   FETCH_DIM_R/81            $143=     16?8                 $142                	;0
420  227   FETCH_DIM_R/81            $144=     $143                 286:'dark'          	;0
421  227   BOOL_NOT/13               #145=     $144                 ?0                  	;0
422  227   BOOL/52                   #141=     #145                 ?0                  	;0
423  227   JMPZ/43                   ?0        #141                 ?425                	;0	>>425	<<417
424  228   GOTO/253                  ?0        ?2393                ?287                	;0
425  230   ECHO/40                   ?0        288:'		<link href="assets/css/bootstrap.dark.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.dark.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/listings.dark.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/custom.dark.css" rel="stylesheet" type="text/css" />
		' ?0                  	;0	<<423
426  231   GOTO/253                  ?0        ?2394                ?289                	;0
427  232   GOTO/253                  ?0        ?2393                ?290                	;0
428  234   ECHO/40                   ?0        291:'                                            <li><a href="movie_mass">' ?0                  	;0
429  235   FETCH_DIM_R/81            $146=     16?0                 292:'movies'        	;0
430  235   ECHO/40                   ?0        $146                 ?0                  	;0
431  236   ECHO/40                   ?0        293:'</a></li>
                                            ' ?0                  	;0
432  238   ECHO/40                   ?0        294:'                                            ' ?0                  	;0
433  239   GOTO/253                  ?0        ?378                 ?295                	;0
434  241   ECHO/40                   ?0        296:'                    <div class="clearfix"></div>
                </div>
            </div>
            ' ?0                  	;0
435  242   ISSET_ISEMPTY_CV/197      #147=     16?10                ?0                  	;33554432
436  242   JMPZ/43                   ?0        #147                 ?438                	;0	>>438
437  243   GOTO/253                  ?0        ?739                 ?297                	;0
438  245   ECHO/40                   ?0        298:'            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="index"><i class="fe-activity"></i>' ?0                  	;0	<<436
439  246   FETCH_DIM_R/81            $148=     16?0                 299:'dashboard'     	;0
440  246   ECHO/40                   ?0        $148                 ?0                  	;0
441  247   BOOL_NOT/13               #149=     16?9                 ?0                  	;0
442  247   JMPZ/43                   ?0        #149                 ?444                	;0	>>444
443  248   GOTO/253                  ?0        ?2245                ?300                	;0
444  250   GOTO/253                  ?0        ?2243                ?301                	;0	<<442
445  253   INIT_FCALL_BY_NAME/59     ?0        ?0                   302:'E589A4Bf54a2Dad1'	;2
446  253   SEND_VAL_EX/116           ?80       304:'adv'            ?1                  	;0
447  253   SEND_VAL_EX/116           ?96       305:'streams'        ?2                  	;0
448  253   DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
449  253   BOOL_NOT/13               #151=     $150                 ?0                  	;0
450  253   JMPZ/43                   ?0        #151                 ?452                	;0	>>452
451  254   GOTO/253                  ?0        ?1049                ?306                	;0
452  256   ECHO/40                   ?0        307:'                                            <li><a href="streams">' ?0                  	;0	<<450
453  257   FETCH_DIM_R/81            $152=     16?0                 308:'manage_streams'	;0
454  257   ECHO/40                   ?0        $152                 ?0                  	;0
455  258   ECHO/40                   ?0        309:'</a></li>
											' ?0                  	;0
456  259   GOTO/253                  ?0        ?1049                ?310                	;0
457  262   ECHO/40                   ?0        311:'                                        </ul>
                                    </li>
                                    ' ?0                  	;0
458  264   INIT_FCALL_BY_NAME/59     ?0        ?0                   312:'E589a4BF54A2dAd1'	;2
459  264   SEND_VAL_EX/116           ?80       314:'adv'            ?1                  	;0
460  264   SEND_VAL_EX/116           ?96       315:'channel_order'  ?2                  	;0
461  264   DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
462  264   JMPNZ_EX/47               #154=     $153                 ?468                	;0	>>468
463  264   INIT_FCALL_BY_NAME/59     ?0        ?0                   316:'E589A4Bf54A2DaD1'	;2
464  264   SEND_VAL_EX/116           ?80       318:'adv'            ?1                  	;0
465  264   SEND_VAL_EX/116           ?96       319:'rtmp'           ?2                  	;0
466  264   DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
467  264   BOOL/52                   #154=     $155                 ?0                  	;0
468  264   JMPNZ_EX/47               #154=     #154                 ?474                	;0	>>474	<<462
469  264   INIT_FCALL_BY_NAME/59     ?0        ?0                   320:'e589a4Bf54A2dad1'	;2
470  264   SEND_VAL_EX/116           ?80       322:'adv'            ?1                  	;0
471  264   SEND_VAL_EX/116           ?96       323:'fingerprint'    ?2                  	;0
472  264   DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
473  264   BOOL/52                   #154=     $156                 ?0                  	;0
474  264   JMPNZ_EX/47               #154=     #154                 ?480                	;0	>>480	<<468
475  264   INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'e589a4bF54A2dad1'	;2
476  264   SEND_VAL_EX/116           ?80       326:'adv'            ?1                  	;0
477  264   SEND_VAL_EX/116           ?96       327:'mass_delete'    ?2                  	;0
478  264   DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
479  264   BOOL/52                   #154=     $157                 ?0                  	;0
480  264   JMPNZ_EX/47               #154=     #154                 ?486                	;0	>>486	<<474
481  264   INIT_FCALL_BY_NAME/59     ?0        ?0                   328:'E589A4bF54a2DAd1'	;2
482  264   SEND_VAL_EX/116           ?80       330:'adv'            ?1                  	;0
483  264   SEND_VAL_EX/116           ?96       331:'stream_tools'   ?2                  	;0
484  264   DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
485  264   BOOL/52                   #154=     $158                 ?0                  	;0
486  264   JMPNZ_EX/47               #154=     #154                 ?492                	;0	>>492	<<480
487  264   INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'e589a4bf54a2DaD1'	;2
488  264   SEND_VAL_EX/116           ?80       334:'adv'            ?1                  	;0
489  264   SEND_VAL_EX/116           ?96       335:'quick_tools'    ?2                  	;0
490  264   DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
491  264   BOOL/52                   #154=     $159                 ?0                  	;0
492  264   BOOL_NOT/13               #160=     #154                 ?0                  	;0	<<486
493  264   JMPZ/43                   ?0        #160                 ?495                	;0	>>495
494  265   GOTO/253                  ?0        ?15                  ?336                	;0
495  267   ECHO/40                   ?0        337:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0	<<493
496  268   GOTO/253                  ?0        ?512                 ?338                	;0
497  270   ECHO/40                   ?0        339:'</a></li>
                                    ' ?0                  	;0
498  272   INIT_FCALL_BY_NAME/59     ?0        ?0                   340:'e589a4Bf54A2dad1'	;2
499  272   SEND_VAL_EX/116           ?80       342:'adv'            ?1                  	;0
500  272   SEND_VAL_EX/116           ?96       343:'edit_bouquet'   ?2                  	;0
501  272   DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
502  272   JMPZ_EX/46                #162=     $161                 ?505                	;0	>>505
503  272   BOOL_NOT/13               #163=     16?9                 ?0                  	;0
504  272   BOOL/52                   #162=     #163                 ?0                  	;0
505  272   BOOL_NOT/13               #164=     #162                 ?0                  	;0	<<502
506  272   JMPZ/43                   ?0        #164                 ?508                	;0	>>508
507  273   GOTO/253                  ?0        ?1838                ?344                	;0
508  275   ECHO/40                   ?0        345:'                                    <li><a href="bouquet_order">' ?0                  	;0	<<506
509  276   FETCH_DIM_R/81            $165=     16?0                 346:'order_bouquets'	;0
510  276   ECHO/40                   ?0        $165                 ?0                  	;0
511  277   GOTO/253                  ?0        ?1837                ?347                	;0
512  279   FETCH_DIM_R/81            $166=     16?0                 348:'tools'         	;0
513  279   ECHO/40                   ?0        $166                 ?0                  	;0
514  280   ECHO/40                   ?0        349:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0
515  281   INIT_FCALL_BY_NAME/59     ?0        ?0                   350:'E589A4bF54a2DAD1'	;2
516  281   SEND_VAL_EX/116           ?80       352:'adv'            ?1                  	;0
517  281   SEND_VAL_EX/116           ?96       353:'channel_order'  ?2                  	;0
518  281   DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
519  281   JMPZ_EX/46                #168=     $167                 ?522                	;0	>>522
520  281   BOOL_NOT/13               #169=     16?9                 ?0                  	;0
521  281   BOOL/52                   #168=     #169                 ?0                  	;0
522  281   BOOL_NOT/13               #170=     #168                 ?0                  	;0	<<519
523  281   JMPZ/43                   ?0        #170                 ?525                	;0	>>525
524  282   GOTO/253                  ?0        ?1552                ?354                	;0
525  284   ECHO/40                   ?0        355:'                                            <li><a href="channel_order">' ?0                  	;0	<<523
526  285   FETCH_DIM_R/81            $171=     16?0                 356:'channel_order' 	;0
527  285   ECHO/40                   ?0        $171                 ?0                  	;0
528  286   GOTO/253                  ?0        ?1551                ?357                	;0
529  289   ECHO/40                   ?0        358:'                                        </ul>
                                    </li>
                                    ' ?0                  	;0
530  291   INIT_FCALL_BY_NAME/59     ?0        ?0                   359:'e589A4bF54A2dad1'	;2
531  291   SEND_VAL_EX/116           ?80       361:'adv'            ?1                  	;0
532  291   SEND_VAL_EX/116           ?96       362:'add_series'     ?2                  	;0
533  291   DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
534  291   JMPNZ_EX/47               #173=     $172                 ?540                	;0	>>540
535  291   INIT_FCALL_BY_NAME/59     ?0        ?0                   363:'E589a4bf54a2daD1'	;2
536  291   SEND_VAL_EX/116           ?80       365:'adv'            ?1                  	;0
537  291   SEND_VAL_EX/116           ?96       366:'series'         ?2                  	;0
538  291   DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
539  291   BOOL/52                   #173=     $174                 ?0                  	;0
540  291   JMPNZ_EX/47               #173=     #173                 ?546                	;0	>>546	<<534
541  291   INIT_FCALL_BY_NAME/59     ?0        ?0                   367:'e589A4bf54A2dad1'	;2
542  291   SEND_VAL_EX/116           ?80       369:'adv'            ?1                  	;0
543  291   SEND_VAL_EX/116           ?96       370:'episodes'       ?2                  	;0
544  291   DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
545  291   BOOL/52                   #173=     $175                 ?0                  	;0
546  291   BOOL_NOT/13               #176=     #173                 ?0                  	;0	<<540
547  291   JMPZ/43                   ?0        #176                 ?549                	;0	>>549
548  292   GOTO/253                  ?0        ?1177                ?371                	;0
549  294   ECHO/40                   ?0        372:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0	<<547
550  295   GOTO/253                  ?0        ?1537                ?373                	;0
551  297   INIT_FCALL_BY_NAME/59     ?0        ?0                   374:'E589a4bF54A2dAd1'	;2
552  297   SEND_VAL_EX/116           ?80       376:'adv'            ?1                  	;0
553  297   SEND_VAL_EX/116           ?96       377:'stream_tools'   ?2                  	;0
554  297   DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
555  297   BOOL_NOT/13               #178=     $177                 ?0                  	;0
556  297   JMPZ/43                   ?0        #178                 ?558                	;0	>>558
557  298   GOTO/253                  ?0        ?562                 ?378                	;0
558  300   ECHO/40                   ?0        379:'                                            <li><a href="stream_tools">' ?0                  	;0	<<556
559  301   FETCH_DIM_R/81            $179=     16?0                 380:'stream_tools'  	;0
560  301   ECHO/40                   ?0        $179                 ?0                  	;0
561  302   ECHO/40                   ?0        381:'</a></li>
                                            ' ?0                  	;0
562  304   GOTO/253                  ?0        ?14                  ?382                	;0
563  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   383:'E589A4bF54A2dAd1'	;2
564  306   SEND_VAL_EX/116           ?80       385:'adv'            ?1                  	;0
565  306   SEND_VAL_EX/116           ?96       386:'add_stream'     ?2                  	;0
566  306   DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
567  306   JMPNZ_EX/47               #181=     $180                 ?573                	;0	>>573
568  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   387:'e589a4bf54A2DaD1'	;2
569  306   SEND_VAL_EX/116           ?80       389:'adv'            ?1                  	;0
570  306   SEND_VAL_EX/116           ?96       390:'create_channel' ?2                  	;0
571  306   DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
572  306   BOOL/52                   #181=     $182                 ?0                  	;0
573  306   JMPNZ_EX/47               #181=     #181                 ?579                	;0	>>579	<<567
574  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   391:'E589a4bf54a2dAD1'	;2
575  306   SEND_VAL_EX/116           ?80       393:'adv'            ?1                  	;0
576  306   SEND_VAL_EX/116           ?96       394:'import_streams' ?2                  	;0
577  306   DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
578  306   BOOL/52                   #181=     $183                 ?0                  	;0
579  306   JMPNZ_EX/47               #181=     #181                 ?585                	;0	>>585	<<573
580  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   395:'E589a4bF54A2Dad1'	;2
581  306   SEND_VAL_EX/116           ?80       397:'adv'            ?1                  	;0
582  306   SEND_VAL_EX/116           ?96       398:'streams'        ?2                  	;0
583  306   DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
584  306   BOOL/52                   #181=     $184                 ?0                  	;0
585  306   JMPNZ_EX/47               #181=     #181                 ?591                	;0	>>591	<<579
586  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   399:'E589A4Bf54a2DAD1'	;2
587  306   SEND_VAL_EX/116           ?80       401:'adv'            ?1                  	;0
588  306   SEND_VAL_EX/116           ?96       402:'add_movie'      ?2                  	;0
589  306   DO_FCALL_BY_NAME/131      $185=     ?0                   ?0                  	;0
590  306   BOOL/52                   #181=     $185                 ?0                  	;0
591  306   JMPNZ_EX/47               #181=     #181                 ?597                	;0	>>597	<<585
592  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   403:'e589A4bf54A2dAD1'	;2
593  306   SEND_VAL_EX/116           ?80       405:'adv'            ?1                  	;0
594  306   SEND_VAL_EX/116           ?96       406:'import_movies'  ?2                  	;0
595  306   DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
596  306   BOOL/52                   #181=     $186                 ?0                  	;0
597  306   JMPNZ_EX/47               #181=     #181                 ?603                	;0	>>603	<<591
598  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   407:'E589A4bF54A2DaD1'	;2
599  306   SEND_VAL_EX/116           ?80       409:'adv'            ?1                  	;0
600  306   SEND_VAL_EX/116           ?96       410:'movies'         ?2                  	;0
601  306   DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
602  306   BOOL/52                   #181=     $187                 ?0                  	;0
603  306   JMPNZ_EX/47               #181=     #181                 ?609                	;0	>>609	<<597
604  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   411:'E589A4Bf54a2Dad1'	;2
605  306   SEND_VAL_EX/116           ?80       413:'adv'            ?1                  	;0
606  306   SEND_VAL_EX/116           ?96       414:'series'         ?2                  	;0
607  306   DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
608  306   BOOL/52                   #181=     $188                 ?0                  	;0
609  306   JMPNZ_EX/47               #181=     #181                 ?615                	;0	>>615	<<603
610  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   415:'E589A4BF54a2daD1'	;2
611  306   SEND_VAL_EX/116           ?80       417:'adv'            ?1                  	;0
612  306   SEND_VAL_EX/116           ?96       418:'episodes'       ?2                  	;0
613  306   DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
614  306   BOOL/52                   #181=     $189                 ?0                  	;0
615  306   JMPNZ_EX/47               #181=     #181                 ?621                	;0	>>621	<<609
616  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   419:'e589a4bf54a2dad1'	;2
617  306   SEND_VAL_EX/116           ?80       421:'adv'            ?1                  	;0
618  306   SEND_VAL_EX/116           ?96       422:'add_series'     ?2                  	;0
619  306   DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
620  306   BOOL/52                   #181=     $190                 ?0                  	;0
621  306   JMPNZ_EX/47               #181=     #181                 ?627                	;0	>>627	<<615
622  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   423:'e589A4bf54A2DaD1'	;2
623  306   SEND_VAL_EX/116           ?80       425:'adv'            ?1                  	;0
624  306   SEND_VAL_EX/116           ?96       426:'radio'          ?2                  	;0
625  306   DO_FCALL_BY_NAME/131      $191=     ?0                   ?0                  	;0
626  306   BOOL/52                   #181=     $191                 ?0                  	;0
627  306   JMPNZ_EX/47               #181=     #181                 ?633                	;0	>>633	<<621
628  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   427:'E589A4BF54A2Dad1'	;2
629  306   SEND_VAL_EX/116           ?80       429:'adv'            ?1                  	;0
630  306   SEND_VAL_EX/116           ?96       430:'add_radio'      ?2                  	;0
631  306   DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
632  306   BOOL/52                   #181=     $192                 ?0                  	;0
633  306   BOOL_NOT/13               #193=     #181                 ?0                  	;0	<<627
634  306   JMPZ/43                   ?0        #193                 ?636                	;0	>>636
635  307   GOTO/253                  ?0        ?2275                ?431                	;0
636  309   ECHO/40                   ?0        432:'                            <li class="has-submenu">
                                <a href="#"> <i class="fas fa-play"></i>' ?0                  	;0	<<634
637  310   FETCH_DIM_R/81            $194=     16?0                 433:'content'       	;0
638  310   ECHO/40                   ?0        $194                 ?0                  	;0
639  311   ECHO/40                   ?0        434:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    ' ?0                  	;0
640  312   INIT_FCALL_BY_NAME/59     ?0        ?0                   435:'E589a4BF54a2dAd1'	;2
641  312   SEND_VAL_EX/116           ?80       437:'adv'            ?1                  	;0
642  312   SEND_VAL_EX/116           ?96       438:'add_stream'     ?2                  	;0
643  312   DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
644  312   JMPNZ_EX/47               #196=     $195                 ?650                	;0	>>650
645  312   INIT_FCALL_BY_NAME/59     ?0        ?0                   439:'E589A4Bf54A2dad1'	;2
646  312   SEND_VAL_EX/116           ?80       441:'adv'            ?1                  	;0
647  312   SEND_VAL_EX/116           ?96       442:'import_streams' ?2                  	;0
648  312   DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
649  312   BOOL/52                   #196=     $197                 ?0                  	;0
650  312   JMPNZ_EX/47               #196=     #196                 ?656                	;0	>>656	<<644
651  312   INIT_FCALL_BY_NAME/59     ?0        ?0                   443:'E589a4BF54A2Dad1'	;2
652  312   SEND_VAL_EX/116           ?80       445:'adv'            ?1                  	;0
653  312   SEND_VAL_EX/116           ?96       446:'streams'        ?2                  	;0
654  312   DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
655  312   BOOL/52                   #196=     $198                 ?0                  	;0
656  312   BOOL_NOT/13               #199=     #196                 ?0                  	;0	<<650
657  312   JMPZ/43                   ?0        #199                 ?659                	;0	>>659
658  313   GOTO/253                  ?0        ?1050                ?447                	;0
659  315   GOTO/253                  ?0        ?2343                ?448                	;0	<<657
660  317   INIT_FCALL_BY_NAME/59     ?0        ?0                   449:'e589a4bf54A2DaD1'	;2
661  317   SEND_VAL_EX/116           ?80       451:'adv'            ?1                  	;0
662  317   SEND_VAL_EX/116           ?96       452:'add_reguser'    ?2                  	;0
663  317   DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
664  317   JMPNZ_EX/47               #201=     $200                 ?670                	;0	>>670
665  317   INIT_FCALL_BY_NAME/59     ?0        ?0                   453:'E589A4BF54a2dad1'	;2
666  317   SEND_VAL_EX/116           ?80       455:'adv'            ?1                  	;0
667  317   SEND_VAL_EX/116           ?96       456:'mng_regusers'   ?2                  	;0
668  317   DO_FCALL_BY_NAME/131      $202=     ?0                   ?0                  	;0
669  317   BOOL/52                   #201=     $202                 ?0                  	;0
670  317   BOOL_NOT/13               #203=     #201                 ?0                  	;0	<<664
671  317   JMPZ/43                   ?0        #203                 ?673                	;0	>>673
672  318   GOTO/253                  ?0        ?195                 ?457                	;0
673  320   ECHO/40                   ?0        458:'                            <li class="has-submenu">
                                <a href="#"> <i class="fas fa-users"></i>' ?0                  	;0	<<671
674  321   FETCH_DIM_R/81            $204=     16?0                 459:'users'         	;0
675  321   ECHO/40                   ?0        $204                 ?0                  	;0
676  322   ECHO/40                   ?0        460:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    ' ?0                  	;0
677  323   INIT_FCALL_BY_NAME/59     ?0        ?0                   461:'E589A4Bf54a2dAd1'	;2
678  323   SEND_VAL_EX/116           ?80       463:'adv'            ?1                  	;0
679  323   SEND_VAL_EX/116           ?96       464:'add_reguser'    ?2                  	;0
680  323   DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
681  323   BOOL_NOT/13               #206=     $205                 ?0                  	;0
682  323   JMPZ/43                   ?0        #206                 ?684                	;0	>>684
683  324   GOTO/253                  ?0        ?942                 ?465                	;0
684  326   GOTO/253                  ?0        ?938                 ?466                	;0	<<682
685  328   ECHO/40                   ?0        467:'text-white'     ?0                  	;0
686  330   ECHO/40                   ?0        468:' tooltip-left" title="' ?0                  	;0
687  331   FETCH_CONSTANT/99         #207=     ?0                   469:'XUI_BETA'      	;16
688  331   JMPZ/43                   ?0        #207                 ?691                	;0	>>691
689  331   QM_ASSIGN/22              #208=     472:'Beta Release '  ?0                  	;0
690  331   JMP/42                    ?0        ?692                 ?0                  	;0	>>692
691  331   QM_ASSIGN/22              #208=     473:'Official Release ' ?0                  	;0	<<688
692  331   ECHO/40                   ?0        #208                 ?0                  	;0	<<690
693  332   ECHO/40                   ?0        474:' v'             ?0                  	;0
694  333   GOTO/253                  ?0        ?861                 ?475                	;0
695  335   FE_RESET_R/77             $209=     16?11                ?719                	;0
696  335   FE_FETCH_R/78             ?0        $209                 16?12               	;719	>>719	<<718
697  336   ASSIGN/38                 ?182      16?13                476:true            	;0
698  337   FETCH_DIM_R/81            $211=     16?12                477:'permissions'   	;0
699  337   FE_RESET_R/77             $212=     $211                 ?711                	;0
700  337   FE_FETCH_R/78             ?0        $212                 16?14               	;711	>>711	<<710
701  338   INIT_FCALL_BY_NAME/59     ?0        ?0                   478:'E589a4bF54a2DAD1'	;2
702  338   SEND_VAL_EX/116           ?80       480:'adv'            ?1                  	;0
703  338   SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
704  338   DO_FCALL_BY_NAME/131      $213=     ?0                   ?0                  	;0
705  338   JMPZ/43                   ?0        $213                 ?709                	;0	>>709
706  339   NOP/0                     ?0        ?0                   ?0                  	;1
707  339   NOP/0                     ?0        ?0                   ?0                  	;1
708  339   GOTO/253                  ?0        ?710                 ?481                	;0
709  341   ASSIGN/38                 ?186      16?13                482:false           	;0	<<705
710  343   JMP/42                    ?0        ?700                 ?0                  	;0	>>700
711  343   FE_FREE/127               ?0        $212                 ?0                  	;0	<<699
712  346   BOOL_NOT/13               #215=     16?13                ?0                  	;0
713  346   JMPZ/43                   ?0        #215                 ?716                	;0	>>716
714  347   NOP/0                     ?0        ?0                   ?0                  	;1
715  347   GOTO/253                  ?0        ?718                 ?483                	;0
716  349   ASSIGN_DIM/147            ?188      16?15                ?4397406            	;0	<<713
717  349   OP_DATA/137               ?0        16?12                ?0                  	;0
718  351   JMP/42                    ?0        ?696                 ?0                  	;0	>>696
719  351   FE_FREE/127               ?0        $209                 ?0                  	;0	<<695
720  354   ASSIGN/38                 ?189      16?16                484:NULL            	;0
721  355   INIT_FCALL_BY_NAME/59     ?0        ?0                   485:'count'         	;1
722  355   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
723  355   DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
724  355   IS_SMALLER/19             #219=     487:8                $218                	;0
725  355   BOOL_NOT/13               #220=     #219                 ?0                  	;0
726  355   JMPZ/43                   ?0        #220                 ?728                	;0	>>728
727  356   GOTO/253                  ?0        ?1012                ?488                	;0
728  358   INIT_FCALL_BY_NAME/59     ?0        ?0                   489:'ceil'          	;1	<<726
729  358   INIT_FCALL_BY_NAME/59     ?0        ?0                   491:'count'         	;1
730  358   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
731  358   DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
732  358   DIV/4                     #222=     $221                 493:2.0             	;0
733  358   SEND_VAL_EX/116           ?80       #222                 ?1                  	;0
734  358   DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
735  358   ASSIGN/38                 ?196      16?16                $223                	;0
736  359   GOTO/253                  ?0        ?1012                ?494                	;0
737  362   ECHO/40                   ?0        495:'                                </ul>
                            </li>
                            ' ?0                  	;0
738  364   ECHO/40                   ?0        496:'                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            ' ?0                  	;0
739  366   GOTO/253                  ?0        ?1305                ?497                	;0
740  368   ECHO/40                   ?0        498:'</a></li>
                                            ' ?0                  	;0
741  370   INIT_FCALL_BY_NAME/59     ?0        ?0                   499:'E589a4BF54A2dAD1'	;2
742  370   SEND_VAL_EX/116           ?80       501:'adv'            ?1                  	;0
743  370   SEND_VAL_EX/116           ?96       502:'quick_tools'    ?2                  	;0
744  370   DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
745  370   BOOL_NOT/13               #226=     $225                 ?0                  	;0
746  370   JMPZ/43                   ?0        #226                 ?748                	;0	>>748
747  371   GOTO/253                  ?0        ?1579                ?503                	;0
748  373   ECHO/40                   ?0        504:'                                            <li><a href="quick_tools">' ?0                  	;0	<<746
749  374   FETCH_DIM_R/81            $227=     16?0                 505:'quick_tools'   	;0
750  374   ECHO/40                   ?0        $227                 ?0                  	;0
751  375   GOTO/253                  ?0        ?1578                ?506                	;0
752  377   INIT_FCALL_BY_NAME/59     ?0        ?0                   507:'E589A4bf54A2daD1'	;2
753  377   SEND_VAL_EX/116           ?80       509:'adv'            ?1                  	;0
754  377   SEND_VAL_EX/116           ?96       510:'mng_groups'     ?2                  	;0
755  377   DO_FCALL_BY_NAME/131      $228=     ?0                   ?0                  	;0
756  377   BOOL_NOT/13               #229=     $228                 ?0                  	;0
757  377   JMPZ/43                   ?0        #229                 ?759                	;0	>>759
758  378   GOTO/253                  ?0        ?763                 ?511                	;0
759  380   ECHO/40                   ?0        512:'                                            <li><a href="groups">' ?0                  	;0	<<757
760  381   FETCH_DIM_R/81            $230=     16?0                 513:'groups'        	;0
761  381   ECHO/40                   ?0        $230                 ?0                  	;0
762  382   ECHO/40                   ?0        514:'</a></li>
                                            ' ?0                  	;0
763  384   GOTO/253                  ?0        ?992                 ?515                	;0
764  386   FETCH_DIM_R/81            $231=     16?0                 516:'add_station'   	;0
765  386   ECHO/40                   ?0        $231                 ?0                  	;0
766  387   ECHO/40                   ?0        517:'</a></li>
											' ?0                  	;0
767  389   INIT_FCALL_BY_NAME/59     ?0        ?0                   518:'e589A4bf54a2Dad1'	;2
768  389   SEND_VAL_EX/116           ?80       520:'adv'            ?1                  	;0
769  389   SEND_VAL_EX/116           ?96       521:'radio'          ?2                  	;0
770  389   DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
771  389   BOOL_NOT/13               #233=     $232                 ?0                  	;0
772  389   JMPZ/43                   ?0        #233                 ?774                	;0	>>774
773  390   GOTO/253                  ?0        ?1274                ?522                	;0
774  392   ECHO/40                   ?0        523:'                                            <li><a href="radios">' ?0                  	;0	<<772
775  393   GOTO/253                  ?0        ?1271                ?524                	;0
776  396   ECHO/40                   ?0        525:'                            </li>
							' ?0                  	;0
777  397   INIT_FCALL_BY_NAME/59     ?0        ?0                   526:'E589A4bf54a2DAD1'	;2
778  397   SEND_VAL_EX/116           ?80       528:'adv'            ?1                  	;0
779  397   SEND_VAL_EX/116           ?96       529:'servers'        ?2                  	;0
780  397   DO_FCALL_BY_NAME/131      $234=     ?0                   ?0                  	;0
781  397   JMPNZ_EX/47               #235=     $234                 ?787                	;0	>>787
782  397   INIT_FCALL_BY_NAME/59     ?0        ?0                   530:'E589A4bf54A2DAD1'	;2
783  397   SEND_VAL_EX/116           ?80       532:'adv'            ?1                  	;0
784  397   SEND_VAL_EX/116           ?96       533:'process_monitor' ?2                  	;0
785  397   DO_FCALL_BY_NAME/131      $236=     ?0                   ?0                  	;0
786  397   BOOL/52                   #235=     $236                 ?0                  	;0
787  397   BOOL_NOT/13               #237=     #235                 ?0                  	;0	<<781
788  397   JMPZ/43                   ?0        #237                 ?790                	;0	>>790
789  398   GOTO/253                  ?0        ?331                 ?534                	;0
790  400   ECHO/40                   ?0        535:'                            <li class="has-submenu">
                                <a href="#"><i class="fas fa-server"></i>' ?0                  	;0	<<788
791  401   FETCH_DIM_R/81            $238=     16?0                 536:'servers'       	;0
792  401   ECHO/40                   ?0        $238                 ?0                  	;0
793  402   GOTO/253                  ?0        ?1                   ?537                	;0
794  404   ECHO/40                   ?0        538:'                                            ' ?0                  	;0
795  405   INIT_FCALL_BY_NAME/59     ?0        ?0                   539:'e589a4bF54A2dad1'	;2
796  405   SEND_VAL_EX/116           ?80       541:'adv'            ?1                  	;0
797  405   SEND_VAL_EX/116           ?96       542:'mass_sedits'    ?2                  	;0
798  405   DO_FCALL_BY_NAME/131      $239=     ?0                   ?0                  	;0
799  405   BOOL_NOT/13               #240=     $239                 ?0                  	;0
800  405   JMPZ/43                   ?0        #240                 ?802                	;0	>>802
801  406   GOTO/253                  ?0        ?1334                ?543                	;0
802  408   ECHO/40                   ?0        544:'                                            <li><a href="episodes_mass">' ?0                  	;0	<<800
803  409   FETCH_DIM_R/81            $241=     16?0                 545:'episodes'      	;0
804  409   ECHO/40                   ?0        $241                 ?0                  	;0
805  410   ECHO/40                   ?0        546:'</a></li>
											' ?0                  	;0
806  411   GOTO/253                  ?0        ?1334                ?547                	;0
807  413   ECHO/40                   ?0        548:' whiteout'      ?0                  	;0
808  415   ECHO/40                   ?0        549:'">
                                <img src="assets/images/logo-topbar.png" alt="" height="28">
                            </span>
                        </a>
                    </div>
                    ' ?0                  	;0
809  416   ISSET_ISEMPTY_CV/197      #242=     16?10                ?0                  	;33554432
810  416   JMPZ/43                   ?0        #242                 ?812                	;0	>>812
811  417   GOTO/253                  ?0        ?1714                ?550                	;0
812  419   BOOL_NOT/13               #243=     16?9                 ?0                  	;0	<<810
813  419   JMPZ_EX/46                #243=     #243                 ?816                	;0	>>816
814  419   FETCH_DIM_R/81            $244=     16?17                551:'header_stats'  	;0
815  419   BOOL/52                   #243=     $244                 ?0                  	;0
816  419   BOOL_NOT/13               #245=     #243                 ?0                  	;0	<<813
817  419   JMPZ/43                   ?0        #245                 ?819                	;0	>>819
818  420   GOTO/253                  ?0        ?1396                ?552                	;0
819  422   GOTO/253                  ?0        ?171                 ?553                	;0	<<817
820  424   INIT_FCALL_BY_NAME/59     ?0        ?0                   554:'strlen'        	;1
821  424   FETCH_DIM_FUNC_ARG/93     $246=     16?6                 556:'hue'           	;1
822  424   SEND_VAR_EX/66            ?80       $246                 ?1                  	;0
823  424   DO_FCALL_BY_NAME/131      $247=     ?0                   ?0                  	;0
824  424   IS_SMALLER/19             #248=     557:0                $247                	;0
825  424   JMPZ_EX/46                #248=     #248                 ?835                	;0	>>835
826  424   INIT_FCALL_BY_NAME/59     ?0        ?0                   558:'in_array'      	;2
827  424   FETCH_DIM_FUNC_ARG/93     $249=     16?6                 560:'hue'           	;1
828  424   SEND_VAR_EX/66            ?80       $249                 ?1                  	;0
829  424   INIT_FCALL_BY_NAME/59     ?0        ?0                   561:'array_keys'    	;1
830  424   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
831  424   DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
832  424   SEND_VAR_NO_REF_EX/50     ?96       $250                 ?2                  	;0
833  424   DO_FCALL_BY_NAME/131      $251=     ?0                   ?0                  	;0
834  424   BOOL/52                   #248=     $251                 ?0                  	;0
835  424   BOOL_NOT/13               #252=     #248                 ?0                  	;0	<<825
836  424   JMPZ/43                   ?0        #252                 ?838                	;0	>>838
837  425   GOTO/253                  ?0        ?841                 ?563                	;0
838  427   FETCH_DIM_R/81            $253=     16?6                 564:'hue'           	;0	<<836
839  427   CONCAT/8                  #254=     565:'-'              $253                	;0
840  427   ECHO/40                   ?0        #254                 ?0                  	;0
841  429   ECHO/40                   ?0        566:' btn-xs waves-effect waves-light no-border"><span id="header_users">0</span></button>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./streams" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name text-white ml-1">
                                    <i class="fe-play text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate' ?0                  	;0
842  430   INIT_FCALL_BY_NAME/59     ?0        ?0                   567:'strlen'        	;1
843  430   FETCH_DIM_FUNC_ARG/93     $255=     16?6                 569:'hue'           	;1
844  430   SEND_VAR_EX/66            ?80       $255                 ?1                  	;0
845  430   DO_FCALL_BY_NAME/131      $256=     ?0                   ?0                  	;0
846  430   IS_SMALLER/19             #257=     570:0                $256                	;0
847  430   JMPZ_EX/46                #257=     #257                 ?857                	;0	>>857
848  430   INIT_FCALL_BY_NAME/59     ?0        ?0                   571:'in_array'      	;2
849  430   FETCH_DIM_FUNC_ARG/93     $258=     16?6                 573:'hue'           	;1
850  430   SEND_VAR_EX/66            ?80       $258                 ?1                  	;0
851  430   INIT_FCALL_BY_NAME/59     ?0        ?0                   574:'array_keys'    	;1
852  430   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
853  430   DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
854  430   SEND_VAR_NO_REF_EX/50     ?96       $259                 ?2                  	;0
855  430   DO_FCALL_BY_NAME/131      $260=     ?0                   ?0                  	;0
856  430   BOOL/52                   #257=     $260                 ?0                  	;0
857  430   BOOL_NOT/13               #261=     #257                 ?0                  	;0	<<847
858  430   JMPZ/43                   ?0        #261                 ?860                	;0	>>860
859  431   GOTO/253                  ?0        ?1770                ?576                	;0
860  433   GOTO/253                  ?0        ?1767                ?577                	;0	<<858
861  435   FETCH_DIM_R/81            $262=     16?18                578:'version'       	;0
862  435   FETCH_DIM_R/81            $263=     16?18                579:'revision'      	;0
863  435   JMPZ/43                   ?0        $263                 ?871                	;0	>>871
864  435   INIT_FCALL_BY_NAME/59     ?0        ?0                   580:'intval'        	;1
865  435   FETCH_DIM_FUNC_ARG/93     $264=     16?18                582:'revision'      	;1
866  435   SEND_VAR_EX/66            ?80       $264                 ?1                  	;0
867  435   DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
868  435   CONCAT/8                  #266=     583:' R'             $265                	;0
869  435   QM_ASSIGN/22              #267=     #266                 ?0                  	;0
870  435   JMP/42                    ?0        ?872                 ?0                  	;0	>>872
871  435   QM_ASSIGN/22              #267=     584:''               ?0                  	;0	<<863
872  435   CONCAT/8                  #268=     $262                 #267                	;0	<<870
873  435   ECHO/40                   ?0        #268                 ?0                  	;0
874  436   ECHO/40                   ?0        585:' is available to download.">
                                <i class="mdi mdi-update noti-icon"></i>
                            </a>
                        </li>
						' ?0                  	;0
875  438   FETCH_DIM_R/81            $269=     16?17                586:'show_tickets'  	;0
876  438   BOOL_NOT/13               #270=     $269                 ?0                  	;0
877  438   JMPZ/43                   ?0        #270                 ?879                	;0	>>879
878  439   GOTO/253                  ?0        ?1713                ?587                	;0
879  441   ASSIGN/38                 ?243      16?3                 588:array (
)       	;0	<<877
880  442   GOTO/253                  ?0        ?1588                ?589                	;0
881  444   INIT_FCALL_BY_NAME/59     ?0        ?0                   590:'E589a4bF54a2daD1'	;2
882  444   SEND_VAL_EX/116           ?80       592:'adv'            ?1                  	;0
883  444   SEND_VAL_EX/116           ?96       593:'add_code'       ?2                  	;0
884  444   DO_FCALL_BY_NAME/131      $272=     ?0                   ?0                  	;0
885  444   JMPNZ_EX/47               #273=     $272                 ?891                	;0	>>891
886  444   INIT_FCALL_BY_NAME/59     ?0        ?0                   594:'e589a4bF54A2Dad1'	;2
887  444   SEND_VAL_EX/116           ?80       596:'adv'            ?1                  	;0
888  444   SEND_VAL_EX/116           ?96       597:'block_asns'     ?2                  	;0
889  444   DO_FCALL_BY_NAME/131      $274=     ?0                   ?0                  	;0
890  444   BOOL/52                   #273=     $274                 ?0                  	;0
891  444   JMPNZ_EX/47               #273=     #273                 ?897                	;0	>>897	<<885
892  444   INIT_FCALL_BY_NAME/59     ?0        ?0                   598:'e589a4bf54a2dAD1'	;2
893  444   SEND_VAL_EX/116           ?80       600:'adv'            ?1                  	;0
894  444   SEND_VAL_EX/116           ?96       601:'block_ips'      ?2                  	;0
895  444   DO_FCALL_BY_NAME/131      $275=     ?0                   ?0                  	;0
896  444   BOOL/52                   #273=     $275                 ?0                  	;0
897  444   JMPNZ_EX/47               #273=     #273                 ?903                	;0	>>903	<<891
898  444   INIT_FCALL_BY_NAME/59     ?0        ?0                   602:'E589a4bF54A2DaD1'	;2
899  444   SEND_VAL_EX/116           ?80       604:'adv'            ?1                  	;0
900  444   SEND_VAL_EX/116           ?96       605:'block_isps'     ?2                  	;0
901  444   DO_FCALL_BY_NAME/131      $276=     ?0                   ?0                  	;0
902  444   BOOL/52                   #273=     $276                 ?0                  	;0
903  444   JMPNZ_EX/47               #273=     #273                 ?909                	;0	>>909	<<897
904  444   INIT_FCALL_BY_NAME/59     ?0        ?0                   606:'E589a4bF54a2dAd1'	;2
905  444   SEND_VAL_EX/116           ?80       608:'adv'            ?1                  	;0
906  444   SEND_VAL_EX/116           ?96       609:'block_uas'      ?2                  	;0
907  444   DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
908  444   BOOL/52                   #273=     $277                 ?0                  	;0
909  444   JMPNZ_EX/47               #273=     #273                 ?915                	;0	>>915	<<903
910  444   INIT_FCALL_BY_NAME/59     ?0        ?0                   610:'e589a4Bf54A2dAd1'	;2
911  444   SEND_VAL_EX/116           ?80       612:'adv'            ?1                  	;0
912  444   SEND_VAL_EX/116           ?96       613:'rtmp'           ?2                  	;0
913  444   DO_FCALL_BY_NAME/131      $278=     ?0                   ?0                  	;0
914  444   BOOL/52                   #273=     $278                 ?0                  	;0
915  444   JMPNZ_EX/47               #273=     #273                 ?921                	;0	>>921	<<909
916  444   INIT_FCALL_BY_NAME/59     ?0        ?0                   614:'e589A4bf54a2DaD1'	;2
917  444   SEND_VAL_EX/116           ?80       616:'adv'            ?1                  	;0
918  444   SEND_VAL_EX/116           ?96       617:'add_hmac'       ?2                  	;0
919  444   DO_FCALL_BY_NAME/131      $279=     ?0                   ?0                  	;0
920  444   BOOL/52                   #273=     $279                 ?0                  	;0
921  444   BOOL_NOT/13               #280=     #273                 ?0                  	;0	<<915
922  444   JMPZ/43                   ?0        #280                 ?924                	;0	>>924
923  445   GOTO/253                  ?0        ?458                 ?618                	;0
924  447   ECHO/40                   ?0        619:'                                    <li class="has-submenu">
                                        <a href="#">Access Control <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0	<<922
925  448   INIT_FCALL_BY_NAME/59     ?0        ?0                   620:'e589A4Bf54A2dad1'	;2
926  448   SEND_VAL_EX/116           ?80       622:'adv'            ?1                  	;0
927  448   SEND_VAL_EX/116           ?96       623:'add_code'       ?2                  	;0
928  448   DO_FCALL_BY_NAME/131      $281=     ?0                   ?0                  	;0
929  448   BOOL_NOT/13               #282=     $281                 ?0                  	;0
930  448   JMPZ/43                   ?0        #282                 ?932                	;0	>>932
931  449   GOTO/253                  ?0        ?933                 ?624                	;0
932  451   ECHO/40                   ?0        625:'                                            <li><a href="codes">Access Codes</a></li>
                                            ' ?0                  	;0	<<930
933  453   GOTO/253                  ?0        ?1276                ?626                	;0
934  455   ECHO/40                   ?0        627:'text-danger'    ?0                  	;0
935  456   GOTO/253                  ?0        ?937                 ?628                	;0
936  458   ECHO/40                   ?0        629:'text-white'     ?0                  	;0
937  460   GOTO/253                  ?0        ?2105                ?630                	;0
938  462   ECHO/40                   ?0        631:'                                    <li><a href="user">' ?0                  	;0
939  463   FETCH_DIM_R/81            $283=     16?0                 632:'add_user'      	;0
940  463   ECHO/40                   ?0        $283                 ?0                  	;0
941  464   ECHO/40                   ?0        633:'</a></li>
                                    ' ?0                  	;0
942  466   INIT_FCALL_BY_NAME/59     ?0        ?0                   634:'E589A4BF54A2DaD1'	;2
943  466   SEND_VAL_EX/116           ?80       636:'adv'            ?1                  	;0
944  466   SEND_VAL_EX/116           ?96       637:'mng_regusers'   ?2                  	;0
945  466   DO_FCALL_BY_NAME/131      $284=     ?0                   ?0                  	;0
946  466   BOOL_NOT/13               #285=     $284                 ?0                  	;0
947  466   JMPZ/43                   ?0        #285                 ?949                	;0	>>949
948  467   GOTO/253                  ?0        ?2258                ?638                	;0
949  469   GOTO/253                  ?0        ?2254                ?639                	;0	<<947
950  471   FETCH_DIM_R/81            $286=     16?0                 640:'add_stream'    	;0
951  471   ECHO/40                   ?0        $286                 ?0                  	;0
952  472   ECHO/40                   ?0        641:'</a></li>
                                            ' ?0                  	;0
953  474   INIT_FCALL_BY_NAME/59     ?0        ?0                   642:'e589a4bf54a2dad1'	;2
954  474   SEND_VAL_EX/116           ?80       644:'adv'            ?1                  	;0
955  474   SEND_VAL_EX/116           ?96       645:'import_streams' ?2                  	;0
956  474   DO_FCALL_BY_NAME/131      $287=     ?0                   ?0                  	;0
957  474   JMPZ_EX/46                #288=     $287                 ?960                	;0	>>960
958  474   BOOL_NOT/13               #289=     16?9                 ?0                  	;0
959  474   BOOL/52                   #288=     #289                 ?0                  	;0
960  474   BOOL_NOT/13               #290=     #288                 ?0                  	;0	<<957
961  474   JMPZ/43                   ?0        #290                 ?963                	;0	>>963
962  475   GOTO/253                  ?0        ?445                 ?646                	;0
963  477   ECHO/40                   ?0        647:'                                            <li><a href="stream?import=1">Import Multiple</a></li>
                                            <li><a href="review?type=1">Import & Review</a></li>
                                            ' ?0                  	;0	<<961
964  478   GOTO/253                  ?0        ?445                 ?648                	;0
965  480   ECHO/40                   ?0        649:'                            <a class="nav-link dropdown-toggle waves-effect text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            ' ?0                  	;0
966  482   ECHO/40                   ?0        650:'                                <i class="fe-mail noti-icon"></i>
                                ' ?0                  	;0
967  483   IS_SMALLER/19             #291=     651:0                16?2                	;0
968  483   BOOL_NOT/13               #292=     #291                 ?0                  	;0
969  483   JMPZ/43                   ?0        #292                 ?971                	;0	>>971
970  484   GOTO/253                  ?0        ?95                  ?652                	;0
971  486   ECHO/40                   ?0        653:'                                <span class="badge badge-info rounded-circle noti-icon-badge" style="min-width:20px;">' ?0                  	;0	<<969
972  487   GOTO/253                  ?0        ?88                  ?654                	;0
973  489   INIT_FCALL_BY_NAME/59     ?0        ?0                   655:'strlen'        	;1
974  489   FETCH_DIM_FUNC_ARG/93     $293=     16?6                 657:'hue'           	;1
975  489   SEND_VAR_EX/66            ?80       $293                 ?1                  	;0
976  489   DO_FCALL_BY_NAME/131      $294=     ?0                   ?0                  	;0
977  489   IS_SMALLER/19             #295=     658:0                $294                	;0
978  489   BOOL_NOT/13               #296=     #295                 ?0                  	;0
979  489   JMPZ/43                   ?0        #296                 ?981                	;0	>>981
980  490   GOTO/253                  ?0        ?982                 ?659                	;0
981  492   ECHO/40                   ?0        660:' whiteout'      ?0                  	;0	<<979
982  494   ECHO/40                   ?0        661:'">
                                <img src="assets/images/logo-topbar.png" alt="" height="26">
                            </span>
                            <span class="logo-sm' ?0                  	;0
983  495   INIT_FCALL_BY_NAME/59     ?0        ?0                   662:'strlen'        	;1
984  495   FETCH_DIM_FUNC_ARG/93     $297=     16?6                 664:'hue'           	;1
985  495   SEND_VAR_EX/66            ?80       $297                 ?1                  	;0
986  495   DO_FCALL_BY_NAME/131      $298=     ?0                   ?0                  	;0
987  495   IS_SMALLER/19             #299=     665:0                $298                	;0
988  495   BOOL_NOT/13               #300=     #299                 ?0                  	;0
989  495   JMPZ/43                   ?0        #300                 ?991                	;0	>>991
990  496   GOTO/253                  ?0        ?808                 ?666                	;0
991  498   GOTO/253                  ?0        ?807                 ?667                	;0	<<989
992  500   INIT_FCALL_BY_NAME/59     ?0        ?0                   668:'E589A4Bf54a2dAd1'	;2
993  500   SEND_VAL_EX/116           ?80       670:'adv'            ?1                  	;0
994  500   SEND_VAL_EX/116           ?96       671:'mng_packages'   ?2                  	;0
995  500   DO_FCALL_BY_NAME/131      $301=     ?0                   ?0                  	;0
996  500   BOOL_NOT/13               #302=     $301                 ?0                  	;0
997  500   JMPZ/43                   ?0        #302                 ?999                	;0	>>999
998  501   GOTO/253                  ?0        ?1003                ?672                	;0
999  503   ECHO/40                   ?0        673:'                                            <li><a href="packages">' ?0                  	;0	<<997
1000 504   FETCH_DIM_R/81            $303=     16?0                 674:'packages'      	;0
1001 504   ECHO/40                   ?0        $303                 ?0                  	;0
1002 505   ECHO/40                   ?0        675:'</a></li>
                                            ' ?0                  	;0
1003 507   GOTO/253                  ?0        ?2361                ?676                	;0
1004 509   FETCH_DIM_R/81            $304=     16?6                 677:'theme'         	;0
1005 509   IS_EQUAL/17               #305=     $304                 678:1               	;0
1006 509   JMPZ/43                   ?0        #305                 ?1008               	;0	>>1008
1007 510   GOTO/253                  ?0        ?1010                ?679                	;0
1008 512   ECHO/40                   ?0        680:'text-warning'   ?0                  	;0	<<1006
1009 513   GOTO/253                  ?0        ?1611                ?681                	;0
1010 515   ECHO/40                   ?0        682:'text-white'     ?0                  	;0
1011 516   GOTO/253                  ?0        ?1611                ?683                	;0
1012 519   ASSIGN/38                 ?278      16?19                684:0               	;0
1013 520   FE_RESET_R/77             $307=     16?15                ?1033               	;0
1014 520   FE_FETCH_R/78             ?0        $307                 16?12               	;1033	>>1033	<<1032
1015 521   JMPZ_EX/46                #308=     16?16                ?1018               	;0	>>1018
1016 521   IS_EQUAL/17               #309=     16?19                16?16               	;0
1017 521   BOOL/52                   #308=     #309                 ?0                  	;0
1018 521   BOOL_NOT/13               #310=     #308                 ?0                  	;0	<<1015
1019 521   JMPZ/43                   ?0        #310                 ?1022               	;0	>>1022
1020 522   NOP/0                     ?0        ?0                   ?0                  	;1
1021 522   GOTO/253                  ?0        ?1023                ?685                	;0
1022 524   ECHO/40                   ?0        686:'</ul></li><li><ul>' ?0                  	;0	<<1019
1023 526   FETCH_DIM_R/81            $311=     16?12                687:'url'           	;0
1024 526   CONCAT/8                  #312=     688:'<li><a href="'  $311                	;0
1025 526   CONCAT/8                  #313=     #312                 689:'">'            	;0
1026 526   FETCH_DIM_R/81            $314=     16?12                690:'title'         	;0
1027 526   CONCAT/8                  #315=     #313                 $314                	;0
1028 526   CONCAT/8                  #316=     #315                 691:'</a></li>'     	;0
1029 526   ECHO/40                   ?0        #316                 ?0                  	;0
1030 527   POST_INC/36               #317=     16?19                ?0                  	;0
1031 527   FREE/70                   ?0        #317                 ?0                  	;0
1032 528   JMP/42                    ?0        ?1014                ?0                  	;0	>>1014
1033 528   FE_FREE/127               ?0        $307                 ?0                  	;0	<<1013
1034 531   ECHO/40                   ?0        692:'                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    ' ?0                  	;0
1035 532   GOTO/253                  ?0        ?1638                ?693                	;0
1036 534   ECHO/40                   ?0        694:'		<link href="assets/css/modal.css" rel="stylesheet" type="text/css" />
		' ?0                  	;0
1037 536   ECHO/40                   ?0        695:'        '       ?0                  	;0
1038 537   ISSET_ISEMPTY_CV/197      #318=     16?10                ?0                  	;33554432
1039 537   BOOL_NOT/13               #319=     #318                 ?0                  	;0
1040 537   JMPZ_EX/46                #319=     #319                 ?1045               	;0	>>1045
1041 537   FETCH_DIM_R/81            $320=     16?6                 696:'theme'         	;0
1042 537   FETCH_DIM_R/81            $321=     16?8                 $320                	;0
1043 537   FETCH_DIM_R/81            $322=     $321                 697:'image'         	;0
1044 537   BOOL/52                   #319=     $322                 ?0                  	;0
1045 537   JMPZ/43                   ?0        #319                 ?1047               	;0	>>1047	<<1040
1046 538   GOTO/253                  ?0        ?245                 ?698                	;0
1047 540   ECHO/40                   ?0        699:'        <style>
        html, body {
          overflow-x: hidden;
        }
        ' ?0                  	;0	<<1045
1048 541   GOTO/253                  ?0        ?1727                ?700                	;0
1049 544   ECHO/40                   ?0        701:'                                        </ul>
                                    </li>
                                    ' ?0                  	;0
1050 546   INIT_FCALL_BY_NAME/59     ?0        ?0                   702:'E589A4Bf54a2dad1'	;2
1051 546   SEND_VAL_EX/116           ?80       704:'adv'            ?1                  	;0
1052 546   SEND_VAL_EX/116           ?96       705:'create_channel' ?2                  	;0
1053 546   DO_FCALL_BY_NAME/131      $323=     ?0                   ?0                  	;0
1054 546   JMPNZ_EX/47               #324=     $323                 ?1060               	;0	>>1060
1055 546   INIT_FCALL_BY_NAME/59     ?0        ?0                   706:'E589A4bF54A2DaD1'	;2
1056 546   SEND_VAL_EX/116           ?80       708:'adv'            ?1                  	;0
1057 546   SEND_VAL_EX/116           ?96       709:'streams'        ?2                  	;0
1058 546   DO_FCALL_BY_NAME/131      $325=     ?0                   ?0                  	;0
1059 546   BOOL/52                   #324=     $325                 ?0                  	;0
1060 546   BOOL_NOT/13               #326=     #324                 ?0                  	;0	<<1054
1061 546   JMPZ/43                   ?0        #326                 ?1063               	;0	>>1063
1062 547   GOTO/253                  ?0        ?1314                ?710                	;0
1063 549   ECHO/40                   ?0        711:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0	<<1061
1064 550   GOTO/253                  ?0        ?2260                ?712                	;0
1065 552   FETCH_DIM_R/81            $327=     16?0                 713:'blocked_isps'  	;0
1066 552   ECHO/40                   ?0        $327                 ?0                  	;0
1067 553   ECHO/40                   ?0        714:'</a></li>
                                            ' ?0                  	;0
1068 555   INIT_FCALL_BY_NAME/59     ?0        ?0                   715:'e589A4bF54a2dAD1'	;2
1069 555   SEND_VAL_EX/116           ?80       717:'adv'            ?1                  	;0
1070 555   SEND_VAL_EX/116           ?96       718:'block_uas'      ?2                  	;0
1071 555   DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
1072 555   BOOL_NOT/13               #329=     $328                 ?0                  	;0
1073 555   JMPZ/43                   ?0        #329                 ?1075               	;0	>>1075
1074 556   GOTO/253                  ?0        ?1569                ?719                	;0
1075 558   ECHO/40                   ?0        720:'                                            <li><a href="useragents">' ?0                  	;0	<<1073
1076 559   GOTO/253                  ?0        ?1566                ?721                	;0
1077 561   ECHO/40                   ?0        722:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0
1078 562   INIT_FCALL_BY_NAME/59     ?0        ?0                   723:'e589a4Bf54A2DAd1'	;2
1079 562   SEND_VAL_EX/116           ?80       725:'adv'            ?1                  	;0
1080 562   SEND_VAL_EX/116           ?96       726:'add_e2'         ?2                  	;0
1081 562   DO_FCALL_BY_NAME/131      $330=     ?0                   ?0                  	;0
1082 562   BOOL_NOT/13               #331=     $330                 ?0                  	;0
1083 562   JMPZ/43                   ?0        #331                 ?1085               	;0	>>1085
1084 563   GOTO/253                  ?0        ?1525                ?727                	;0
1085 565   ECHO/40                   ?0        728:'                                            <li><a href="enigma">' ?0                  	;0	<<1083
1086 566   FETCH_DIM_R/81            $332=     16?0                 729:'add_enigma'    	;0
1087 566   ECHO/40                   ?0        $332                 ?0                  	;0
1088 567   ECHO/40                   ?0        730:'</a></li>
                                            ' ?0                  	;0
1089 568   GOTO/253                  ?0        ?1525                ?731                	;0
1090 570   FETCH_DIM_R/81            $333=     16?0                 732:'mag_devices'   	;0
1091 570   ECHO/40                   ?0        $333                 ?0                  	;0
1092 571   ECHO/40                   ?0        733:'</a></li>
                                            ' ?0                  	;0
1093 573   ECHO/40                   ?0        734:'                                            ' ?0                  	;0
1094 574   INIT_FCALL_BY_NAME/59     ?0        ?0                   735:'E589a4bF54a2DaD1'	;2
1095 574   SEND_VAL_EX/116           ?80       737:'adv'            ?1                  	;0
1096 574   SEND_VAL_EX/116           ?96       738:'mass_sedits_vod' ?2                  	;0
1097 574   DO_FCALL_BY_NAME/131      $334=     ?0                   ?0                  	;0
1098 574   BOOL_NOT/13               #335=     $334                 ?0                  	;0
1099 574   JMPZ/43                   ?0        #335                 ?1101               	;0	>>1101
1100 575   GOTO/253                  ?0        ?432                 ?739                	;0
1101 577   GOTO/253                  ?0        ?428                 ?740                	;0	<<1099
1102 579   INIT_FCALL_BY_NAME/59     ?0        ?0                   741:'e589A4bf54a2Dad1'	;2
1103 579   SEND_VAL_EX/116           ?80       743:'adv'            ?1                  	;0
1104 579   SEND_VAL_EX/116           ?96       744:'add_user'       ?2                  	;0
1105 579   DO_FCALL_BY_NAME/131      $336=     ?0                   ?0                  	;0
1106 579   JMPNZ_EX/47               #337=     $336                 ?1112               	;0	>>1112
1107 579   INIT_FCALL_BY_NAME/59     ?0        ?0                   745:'e589A4Bf54a2DAD1'	;2
1108 579   SEND_VAL_EX/116           ?80       747:'adv'            ?1                  	;0
1109 579   SEND_VAL_EX/116           ?96       748:'users'          ?2                  	;0
1110 579   DO_FCALL_BY_NAME/131      $338=     ?0                   ?0                  	;0
1111 579   BOOL/52                   #337=     $338                 ?0                  	;0
1112 579   BOOL_NOT/13               #339=     #337                 ?0                  	;0	<<1106
1113 579   JMPZ/43                   ?0        #339                 ?1115               	;0	>>1115
1114 580   GOTO/253                  ?0        ?285                 ?749                	;0
1115 582   ECHO/40                   ?0        750:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0	<<1113
1116 583   FETCH_DIM_R/81            $340=     16?0                 751:'user_lines'    	;0
1117 583   ECHO/40                   ?0        $340                 ?0                  	;0
1118 584   ECHO/40                   ?0        752:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0
1119 585   INIT_FCALL_BY_NAME/59     ?0        ?0                   753:'e589a4BF54a2daD1'	;2
1120 585   SEND_VAL_EX/116           ?80       755:'adv'            ?1                  	;0
1121 585   SEND_VAL_EX/116           ?96       756:'add_user'       ?2                  	;0
1122 585   DO_FCALL_BY_NAME/131      $341=     ?0                   ?0                  	;0
1123 585   BOOL_NOT/13               #342=     $341                 ?0                  	;0
1124 585   JMPZ/43                   ?0        #342                 ?1126               	;0	>>1126
1125 586   GOTO/253                  ?0        ?1297                ?757                	;0
1126 588   GOTO/253                  ?0        ?1293                ?758                	;0	<<1124
1127 590   ECHO/40                   ?0        759:'</a></li>
											' ?0                  	;0
1128 592   INIT_FCALL_BY_NAME/59     ?0        ?0                   760:'e589A4Bf54A2DAd1'	;2
1129 592   SEND_VAL_EX/116           ?80       762:'adv'            ?1                  	;0
1130 592   SEND_VAL_EX/116           ?96       763:'series'         ?2                  	;0
1131 592   DO_FCALL_BY_NAME/131      $343=     ?0                   ?0                  	;0
1132 592   BOOL_NOT/13               #344=     $343                 ?0                  	;0
1133 592   JMPZ/43                   ?0        #344                 ?1135               	;0	>>1135
1134 593   GOTO/253                  ?0        ?1483                ?764                	;0
1135 595   ECHO/40                   ?0        765:'                                            <li><a href="series">' ?0                  	;0	<<1133
1136 596   FETCH_DIM_R/81            $345=     16?0                 766:'manage_series' 	;0
1137 596   ECHO/40                   ?0        $345                 ?0                  	;0
1138 597   GOTO/253                  ?0        ?1482                ?767                	;0
1139 599   ECHO/40                   ?0        768:'                        <li class="notification-list">
                            <a href="servers" class="nav-link right-bar-toggle waves-effect ' ?0                  	;0
1140 600   FETCH_DIM_R/81            $346=     16?6                 769:'theme'         	;0
1141 600   IS_EQUAL/17               #347=     $346                 770:1               	;0
1142 600   JMPZ/43                   ?0        #347                 ?1144               	;0	>>1144
1143 601   GOTO/253                  ?0        ?1146                ?771                	;0
1144 603   ECHO/40                   ?0        772:'text-warning'   ?0                  	;0	<<1142
1145 604   GOTO/253                  ?0        ?1794                ?773                	;0
1146 606   GOTO/253                  ?0        ?1793                ?774                	;0
1147 609   INIT_FCALL_BY_NAME/59     ?0        ?0                   775:'e589A4bF54A2DAD1'	;2
1148 609   SEND_VAL_EX/116           ?80       777:'adv'            ?1                  	;0
1149 609   SEND_VAL_EX/116           ?96       778:'database'       ?2                  	;0
1150 609   DO_FCALL_BY_NAME/131      $348=     ?0                   ?0                  	;0
1151 609   BOOL_NOT/13               #349=     $348                 ?0                  	;0
1152 609   JMPZ/43                   ?0        #349                 ?1154               	;0	>>1154
1153 610   GOTO/253                  ?0        ?1155                ?779                	;0
1154 612   ECHO/40                   ?0        780:'                                <a href="backups" class="dropdown-item notify-item">
                                    <span>Backup Settings</span>
                                </a>
                                <a href="cache" class="dropdown-item notify-item">
                                    <span>Cache & Redis</span>
                                </a>
                                ' ?0                  	;0	<<1152
1155 614   INIT_FCALL_BY_NAME/59     ?0        ?0                   781:'e589A4Bf54a2dAd1'	;2
1156 614   SEND_VAL_EX/116           ?80       783:'adv'            ?1                  	;0
1157 614   SEND_VAL_EX/116           ?96       784:'folder_watch_settings' ?2                  	;0
1158 614   DO_FCALL_BY_NAME/131      $350=     ?0                   ?0                  	;0
1159 614   BOOL_NOT/13               #351=     $350                 ?0                  	;0
1160 614   JMPZ/43                   ?0        #351                 ?1162               	;0	>>1162
1161 615   GOTO/253                  ?0        ?75                  ?785                	;0
1162 617   GOTO/253                  ?0        ?74                  ?786                	;0	<<1160
1163 620   INIT_FCALL_BY_NAME/59     ?0        ?0                   787:'E589a4Bf54a2Dad1'	;2
1164 620   SEND_VAL_EX/116           ?80       789:'adv'            ?1                  	;0
1165 620   SEND_VAL_EX/116           ?96       790:'rtmp'           ?2                  	;0
1166 620   DO_FCALL_BY_NAME/131      $352=     ?0                   ?0                  	;0
1167 620   BOOL_NOT/13               #353=     $352                 ?0                  	;0
1168 620   JMPZ/43                   ?0        #353                 ?1170               	;0	>>1170
1169 621   GOTO/253                  ?0        ?457                 ?791                	;0
1170 623   ECHO/40                   ?0        792:'                                            <li><a href="rtmp_ips">' ?0                  	;0	<<1168
1171 624   FETCH_DIM_R/81            $354=     16?0                 793:'rtmp_ips'      	;0
1172 624   ECHO/40                   ?0        $354                 ?0                  	;0
1173 625   ECHO/40                   ?0        794:'</a></li>
                                            ' ?0                  	;0
1174 626   GOTO/253                  ?0        ?457                 ?795                	;0
1175 628   ECHO/40                   ?0        796:'</a></li>
											' ?0                  	;0
1176 630   ECHO/40                   ?0        797:'                                        </ul>
                                    </li>
                                    ' ?0                  	;0
1177 632   INIT_FCALL_BY_NAME/59     ?0        ?0                   798:'E589A4bf54A2DAd1'	;2
1178 632   SEND_VAL_EX/116           ?80       800:'adv'            ?1                  	;0
1179 632   SEND_VAL_EX/116           ?96       801:'add_radio'      ?2                  	;0
1180 632   DO_FCALL_BY_NAME/131      $355=     ?0                   ?0                  	;0
1181 632   JMPNZ_EX/47               #356=     $355                 ?1187               	;0	>>1187
1182 632   INIT_FCALL_BY_NAME/59     ?0        ?0                   802:'E589A4bf54A2dad1'	;2
1183 632   SEND_VAL_EX/116           ?80       804:'adv'            ?1                  	;0
1184 632   SEND_VAL_EX/116           ?96       805:'radio'          ?2                  	;0
1185 632   DO_FCALL_BY_NAME/131      $357=     ?0                   ?0                  	;0
1186 632   BOOL/52                   #356=     $357                 ?0                  	;0
1187 632   BOOL_NOT/13               #358=     #356                 ?0                  	;0	<<1181
1188 632   JMPZ/43                   ?0        #358                 ?1190               	;0	>>1190
1189 633   GOTO/253                  ?0        ?1275                ?806                	;0
1190 635   GOTO/253                  ?0        ?1654                ?807                	;0	<<1188
1191 637   FETCH_DIM_R/81            $359=     16?0                 808:'bouquets'      	;0
1192 637   ECHO/40                   ?0        $359                 ?0                  	;0
1193 638   ECHO/40                   ?0        809:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
									' ?0                  	;0
1194 639   INIT_FCALL_BY_NAME/59     ?0        ?0                   810:'E589a4BF54A2dAD1'	;2
1195 639   SEND_VAL_EX/116           ?80       812:'adv'            ?1                  	;0
1196 639   SEND_VAL_EX/116           ?96       813:'add_bouquet'    ?2                  	;0
1197 639   DO_FCALL_BY_NAME/131      $360=     ?0                   ?0                  	;0
1198 639   BOOL_NOT/13               #361=     $360                 ?0                  	;0
1199 639   JMPZ/43                   ?0        #361                 ?1201               	;0	>>1201
1200 640   GOTO/253                  ?0        ?1514                ?814                	;0
1201 642   ECHO/40                   ?0        815:'                                    <li><a href="bouquet">' ?0                  	;0	<<1199
1202 643   FETCH_DIM_R/81            $362=     16?0                 816:'add_bouquet'   	;0
1203 643   ECHO/40                   ?0        $362                 ?0                  	;0
1204 644   GOTO/253                  ?0        ?1513                ?817                	;0
1205 646   ECHO/40                   ?0        818:'        <header id="topnav">
            <div class="navbar-overlay bg-animate' ?0                  	;0
1206 647   INIT_FCALL_BY_NAME/59     ?0        ?0                   819:'strlen'        	;1
1207 647   FETCH_DIM_FUNC_ARG/93     $363=     16?6                 821:'hue'           	;1
1208 647   SEND_VAR_EX/66            ?80       $363                 ?1                  	;0
1209 647   DO_FCALL_BY_NAME/131      $364=     ?0                   ?0                  	;0
1210 647   IS_SMALLER/19             #365=     822:0                $364                	;0
1211 647   JMPZ_EX/46                #365=     #365                 ?1221               	;0	>>1221
1212 647   INIT_FCALL_BY_NAME/59     ?0        ?0                   823:'in_array'      	;2
1213 647   FETCH_DIM_FUNC_ARG/93     $366=     16?6                 825:'hue'           	;1
1214 647   SEND_VAR_EX/66            ?80       $366                 ?1                  	;0
1215 647   INIT_FCALL_BY_NAME/59     ?0        ?0                   826:'array_keys'    	;1
1216 647   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1217 647   DO_FCALL_BY_NAME/131      $367=     ?0                   ?0                  	;0
1218 647   SEND_VAR_NO_REF_EX/50     ?96       $367                 ?2                  	;0
1219 647   DO_FCALL_BY_NAME/131      $368=     ?0                   ?0                  	;0
1220 647   BOOL/52                   #365=     $368                 ?0                  	;0
1221 647   BOOL_NOT/13               #369=     #365                 ?0                  	;0	<<1211
1222 647   JMPZ/43                   ?0        #369                 ?1224               	;0	>>1224
1223 648   GOTO/253                  ?0        ?1227                ?828                	;0
1224 650   FETCH_DIM_R/81            $370=     16?6                 829:'hue'           	;0	<<1222
1225 650   CONCAT/8                  #371=     830:'-'              $370                	;0
1226 650   ECHO/40                   ?0        #371                 ?0                  	;0
1227 652   ECHO/40                   ?0        831:'"></div>
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div class="logo-box">
                        <a href="index" class="logo text-center">
                            <span class="logo-lg' ?0                  	;0
1228 653   GOTO/253                  ?0        ?973                 ?832                	;0
1229 655   INIT_FCALL_BY_NAME/59     ?0        ?0                   833:'E589a4bF54a2dAD1'	;2
1230 655   SEND_VAL_EX/116           ?80       835:'adv'            ?1                  	;0
1231 655   SEND_VAL_EX/116           ?96       836:'add_mag'        ?2                  	;0
1232 655   DO_FCALL_BY_NAME/131      $372=     ?0                   ?0                  	;0
1233 655   BOOL_NOT/13               #373=     $372                 ?0                  	;0
1234 655   JMPZ/43                   ?0        #373                 ?1236               	;0	>>1236
1235 656   GOTO/253                  ?0        ?1240                ?837                	;0
1236 658   ECHO/40                   ?0        838:'                                            <li><a href="mag">' ?0                  	;0	<<1234
1237 659   FETCH_DIM_R/81            $374=     16?0                 839:'add_mag'       	;0
1238 659   ECHO/40                   ?0        $374                 ?0                  	;0
1239 660   ECHO/40                   ?0        840:'</a></li>
                                            ' ?0                  	;0
1240 662   GOTO/253                  ?0        ?1715                ?841                	;0
1241 664   ECHO/40                   ?0        842:'</a></li>
                                            ' ?0                  	;0
1242 666   INIT_FCALL_BY_NAME/59     ?0        ?0                   843:'E589a4bF54a2DaD1'	;2
1243 666   SEND_VAL_EX/116           ?80       845:'adv'            ?1                  	;0
1244 666   SEND_VAL_EX/116           ?96       846:'streams'        ?2                  	;0
1245 666   DO_FCALL_BY_NAME/131      $375=     ?0                   ?0                  	;0
1246 666   BOOL_NOT/13               #376=     $375                 ?0                  	;0
1247 666   JMPZ/43                   ?0        #376                 ?1249               	;0	>>1249
1248 667   GOTO/253                  ?0        ?1313                ?847                	;0
1249 669   ECHO/40                   ?0        848:'                                            <li><a href="created_channels">' ?0                  	;0	<<1247
1250 670   FETCH_DIM_R/81            $377=     16?0                 849:'manage_created_channels'	;0
1251 670   ECHO/40                   ?0        $377                 ?0                  	;0
1252 671   GOTO/253                  ?0        ?1312                ?850                	;0
1253 673   ECHO/40                   ?0        851:'                                            <li><a href="lines">' ?0                  	;0
1254 674   FETCH_DIM_R/81            $378=     16?0                 852:'manage_lines'  	;0
1255 674   ECHO/40                   ?0        $378                 ?0                  	;0
1256 675   ECHO/40                   ?0        853:'</a></li>
                                            ' ?0                  	;0
1257 677   ECHO/40                   ?0        854:'                                        </ul>
                                    </li>
									' ?0                  	;0
1258 678   GOTO/253                  ?0        ?285                 ?855                	;0
1259 680   INIT_FCALL_BY_NAME/59     ?0        ?0                   856:'E589a4bf54a2daD1'	;2
1260 680   SEND_VAL_EX/116           ?80       858:'adv'            ?1                  	;0
1261 680   SEND_VAL_EX/116           ?96       859:'mass_edit_enigmas' ?2                  	;0
1262 680   DO_FCALL_BY_NAME/131      $379=     ?0                   ?0                  	;0
1263 680   BOOL_NOT/13               #380=     $379                 ?0                  	;0
1264 680   JMPZ/43                   ?0        #380                 ?1266               	;0	>>1266
1265 681   GOTO/253                  ?0        ?1270                ?860                	;0
1266 683   ECHO/40                   ?0        861:'                                            <li><a href="enigma_mass">' ?0                  	;0	<<1264
1267 684   FETCH_DIM_R/81            $381=     16?0                 862:'enigma_devices'	;0
1268 684   ECHO/40                   ?0        $381                 ?0                  	;0
1269 685   ECHO/40                   ?0        863:'</a></li>
                                            ' ?0                  	;0
1270 687   GOTO/253                  ?0        ?794                 ?864                	;0
1271 689   FETCH_DIM_R/81            $382=     16?0                 865:'manage_stations'	;0
1272 689   ECHO/40                   ?0        $382                 ?0                  	;0
1273 690   ECHO/40                   ?0        866:'</a></li>
											' ?0                  	;0
1274 692   ECHO/40                   ?0        867:'                                        </ul>
                                    </li>
                                    ' ?0                  	;0
1275 694   GOTO/253                  ?0        ?1747                ?868                	;0
1276 696   INIT_FCALL_BY_NAME/59     ?0        ?0                   869:'e589A4bf54A2DaD1'	;2
1277 696   SEND_VAL_EX/116           ?80       871:'adv'            ?1                  	;0
1278 696   SEND_VAL_EX/116           ?96       872:'block_asns'     ?2                  	;0
1279 696   DO_FCALL_BY_NAME/131      $383=     ?0                   ?0                  	;0
1280 696   BOOL_NOT/13               #384=     $383                 ?0                  	;0
1281 696   JMPZ/43                   ?0        #384                 ?1283               	;0	>>1283
1282 697   GOTO/253                  ?0        ?1284                ?873                	;0
1283 699   ECHO/40                   ?0        874:'                                            <li><a href="asns">Blocked ASN\'s</a></li>
                                            ' ?0                  	;0	<<1281
1284 701   INIT_FCALL_BY_NAME/59     ?0        ?0                   875:'E589A4BF54A2DAd1'	;2
1285 701   SEND_VAL_EX/116           ?80       877:'adv'            ?1                  	;0
1286 701   SEND_VAL_EX/116           ?96       878:'block_ips'      ?2                  	;0
1287 701   DO_FCALL_BY_NAME/131      $385=     ?0                   ?0                  	;0
1288 701   BOOL_NOT/13               #386=     $385                 ?0                  	;0
1289 701   JMPZ/43                   ?0        #386                 ?1291               	;0	>>1291
1290 702   GOTO/253                  ?0        ?306                 ?879                	;0
1291 704   ECHO/40                   ?0        880:'                                            <li><a href="ips">' ?0                  	;0	<<1289
1292 705   GOTO/253                  ?0        ?303                 ?881                	;0
1293 707   ECHO/40                   ?0        882:'                                            <li><a href="line">' ?0                  	;0
1294 708   FETCH_DIM_R/81            $387=     16?0                 883:'add_line'      	;0
1295 708   ECHO/40                   ?0        $387                 ?0                  	;0
1296 709   ECHO/40                   ?0        884:'</a></li>
                                            ' ?0                  	;0
1297 711   INIT_FCALL_BY_NAME/59     ?0        ?0                   885:'E589a4bf54A2dad1'	;2
1298 711   SEND_VAL_EX/116           ?80       887:'adv'            ?1                  	;0
1299 711   SEND_VAL_EX/116           ?96       888:'users'          ?2                  	;0
1300 711   DO_FCALL_BY_NAME/131      $388=     ?0                   ?0                  	;0
1301 711   BOOL_NOT/13               #389=     $388                 ?0                  	;0
1302 711   JMPZ/43                   ?0        #389                 ?1304               	;0	>>1304
1303 712   GOTO/253                  ?0        ?1257                ?889                	;0
1304 714   GOTO/253                  ?0        ?1253                ?890                	;0	<<1302
1305 716   ECHO/40                   ?0        891:'        </header>
		' ?0                  	;0
1306 718   FETCH_DIM_R/81            $390=     16?17                892:'js_navigate'   	;0
1307 718   BOOL_NOT/13               #391=     $390                 ?0                  	;0
1308 718   JMPZ/43                   ?0        #391                 ?1310               	;0	>>1310
1309 719   GOTO/253                  ?0        ?2399                ?893                	;0
1310 721   ECHO/40                   ?0        894:'        <div id="status">
            <div class="spinner"></div>
        </div>
        ' ?0                  	;0	<<1308
1311 722   GOTO/253                  ?0        ?2399                ?895                	;0
1312 724   ECHO/40                   ?0        896:'</a></li>
                                            ' ?0                  	;0
1313 726   ECHO/40                   ?0        897:'                                        </ul>
                                    </li>
                                    ' ?0                  	;0
1314 728   INIT_FCALL_BY_NAME/59     ?0        ?0                   898:'e589A4bf54a2dad1'	;2
1315 728   SEND_VAL_EX/116           ?80       900:'adv'            ?1                  	;0
1316 728   SEND_VAL_EX/116           ?96       901:'add_movie'      ?2                  	;0
1317 728   DO_FCALL_BY_NAME/131      $392=     ?0                   ?0                  	;0
1318 728   JMPNZ_EX/47               #393=     $392                 ?1324               	;0	>>1324
1319 728   INIT_FCALL_BY_NAME/59     ?0        ?0                   902:'E589a4Bf54a2DAd1'	;2
1320 728   SEND_VAL_EX/116           ?80       904:'adv'            ?1                  	;0
1321 728   SEND_VAL_EX/116           ?96       905:'import_movies'  ?2                  	;0
1322 728   DO_FCALL_BY_NAME/131      $394=     ?0                   ?0                  	;0
1323 728   BOOL/52                   #393=     $394                 ?0                  	;0
1324 728   JMPNZ_EX/47               #393=     #393                 ?1330               	;0	>>1330	<<1318
1325 728   INIT_FCALL_BY_NAME/59     ?0        ?0                   906:'E589A4bf54a2DAD1'	;2
1326 728   SEND_VAL_EX/116           ?80       908:'adv'            ?1                  	;0
1327 728   SEND_VAL_EX/116           ?96       909:'movies'         ?2                  	;0
1328 728   DO_FCALL_BY_NAME/131      $395=     ?0                   ?0                  	;0
1329 728   BOOL/52                   #393=     $395                 ?0                  	;0
1330 728   BOOL_NOT/13               #396=     #393                 ?0                  	;0	<<1324
1331 728   JMPZ/43                   ?0        #396                 ?1333               	;0	>>1333
1332 729   GOTO/253                  ?0        ?530                 ?910                	;0
1333 731   GOTO/253                  ?0        ?1734                ?911                	;0	<<1331
1334 734   ECHO/40                   ?0        912:'                                            ' ?0                  	;0
1335 735   INIT_FCALL_BY_NAME/59     ?0        ?0                   913:'E589A4Bf54A2DaD1'	;2
1336 735   SEND_VAL_EX/116           ?80       915:'adv'            ?1                  	;0
1337 735   SEND_VAL_EX/116           ?96       916:'mass_edit_lines' ?2                  	;0
1338 735   DO_FCALL_BY_NAME/131      $397=     ?0                   ?0                  	;0
1339 735   BOOL_NOT/13               #398=     $397                 ?0                  	;0
1340 735   JMPZ/43                   ?0        #398                 ?1342               	;0	>>1342
1341 736   GOTO/253                  ?0        ?2095                ?917                	;0
1342 738   ECHO/40                   ?0        918:'                                            <li><a href="line_mass">' ?0                  	;0	<<1340
1343 739   FETCH_DIM_R/81            $399=     16?0                 919:'lines'         	;0
1344 739   ECHO/40                   ?0        $399                 ?0                  	;0
1345 740   GOTO/253                  ?0        ?2094                ?920                	;0
1346 742   ECHO/40                   ?0        921:'                            <li class="has-submenu">
                                <a href="#"> <i class="fas fa-wrench"></i>' ?0                  	;0
1347 743   FETCH_DIM_R/81            $400=     16?0                 922:'management'    	;0
1348 743   ECHO/40                   ?0        $400                 ?0                  	;0
1349 744   ECHO/40                   ?0        923:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    ' ?0                  	;0
1350 745   INIT_FCALL_BY_NAME/59     ?0        ?0                   924:'e589a4Bf54A2DaD1'	;2
1351 745   SEND_VAL_EX/116           ?80       926:'adv'            ?1                  	;0
1352 745   SEND_VAL_EX/116           ?96       927:'categories'     ?2                  	;0
1353 745   DO_FCALL_BY_NAME/131      $401=     ?0                   ?0                  	;0
1354 745   JMPNZ_EX/47               #402=     $401                 ?1360               	;0	>>1360
1355 745   INIT_FCALL_BY_NAME/59     ?0        ?0                   928:'e589a4BF54A2dad1'	;2
1356 745   SEND_VAL_EX/116           ?80       930:'adv'            ?1                  	;0
1357 745   SEND_VAL_EX/116           ?96       931:'epg'            ?2                  	;0
1358 745   DO_FCALL_BY_NAME/131      $403=     ?0                   ?0                  	;0
1359 745   BOOL/52                   #402=     $403                 ?0                  	;0
1360 745   JMPNZ_EX/47               #402=     #402                 ?1366               	;0	>>1366	<<1354
1361 745   INIT_FCALL_BY_NAME/59     ?0        ?0                   932:'e589A4Bf54A2DAd1'	;2
1362 745   SEND_VAL_EX/116           ?80       934:'adv'            ?1                  	;0
1363 745   SEND_VAL_EX/116           ?96       935:'mng_groups'     ?2                  	;0
1364 745   DO_FCALL_BY_NAME/131      $404=     ?0                   ?0                  	;0
1365 745   BOOL/52                   #402=     $404                 ?0                  	;0
1366 745   JMPNZ_EX/47               #402=     #402                 ?1372               	;0	>>1372	<<1360
1367 745   INIT_FCALL_BY_NAME/59     ?0        ?0                   936:'E589A4bF54a2DAD1'	;2
1368 745   SEND_VAL_EX/116           ?80       938:'adv'            ?1                  	;0
1369 745   SEND_VAL_EX/116           ?96       939:'mng_packages'   ?2                  	;0
1370 745   DO_FCALL_BY_NAME/131      $405=     ?0                   ?0                  	;0
1371 745   BOOL/52                   #402=     $405                 ?0                  	;0
1372 745   JMPNZ_EX/47               #402=     #402                 ?1378               	;0	>>1378	<<1366
1373 745   INIT_FCALL_BY_NAME/59     ?0        ?0                   940:'E589a4BF54a2dAD1'	;2
1374 745   SEND_VAL_EX/116           ?80       942:'adv'            ?1                  	;0
1375 745   SEND_VAL_EX/116           ?96       943:'tprofiles'      ?2                  	;0
1376 745   DO_FCALL_BY_NAME/131      $406=     ?0                   ?0                  	;0
1377 745   BOOL/52                   #402=     $406                 ?0                  	;0
1378 745   JMPNZ_EX/47               #402=     #402                 ?1384               	;0	>>1384	<<1372
1379 745   INIT_FCALL_BY_NAME/59     ?0        ?0                   944:'e589A4Bf54a2Dad1'	;2
1380 745   SEND_VAL_EX/116           ?80       946:'adv'            ?1                  	;0
1381 745   SEND_VAL_EX/116           ?96       947:'folder_watch'   ?2                  	;0
1382 745   DO_FCALL_BY_NAME/131      $407=     ?0                   ?0                  	;0
1383 745   BOOL/52                   #402=     $407                 ?0                  	;0
1384 745   BOOL_NOT/13               #408=     #402                 ?0                  	;0	<<1378
1385 745   JMPZ/43                   ?0        #408                 ?1387               	;0	>>1387
1386 746   GOTO/253                  ?0        ?2360                ?948                	;0
1387 748   ECHO/40                   ?0        949:'                                    <li class="has-submenu">
                                        <a href="#">Service Setup <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0	<<1385
1388 749   GOTO/253                  ?0        ?403                 ?950                	;0
1389 751   ECHO/40                   ?0        951:'                                    <li><a href="live_connections">' ?0                  	;0
1390 752   FETCH_DIM_R/81            $409=     16?0                 952:'live_connections'	;0
1391 752   ECHO/40                   ?0        $409                 ?0                  	;0
1392 753   ECHO/40                   ?0        953:'</a></li>
                                    ' ?0                  	;0
1393 755   ECHO/40                   ?0        954:'                                </ul>
                                ' ?0                  	;0
1394 756   GOTO/253                  ?0        ?776                 ?955                	;0
1395 759   ECHO/40                   ?0        956:' btn-xs waves-effect waves-light no-border"><span id="header_network_up">0</span> <small>Mbps</small> <i class="mdi mdi-arrow-up-thick"></i> &nbsp; <span id="header_network_down">0</span> <small>Mbps</small> <i class="mdi mdi-arrow-down-thick"></i></button>
                                </span>
                            </a>
                        </li>
                    </ul>
                    ' ?0                  	;0
1396 761   ECHO/40                   ?0        957:'                    <!-- Streams, Channels, Movies, Episodes & Radio Stations -->
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_streams" style="display: none;opacity: 80%;">
                        <li class="dropdown notification-list">
                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">
                                <span class="pro-user-name text-white ml-1">
                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_streams_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'start\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-play"></i></button>
                                        <button type="button" onClick="multiAPI(\'stop\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-stop"></i></button>
                                        <button type="button" onClick="multiAPI(\'restart\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-refresh"></i></button>
                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>
                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>
                                    </div>
                                </span>
                            </span>
                        </li>
                    </ul>
                    <!-- TV Series -->
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_series" style="display: none;opacity: 80%;">
                        <li class="dropdown notification-list">
                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">
                                <span class="pro-user-name text-white ml-1">
                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_series_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>
                                    </div>
                                </span>
                            </span>
                        </li>
                    </ul>
                    <!-- Servers -->
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_servers" style="display: none;opacity: 80%;">
                        <li class="dropdown notification-list">
                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">
                                <span class="pro-user-name text-white ml-1">
                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_servers_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'tools\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-creation"></i></button>
                                        <button type="button" onClick="multiAPI(\'restart\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-refresh"></i></button>
                                        <button type="button" onClick="multiAPI(\'start\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-play"></i></button>
                                        <button type="button" onClick="multiAPI(\'stop\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-stop"></i></button>
                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>
                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    &nbsp; <i class="mdi mdi-shield-check-outline text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'enable_proxy\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>
                                        <button type="button" onClick="multiAPI(\'disable_proxy\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>
                                    </div>
                                    &nbsp; <i class="mdi mdi-access-point-network text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>
                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>
                                    </div>
                                </span>
                            </span>
                        </li>
                    </ul>
                    <!-- Proxies -->
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_proxies" style="display: none;opacity: 80%;">
                        <li class="dropdown notification-list">
                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">
                                <span class="pro-user-name text-white ml-1">
                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_proxies_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'tools\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-creation"></i></button>
                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>
                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-trash-can-outline"></i></button>
                                    </div>
                                    &nbsp; <i class="mdi mdi-shield-check-outline text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>
                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>
                                    </div>
                                </span>
                            </span>
                        </li>
                    </ul>
                    <!-- Lines -->
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_lines" style="display: none;opacity: 80%;">
                        <li class="dropdown notification-list">
                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">
                                <span class="pro-user-name text-white ml-1">
                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_lines_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>
                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    &nbsp; <i class="mdi mdi-lock text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'ban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">ban</button>
                                        <button type="button" onClick="multiAPI(\'unban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">unban</button>
                                    </div>
                                    &nbsp; <i class="mdi mdi-power text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>
                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>
                                    </div>
                                </span>
                            </span>
                        </li>
                    </ul>
                    <!-- Enigma Devices -->
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_enigmas" style="display: none;opacity: 80%;">
                        <li class="dropdown notification-list">
                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">
                                <span class="pro-user-name text-white ml-1">
                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_enigmas_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'convert\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="fas fa-retweet"></i></button>
                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>
                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    &nbsp; <i class="mdi mdi-lock text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'ban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">ban</button>
                                        <button type="button" onClick="multiAPI(\'unban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">unban</button>
                                    </div>
                                    &nbsp; <i class="mdi mdi-power text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>
                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>
                                    </div>
                                </span>
                            </span>
                        </li>
                    </ul>
                    <!-- MAG Devices -->
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_mags" style="display: none;opacity: 80%;">
                        <li class="dropdown notification-list">
                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">
                                <span class="pro-user-name text-white ml-1">
                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_mags_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'event\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-message-alert"></i></button>
                                        <button type="button" onClick="multiAPI(\'convert\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="fas fa-retweet"></i></button>
                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>
                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    &nbsp; <i class="mdi mdi-lock text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'ban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">ban</button>
                                        <button type="button" onClick="multiAPI(\'unban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">unban</button>
                                    </div>
                                    &nbsp; <i class="mdi mdi-power text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>
                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>
                                    </div>
                                </span>
                            </span>
                        </li>
                    </ul>
                    <!-- Users -->
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_users" style="display: none;opacity: 80%;">
                        <li class="dropdown notification-list">
                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">
                                <span class="pro-user-name text-white ml-1">
                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_users_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    &nbsp; <i class="mdi mdi-lock text-white"></i> &nbsp; 
                                    <div class="btn-group">
                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>
                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>
                                    </div>
                                </span>
                            </span>
                        </li>
                    </ul>
                    <ul class="list-unstyled topnav-menu float-right mb-0 topnav-custom">
                        <li class="dropdown notification-list">
                            <a class="navbar-toggle nav-link">
                                <div class="lines text-white">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </li>
						' ?0                  	;0
1397 762   FETCH_STATIC_PROP_R/173   $410=     958:'rSettings'      959:'XUI'           	;0
1398 762   FETCH_DIM_R/81            $411=     $410                 961:'enable_search' 	;0
1399 762   BOOL_NOT/13               #412=     $411                 ?0                  	;0
1400 762   JMPZ/43                   ?0        #412                 ?1402               	;0	>>1402
1401 763   GOTO/253                  ?0        ?1702                ?962                	;0
1402 765   GOTO/253                  ?0        ?2219                ?963                	;0	<<1400
1403 767   ECHO/40                   ?0        964:'                        <li class="dropdown notification-list">
                            ' ?0                  	;0
1404 768   IS_SMALLER/19             #413=     965:0                16?2                	;0
1405 768   JMPZ/43                   ?0        #413                 ?1407               	;0	>>1407
1406 769   GOTO/253                  ?0        ?1409                ?966                	;0
1407 771   ECHO/40                   ?0        967:'                            <a class="nav-link waves-effect text-white" href="tickets" role="button">
                            ' ?0                  	;0	<<1405
1408 772   GOTO/253                  ?0        ?966                 ?968                	;0
1409 774   GOTO/253                  ?0        ?965                 ?969                	;0
1410 776   ECHO/40                   ?0        970:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0
1411 777   FETCH_DIM_R/81            $414=     16?0                 971:'logs'          	;0
1412 777   ECHO/40                   ?0        $414                 ?0                  	;0
1413 778   ECHO/40                   ?0        972:' <div class="arrow-down"></div></a>
                                        <ul class="submenu megamenu">
                                            <li>
                                                <ul>
                                                    ' ?0                  	;0
1414 779   INIT_ARRAY/71             #415=     973:'line_activity'  974:'url'           	;14
1415 779   FETCH_DIM_R/81            $416=     16?0                 975:'activity_logs' 	;0
1416 779   ADD_ARRAY_ELEMENT/72      #415=     $416                 976:'title'         	;0
1417 779   ADD_ARRAY_ELEMENT/72      #415=     977:array (
  0 => 'connection_logs',
) 978:'permissions'   	;0
1418 779   INIT_ARRAY/71             #417=     #415                 ?0                  	;68
1419 779   INIT_ARRAY/71             #418=     979:'client_logs'    980:'url'           	;14
1420 779   FETCH_DIM_R/81            $419=     16?0                 981:'client_logs'   	;0
1421 779   ADD_ARRAY_ELEMENT/72      #418=     $419                 982:'title'         	;0
1422 779   ADD_ARRAY_ELEMENT/72      #418=     983:array (
  0 => 'client_request_log',
) 984:'permissions'   	;0
1423 779   ADD_ARRAY_ELEMENT/72      #417=     #418                 ?0                  	;0
1424 779   INIT_ARRAY/71             #420=     985:'credit_logs'    986:'url'           	;14
1425 779   FETCH_DIM_R/81            $421=     16?0                 987:'credit_logs'   	;0
1426 779   ADD_ARRAY_ELEMENT/72      #420=     $421                 988:'title'         	;0
1427 779   ADD_ARRAY_ELEMENT/72      #420=     989:array (
  0 => 'credits_log',
) 990:'permissions'   	;0
1428 779   ADD_ARRAY_ELEMENT/72      #417=     #420                 ?0                  	;0
1429 779   ADD_ARRAY_ELEMENT/72      #417=     991:array (
  'url' => 'queue',
  'title' => 'Encoding Queue',
  'permissions' => 
  array (
    0 => 'streams',
    1 => 'episodes',
    2 => 'series',
  ),
) ?0                  	;0
1430 779   INIT_ARRAY/71             #422=     992:'line_ips'       993:'url'           	;14
1431 779   FETCH_DIM_R/81            $423=     16?0                 994:'ips_per_line'  	;0
1432 779   ADD_ARRAY_ELEMENT/72      #422=     $423                 995:'title'         	;0
1433 779   ADD_ARRAY_ELEMENT/72      #422=     996:array (
  0 => 'connection_logs',
) 997:'permissions'   	;0
1434 779   ADD_ARRAY_ELEMENT/72      #417=     #422                 ?0                  	;0
1435 779   INIT_ARRAY/71             #424=     998:'live_connections' 999:'url'           	;14
1436 779   FETCH_DIM_R/81            $425=     16?0                 1000:'live_connections'	;0
1437 779   ADD_ARRAY_ELEMENT/72      #424=     $425                 1001:'title'        	;0
1438 779   ADD_ARRAY_ELEMENT/72      #424=     1002:array (
  0 => 'live_connections',
) 1003:'permissions'  	;0
1439 779   ADD_ARRAY_ELEMENT/72      #417=     #424                 ?0                  	;0
1440 779   ADD_ARRAY_ELEMENT/72      #417=     1004:array (
  'url' => 'login_logs',
  'title' => 'Login Logs',
  'permissions' => 
  array (
    0 => 'login_logs',
  ),
) ?0                  	;0
1441 779   INIT_ARRAY/71             #426=     1005:'mag_events'    1006:'url'          	;14
1442 779   FETCH_DIM_R/81            $427=     16?0                 1007:'mag_event_logs'	;0
1443 779   ADD_ARRAY_ELEMENT/72      #426=     $427                 1008:'title'        	;0
1444 779   ADD_ARRAY_ELEMENT/72      #426=     1009:array (
  0 => 'manage_events',
) 1010:'permissions'  	;0
1445 779   ADD_ARRAY_ELEMENT/72      #417=     #426                 ?0                  	;0
1446 779   ADD_ARRAY_ELEMENT/72      #417=     1011:array (
  'url' => 'ondemand',
  'title' => 'On-Demand Scanner',
  'permissions' => 
  array (
    0 => 'streams',
  ),
) ?0                  	;0
1447 779   ADD_ARRAY_ELEMENT/72      #417=     1012:array (
  'url' => 'panel_logs',
  'title' => 'Panel Errors',
  'permissions' => 
  array (
    0 => 'panel_logs',
  ),
) ?0                  	;0
1448 779   INIT_ARRAY/71             #428=     1013:'user_logs'     1014:'url'          	;14
1449 779   FETCH_DIM_R/81            $429=     16?0                 1015:'reseller_logs'	;0
1450 779   ADD_ARRAY_ELEMENT/72      #428=     $429                 1016:'title'        	;0
1451 779   ADD_ARRAY_ELEMENT/72      #428=     1017:array (
  0 => 'reg_userlog',
) 1018:'permissions'  	;0
1452 779   ADD_ARRAY_ELEMENT/72      #417=     #428                 ?0                  	;0
1453 779   ADD_ARRAY_ELEMENT/72      #417=     1019:array (
  'url' => 'restream_logs',
  'title' => 'Restream Detection',
  'permissions' => 
  array (
    0 => 'restream_logs',
  ),
) ?0                  	;0
1454 779   INIT_ARRAY/71             #430=     1020:'stream_errors' 1021:'url'          	;14
1455 779   FETCH_DIM_R/81            $431=     16?0                 1022:'stream_errors'	;0
1456 779   ADD_ARRAY_ELEMENT/72      #430=     $431                 1023:'title'        	;0
1457 779   ADD_ARRAY_ELEMENT/72      #430=     1024:array (
  0 => 'stream_errors',
) 1025:'permissions'  	;0
1458 779   ADD_ARRAY_ELEMENT/72      #417=     #430                 ?0                  	;0
1459 779   ADD_ARRAY_ELEMENT/72      #417=     1026:array (
  'url' => 'stream_rank',
  'title' => 'Stream Rank',
  'permissions' => 
  array (
    0 => 'streams',
  ),
) ?0                  	;0
1460 779   ADD_ARRAY_ELEMENT/72      #417=     1027:array (
  'url' => 'mysql_syslog',
  'title' => 'System Logs',
  'permissions' => 
  array (
    0 => 'panel_logs',
  ),
) ?0                  	;0
1461 779   ADD_ARRAY_ELEMENT/72      #417=     1028:array (
  'url' => 'theft_detection',
  'title' => 'VOD Theft Detection',
  'permissions' => 
  array (
    0 => 'movies',
  ),
) ?0                  	;0
1462 779   INIT_ARRAY/71             #432=     1029:'watch_output'  1030:'url'          	;14
1463 779   FETCH_DIM_R/81            $433=     16?0                 1031:'watch_folder_logs'	;0
1464 779   ADD_ARRAY_ELEMENT/72      #432=     $433                 1032:'title'        	;0
1465 779   ADD_ARRAY_ELEMENT/72      #432=     1033:array (
  0 => 'folder_watch',
) 1034:'permissions'  	;0
1466 779   ADD_ARRAY_ELEMENT/72      #417=     #432                 ?0                  	;0
1467 779   ASSIGN/38                 ?406      16?11                #417                	;0
1468 780   ASSIGN/38                 ?407      16?15                1035:array (
)      	;0
1469 781   GOTO/253                  ?0        ?695                 ?1036               	;0
1470 783   ECHO/40                   ?0        1037:'</a></li>
                                            ' ?0                  	;0
1471 785   INIT_FCALL_BY_NAME/59     ?0        ?0                   1038:'e589a4BF54a2DAD1'	;2
1472 785   SEND_VAL_EX/116           ?80       1040:'adv'           ?1                  	;0
1473 785   SEND_VAL_EX/116           ?96       1041:'mass_delete'   ?2                  	;0
1474 785   DO_FCALL_BY_NAME/131      $436=     ?0                   ?0                  	;0
1475 785   BOOL_NOT/13               #437=     $436                 ?0                  	;0
1476 785   JMPZ/43                   ?0        #437                 ?1478               	;0	>>1478
1477 786   GOTO/253                  ?0        ?741                 ?1042               	;0
1478 788   ECHO/40                   ?0        1043:'                                            <li><a href="mass_delete">' ?0                  	;0	<<1476
1479 789   FETCH_DIM_R/81            $438=     16?0                 1044:'mass_delete'  	;0
1480 789   ECHO/40                   ?0        $438                 ?0                  	;0
1481 790   GOTO/253                  ?0        ?740                 ?1045               	;0
1482 792   ECHO/40                   ?0        1046:'</a></li>
											' ?0                  	;0
1483 794   INIT_FCALL_BY_NAME/59     ?0        ?0                   1047:'E589A4Bf54A2DAD1'	;2
1484 794   SEND_VAL_EX/116           ?80       1049:'adv'           ?1                  	;0
1485 794   SEND_VAL_EX/116           ?96       1050:'episodes'      ?2                  	;0
1486 794   DO_FCALL_BY_NAME/131      $439=     ?0                   ?0                  	;0
1487 794   BOOL_NOT/13               #440=     $439                 ?0                  	;0
1488 794   JMPZ/43                   ?0        #440                 ?1490               	;0	>>1490
1489 795   GOTO/253                  ?0        ?1176                ?1051               	;0
1490 797   ECHO/40                   ?0        1052:'                                            <li><a href="episodes">' ?0                  	;0	<<1488
1491 798   FETCH_DIM_R/81            $441=     16?0                 1053:'manage_episodes'	;0
1492 798   ECHO/40                   ?0        $441                 ?0                  	;0
1493 799   GOTO/253                  ?0        ?1175                ?1054               	;0
1494 801   INIT_METHOD_CALL/112      ?0        16?20                1055:'query'        	;3
1495 801   SEND_VAL_EX/116           ?80       1057:'SELECT `tickets`.`id`, `tickets`.`title`, MAX(`tickets_replies`.`date`) AS `date`, `users`.`username` FROM `tickets` LEFT JOIN `tickets_replies` ON `tickets_replies`.`ticket_id` = `tickets`.`id` LEFT JOIN `users` ON `users`.`id` = `tickets`.`member_id` WHERE `tickets`.`status` <> 0 AND `admin_read` = 0 AND `user_read` = 1 AND `member_id` <> ? AND `member_id` IN (SELECT `id` FROM `users` WHERE `owner_id` = ?) GROUP BY `tickets_replies`.`ticket_id` ORDER BY `tickets_replies`.`date` DESC LIMIT 50;' ?1                  	;0
1496 801   FETCH_DIM_FUNC_ARG/93     $442=     16?6                 1058:'id'           	;2
1497 801   SEND_VAR_EX/66            ?96       $442                 ?2                  	;0
1498 801   FETCH_DIM_FUNC_ARG/93     $443=     16?6                 1059:'id'           	;3
1499 801   SEND_VAR_EX/66            ?112      $443                 ?3                  	;0
1500 801   DO_FCALL/60               ?416      ?0                   ?0                  	;0
1501 802   INIT_METHOD_CALL/112      ?0        16?20                1060:'num_rows'     	;0
1502 802   DO_FCALL/60               $445=     ?0                   ?0                  	;0
1503 802   ASSIGN/38                 ?418      16?2                 $445                	;0
1504 803   INIT_METHOD_CALL/112      ?0        16?20                1062:'get_rows'     	;0
1505 803   DO_FCALL/60               $447=     ?0                   ?0                  	;0
1506 803   FE_RESET_R/77             $448=     $447                 ?1511               	;0
1507 803   FE_FETCH_R/78             ?0        $448                 16?21               	;1511	>>1511	<<1510
1508 804   ASSIGN_DIM/147            ?421      16?3                 ?4414262            	;0
1509 804   OP_DATA/137               ?0        16?21                ?0                  	;0
1510 805   JMP/42                    ?0        ?1507                ?0                  	;0	>>1507
1511 805   FE_FREE/127               ?0        $448                 ?0                  	;0	<<1506
1512 809   GOTO/253                  ?0        ?1403                ?1064               	;0
1513 811   ECHO/40                   ?0        1065:'</a></li>
									' ?0                  	;0
1514 813   INIT_FCALL_BY_NAME/59     ?0        ?0                   1066:'E589a4BF54a2DAd1'	;2
1515 813   SEND_VAL_EX/116           ?80       1068:'adv'           ?1                  	;0
1516 813   SEND_VAL_EX/116           ?96       1069:'bouquets'      ?2                  	;0
1517 813   DO_FCALL_BY_NAME/131      $450=     ?0                   ?0                  	;0
1518 813   BOOL_NOT/13               #451=     $450                 ?0                  	;0
1519 813   JMPZ/43                   ?0        #451                 ?1521               	;0	>>1521
1520 814   GOTO/253                  ?0        ?498                 ?1070               	;0
1521 816   ECHO/40                   ?0        1071:'                                    <li><a href="bouquets">' ?0                  	;0	<<1519
1522 817   FETCH_DIM_R/81            $452=     16?0                 1072:'manage_bouquets'	;0
1523 817   ECHO/40                   ?0        $452                 ?0                  	;0
1524 818   GOTO/253                  ?0        ?497                 ?1073               	;0
1525 821   INIT_FCALL_BY_NAME/59     ?0        ?0                   1074:'e589A4BF54A2daD1'	;2
1526 821   SEND_VAL_EX/116           ?80       1076:'adv'           ?1                  	;0
1527 821   SEND_VAL_EX/116           ?96       1077:'manage_e2'     ?2                  	;0
1528 821   DO_FCALL_BY_NAME/131      $453=     ?0                   ?0                  	;0
1529 821   BOOL_NOT/13               #454=     $453                 ?0                  	;0
1530 821   JMPZ/43                   ?0        #454                 ?1532               	;0	>>1532
1531 822   GOTO/253                  ?0        ?1563                ?1078               	;0
1532 824   ECHO/40                   ?0        1079:'                                            <li><a href="enigmas">' ?0                  	;0	<<1530
1533 825   FETCH_DIM_R/81            $455=     16?0                 1080:'manage_enigma_devices'	;0
1534 825   ECHO/40                   ?0        $455                 ?0                  	;0
1535 826   ECHO/40                   ?0        1081:'</a></li>
                                            ' ?0                  	;0
1536 827   GOTO/253                  ?0        ?1563                ?1082               	;0
1537 829   FETCH_DIM_R/81            $456=     16?0                 1083:'series'       	;0
1538 829   ECHO/40                   ?0        $456                 ?0                  	;0
1539 830   ECHO/40                   ?0        1084:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0
1540 831   INIT_FCALL_BY_NAME/59     ?0        ?0                   1085:'e589a4BF54A2dAD1'	;2
1541 831   SEND_VAL_EX/116           ?80       1087:'adv'           ?1                  	;0
1542 831   SEND_VAL_EX/116           ?96       1088:'add_series'    ?2                  	;0
1543 831   DO_FCALL_BY_NAME/131      $457=     ?0                   ?0                  	;0
1544 831   BOOL_NOT/13               #458=     $457                 ?0                  	;0
1545 831   JMPZ/43                   ?0        #458                 ?1547               	;0	>>1547
1546 832   GOTO/253                  ?0        ?1128                ?1089               	;0
1547 834   ECHO/40                   ?0        1090:'                                            <li><a href="serie">' ?0                  	;0	<<1545
1548 835   FETCH_DIM_R/81            $459=     16?0                 1091:'add_series'   	;0
1549 835   ECHO/40                   ?0        $459                 ?0                  	;0
1550 836   GOTO/253                  ?0        ?1127                ?1092               	;0
1551 838   ECHO/40                   ?0        1093:'</a></li>
                                            ' ?0                  	;0
1552 840   INIT_FCALL_BY_NAME/59     ?0        ?0                   1094:'e589a4bF54A2Dad1'	;2
1553 840   SEND_VAL_EX/116           ?80       1096:'adv'           ?1                  	;0
1554 840   SEND_VAL_EX/116           ?96       1097:'fingerprint'   ?2                  	;0
1555 840   DO_FCALL_BY_NAME/131      $460=     ?0                   ?0                  	;0
1556 840   BOOL_NOT/13               #461=     $460                 ?0                  	;0
1557 840   JMPZ/43                   ?0        #461                 ?1559               	;0	>>1559
1558 841   GOTO/253                  ?0        ?1471                ?1098               	;0
1559 843   ECHO/40                   ?0        1099:'                                            <li><a href="fingerprint">' ?0                  	;0	<<1557
1560 844   FETCH_DIM_R/81            $462=     16?0                 1100:'fingerprint'  	;0
1561 844   ECHO/40                   ?0        $462                 ?0                  	;0
1562 845   GOTO/253                  ?0        ?1470                ?1101               	;0
1563 848   ECHO/40                   ?0        1102:'                                        </ul>
                                    </li>
                                    ' ?0                  	;0
1564 850   ECHO/40                   ?0        1103:'                                </ul>
                            </li>
							' ?0                  	;0
1565 852   GOTO/253                  ?0        ?563                 ?1104               	;0
1566 854   FETCH_DIM_R/81            $463=     16?0                 1105:'blocked_uas'  	;0
1567 854   ECHO/40                   ?0        $463                 ?0                  	;0
1568 855   ECHO/40                   ?0        1106:'</a></li>
                                            ' ?0                  	;0
1569 857   INIT_FCALL_BY_NAME/59     ?0        ?0                   1107:'e589A4BF54A2DaD1'	;2
1570 857   SEND_VAL_EX/116           ?80       1109:'adv'           ?1                  	;0
1571 857   SEND_VAL_EX/116           ?96       1110:'add_hmac'      ?2                  	;0
1572 857   DO_FCALL_BY_NAME/131      $464=     ?0                   ?0                  	;0
1573 857   BOOL_NOT/13               #465=     $464                 ?0                  	;0
1574 857   JMPZ/43                   ?0        #465                 ?1576               	;0	>>1576
1575 858   GOTO/253                  ?0        ?1163                ?1111               	;0
1576 860   ECHO/40                   ?0        1112:'                                            <li><a href="hmacs">HMAC Keys</a></li>
                                            ' ?0                  	;0	<<1574
1577 861   GOTO/253                  ?0        ?1163                ?1113               	;0
1578 863   ECHO/40                   ?0        1114:'</a></li>
                                            ' ?0                  	;0
1579 865   INIT_FCALL_BY_NAME/59     ?0        ?0                   1115:'e589A4Bf54A2dAd1'	;2
1580 865   SEND_VAL_EX/116           ?80       1117:'adv'           ?1                  	;0
1581 865   SEND_VAL_EX/116           ?96       1118:'rtmp'          ?2                  	;0
1582 865   DO_FCALL_BY_NAME/131      $466=     ?0                   ?0                  	;0
1583 865   BOOL_NOT/13               #467=     $466                 ?0                  	;0
1584 865   JMPZ/43                   ?0        #467                 ?1586               	;0	>>1586
1585 866   GOTO/253                  ?0        ?1587                ?1119               	;0
1586 868   ECHO/40                   ?0        1120:'                                            <li><a href="rtmp_monitor">RTMP Monitor</a></li>
                                            ' ?0                  	;0	<<1584
1587 870   GOTO/253                  ?0        ?551                 ?1121               	;0
1588 872   ASSIGN/38                 ?440      16?22                1122:array (
)      	;0
1589 873   INIT_METHOD_CALL/112      ?0        16?20                1123:'query'        	;2
1590 873   SEND_VAL_EX/116           ?80       1125:'SELECT `id` FROM `users` WHERE `owner_id` = ?;' ?1                  	;0
1591 873   FETCH_DIM_FUNC_ARG/93     $469=     16?6                 1126:'id'           	;2
1592 873   SEND_VAR_EX/66            ?96       $469                 ?2                  	;0
1593 873   DO_FCALL/60               ?442      ?0                   ?0                  	;0
1594 874   INIT_METHOD_CALL/112      ?0        16?20                1127:'get_rows'     	;0
1595 874   DO_FCALL/60               $471=     ?0                   ?0                  	;0
1596 874   FE_RESET_R/77             $472=     $471                 ?1602               	;0
1597 874   FE_FETCH_R/78             ?0        $472                 16?21               	;1602	>>1602	<<1601
1598 875   FETCH_DIM_R/81            $474=     16?21                1129:'id'           	;0
1599 875   ASSIGN_DIM/147            ?445      16?22                ?4414262            	;0
1600 875   OP_DATA/137               ?0        $474                 ?0                  	;0
1601 876   JMP/42                    ?0        ?1597                ?0                  	;0	>>1597
1602 876   FE_FREE/127               ?0        $472                 ?0                  	;0	<<1596
1603 879   INIT_FCALL_BY_NAME/59     ?0        ?0                   1130:'count'        	;1
1604 879   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
1605 879   DO_FCALL_BY_NAME/131      $475=     ?0                   ?0                  	;0
1606 879   IS_SMALLER/19             #476=     1132:0               $475                	;0
1607 879   BOOL_NOT/13               #477=     #476                 ?0                  	;0
1608 879   JMPZ/43                   ?0        #477                 ?1610               	;0	>>1610
1609 880   GOTO/253                  ?0        ?1512                ?1133               	;0
1610 882   GOTO/253                  ?0        ?1494                ?1134               	;0	<<1608
1611 885   ECHO/40                   ?0        1135:'">
                                <i class="mdi mdi-wifi-strength-off noti-icon"></i>
                            </a>
                        </li>
                        ' ?0                  	;0
1612 887   GOTO/253                  ?0        ?1795                ?1136               	;0
1613 889   GOTO/253                  ?0        ?1139                ?1137               	;0
1614 892   ECHO/40                   ?0        1138:'                                            ' ?0                  	;0
1615 893   INIT_FCALL_BY_NAME/59     ?0        ?0                   1139:'E589a4bf54A2Dad1'	;2
1616 893   SEND_VAL_EX/116           ?80       1141:'adv'           ?1                  	;0
1617 893   SEND_VAL_EX/116           ?96       1142:'mass_edit_streams' ?2                  	;0
1618 893   DO_FCALL_BY_NAME/131      $478=     ?0                   ?0                  	;0
1619 893   BOOL_NOT/13               #479=     $478                 ?0                  	;0
1620 893   JMPZ/43                   ?0        #479                 ?1622               	;0	>>1622
1621 894   GOTO/253                  ?0        ?354                 ?1143               	;0
1622 896   ECHO/40                   ?0        1144:'                                            <li><a href="stream_mass">' ?0                  	;0	<<1620
1623 897   FETCH_DIM_R/81            $480=     16?0                 1145:'streams'      	;0
1624 897   ECHO/40                   ?0        $480                 ?0                  	;0
1625 898   GOTO/253                  ?0        ?353                 ?1146               	;0
1626 901   INIT_FCALL_BY_NAME/59     ?0        ?0                   1147:'e589A4bF54a2DaD1'	;2
1627 901   SEND_VAL_EX/116           ?80       1149:'adv'           ?1                  	;0
1628 901   SEND_VAL_EX/116           ?96       1150:'movies'        ?2                  	;0
1629 901   DO_FCALL_BY_NAME/131      $481=     ?0                   ?0                  	;0
1630 901   BOOL_NOT/13               #482=     $481                 ?0                  	;0
1631 901   JMPZ/43                   ?0        #482                 ?1633               	;0	>>1633
1632 902   GOTO/253                  ?0        ?529                 ?1151               	;0
1633 904   ECHO/40                   ?0        1152:'                                            <li><a href="movies">' ?0                  	;0	<<1631
1634 905   FETCH_DIM_R/81            $483=     16?0                 1153:'manage_movies'	;0
1635 905   ECHO/40                   ?0        $483                 ?0                  	;0
1636 906   ECHO/40                   ?0        1154:'</a></li>
											' ?0                  	;0
1637 907   GOTO/253                  ?0        ?529                 ?1155               	;0
1638 910   FETCH_DIM_R/81            $484=     16?17                1156:'show_tickets' 	;0
1639 910   BOOL_NOT/13               #485=     $484                 ?0                  	;0
1640 910   JMPZ_EX/46                #485=     #485                 ?1646               	;0	>>1646
1641 910   INIT_FCALL_BY_NAME/59     ?0        ?0                   1157:'E589A4bF54A2dAd1'	;2
1642 910   SEND_VAL_EX/116           ?80       1159:'adv'           ?1                  	;0
1643 910   SEND_VAL_EX/116           ?96       1160:'manage_tickets' ?2                  	;0
1644 910   DO_FCALL_BY_NAME/131      $486=     ?0                   ?0                  	;0
1645 910   BOOL/52                   #485=     $486                 ?0                  	;0
1646 910   BOOL_NOT/13               #487=     #485                 ?0                  	;0	<<1640
1647 910   JMPZ/43                   ?0        #487                 ?1649               	;0	>>1649
1648 911   GOTO/253                  ?0        ?737                 ?1161               	;0
1649 913   ECHO/40                   ?0        1162:'                                    <li><a href="tickets">' ?0                  	;0	<<1647
1650 914   FETCH_DIM_R/81            $488=     16?0                 1163:'tickets'      	;0
1651 914   ECHO/40                   ?0        $488                 ?0                  	;0
1652 915   ECHO/40                   ?0        1164:'</a></li>
                                    ' ?0                  	;0
1653 916   GOTO/253                  ?0        ?737                 ?1165               	;0
1654 918   ECHO/40                   ?0        1166:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0
1655 919   FETCH_DIM_R/81            $489=     16?0                 1167:'stations'     	;0
1656 919   ECHO/40                   ?0        $489                 ?0                  	;0
1657 920   ECHO/40                   ?0        1168:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0
1658 921   INIT_FCALL_BY_NAME/59     ?0        ?0                   1169:'e589A4BF54A2DAD1'	;2
1659 921   SEND_VAL_EX/116           ?80       1171:'adv'           ?1                  	;0
1660 921   SEND_VAL_EX/116           ?96       1172:'add_radio'     ?2                  	;0
1661 921   DO_FCALL_BY_NAME/131      $490=     ?0                   ?0                  	;0
1662 921   BOOL_NOT/13               #491=     $490                 ?0                  	;0
1663 921   JMPZ/43                   ?0        #491                 ?1665               	;0	>>1665
1664 922   GOTO/253                  ?0        ?767                 ?1173               	;0
1665 924   ECHO/40                   ?0        1174:'                                            <li><a href="radio">' ?0                  	;0	<<1663
1666 925   GOTO/253                  ?0        ?764                 ?1175               	;0
1667 927   ECHO/40                   ?0        1176:'<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>' ?0                  	;0
1668 928   FETCH_DIM_R/81            $492=     16?17                1177:'server_name'  	;0
1669 928   JMP_SET/152               #493=     $492                 ?1671               	;0
1670 928   QM_ASSIGN/22              #493=     1178:'XUI'           ?0                  	;0
1671 928   ECHO/40                   ?0        #493                 ?0                  	;0
1672 929   ECHO/40                   ?0        1179:' '             ?0                  	;0
1673 930   ISSET_ISEMPTY_CV/197      #494=     16?23                ?0                  	;33554432
1674 930   BOOL_NOT/13               #495=     #494                 ?0                  	;0
1675 930   JMPZ/43                   ?0        #495                 ?1677               	;0	>>1677
1676 931   GOTO/253                  ?0        ?415                 ?1180               	;0
1677 933   CONCAT/8                  #496=     1181:' | '           16?23               	;0	<<1675
1678 933   ECHO/40                   ?0        #496                 ?0                  	;0
1679 934   GOTO/253                  ?0        ?415                 ?1182               	;0
1680 936   INIT_FCALL_BY_NAME/59     ?0        ?0                   1183:'strlen'       	;1
1681 936   FETCH_DIM_FUNC_ARG/93     $497=     16?6                 1185:'hue'          	;1
1682 936   SEND_VAR_EX/66            ?80       $497                 ?1                  	;0
1683 936   DO_FCALL_BY_NAME/131      $498=     ?0                   ?0                  	;0
1684 936   IS_SMALLER/19             #499=     1186:0               $498                	;0
1685 936   JMPZ_EX/46                #499=     #499                 ?1695               	;0	>>1695
1686 936   INIT_FCALL_BY_NAME/59     ?0        ?0                   1187:'in_array'     	;2
1687 936   FETCH_DIM_FUNC_ARG/93     $500=     16?6                 1189:'hue'          	;1
1688 936   SEND_VAR_EX/66            ?80       $500                 ?1                  	;0
1689 936   INIT_FCALL_BY_NAME/59     ?0        ?0                   1190:'array_keys'   	;1
1690 936   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1691 936   DO_FCALL_BY_NAME/131      $501=     ?0                   ?0                  	;0
1692 936   SEND_VAR_NO_REF_EX/50     ?96       $501                 ?2                  	;0
1693 936   DO_FCALL_BY_NAME/131      $502=     ?0                   ?0                  	;0
1694 936   BOOL/52                   #499=     $502                 ?0                  	;0
1695 936   BOOL_NOT/13               #503=     #499                 ?0                  	;0	<<1685
1696 936   JMPZ/43                   ?0        #503                 ?1698               	;0	>>1698
1697 937   GOTO/253                  ?0        ?1701                ?1192               	;0
1698 939   FETCH_DIM_R/81            $504=     16?6                 1193:'hue'          	;0	<<1696
1699 939   CONCAT/8                  #505=     1194:'-'             $504                	;0
1700 939   ECHO/40                   ?0        #505                 ?0                  	;0
1701 941   ECHO/40                   ?0        1195:'" data-toggle="select2"></select>
                                </div>
                            </div>
                        </li>
						' ?0                  	;0
1702 943   GOTO/253                  ?0        ?2081                ?1196               	;0
1703 945   ISSET_ISEMPTY_CV/197      #506=     16?24                ?0                  	;33554432
1704 945   BOOL_NOT/13               #507=     #506                 ?0                  	;0
1705 945   JMPZ/43                   ?0        #507                 ?1707               	;0	>>1707
1706 946   GOTO/253                  ?0        ?1708                ?1197               	;0
1707 948   ECHO/40                   ?0        16?24                ?0                  	;0	<<1705
1708 950   ECHO/40                   ?0        1198:'    </head>
    <body>
		' ?0                  	;0
1709 951   JMPZ/43                   ?0        16?25                ?1711               	;0	>>1711
1710 952   GOTO/253                  ?0        ?1306                ?1199               	;0
1711 954   GOTO/253                  ?0        ?1205                ?1200               	;0	<<1709
1712 957   ECHO/40                   ?0        1201:'                                </div>
                                <a href="tickets" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View Tickets
                                    <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>
                        ' ?0                  	;0
1713 959   ECHO/40                   ?0        1202:'                    </ul>
                    ' ?0                  	;0
1714 961   GOTO/253                  ?0        ?434                 ?1203               	;0
1715 963   INIT_FCALL_BY_NAME/59     ?0        ?0                   1204:'e589a4Bf54a2DAd1'	;2
1716 963   SEND_VAL_EX/116           ?80       1206:'adv'           ?1                  	;0
1717 963   SEND_VAL_EX/116           ?96       1207:'manage_mag'    ?2                  	;0
1718 963   DO_FCALL_BY_NAME/131      $508=     ?0                   ?0                  	;0
1719 963   BOOL_NOT/13               #509=     $508                 ?0                  	;0
1720 963   JMPZ/43                   ?0        #509                 ?1722               	;0	>>1722
1721 964   GOTO/253                  ?0        ?1726                ?1208               	;0
1722 966   ECHO/40                   ?0        1209:'                                            <li><a href="mags">' ?0                  	;0	<<1720
1723 967   FETCH_DIM_R/81            $510=     16?0                 1210:'manage_mag_devices'	;0
1724 967   ECHO/40                   ?0        $510                 ?0                  	;0
1725 968   ECHO/40                   ?0        1211:'</a></li>
                                            ' ?0                  	;0
1726 970   GOTO/253                  ?0        ?255                 ?1212               	;0
1727 972   BOOL_NOT/13               #511=     16?9                 ?0                  	;0
1728 972   JMPZ/43                   ?0        #511                 ?1730               	;0	>>1730
1729 973   GOTO/253                  ?0        ?1731                ?1213               	;0
1730 975   ECHO/40                   ?0        1214:'        .dataTables_wrapper {
            overflow-x: auto !important;
        }
        ' ?0                  	;0	<<1728
1731 977   ECHO/40                   ?0        1215:'        </style>
        ' ?0                  	;0
1732 978   GOTO/253                  ?0        ?254                 ?1216               	;0
1733 979   GOTO/253                  ?0        ?245                 ?1217               	;0
1734 981   ECHO/40                   ?0        1218:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0
1735 982   FETCH_DIM_R/81            $512=     16?0                 1219:'movies'       	;0
1736 982   ECHO/40                   ?0        $512                 ?0                  	;0
1737 983   ECHO/40                   ?0        1220:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0
1738 984   INIT_FCALL_BY_NAME/59     ?0        ?0                   1221:'e589a4BF54a2DAD1'	;2
1739 984   SEND_VAL_EX/116           ?80       1223:'adv'           ?1                  	;0
1740 984   SEND_VAL_EX/116           ?96       1224:'add_movie'     ?2                  	;0
1741 984   DO_FCALL_BY_NAME/131      $513=     ?0                   ?0                  	;0
1742 984   BOOL_NOT/13               #514=     $513                 ?0                  	;0
1743 984   JMPZ/43                   ?0        #514                 ?1745               	;0	>>1745
1744 985   GOTO/253                  ?0        ?2381                ?1225               	;0
1745 987   ECHO/40                   ?0        1226:'                                            <li><a href="movie">' ?0                  	;0	<<1743
1746 988   GOTO/253                  ?0        ?2378                ?1227               	;0
1747 990   INIT_FCALL_BY_NAME/59     ?0        ?0                   1228:'e589A4bf54a2dAD1'	;2
1748 990   SEND_VAL_EX/116           ?80       1230:'adv'           ?1                  	;0
1749 990   SEND_VAL_EX/116           ?96       1231:'movies'        ?2                  	;0
1750 990   DO_FCALL_BY_NAME/131      $515=     ?0                   ?0                  	;0
1751 990   BOOL_NOT/13               #516=     $515                 ?0                  	;0
1752 990   JMPZ/43                   ?0        #516                 ?1754               	;0	>>1754
1753 991   GOTO/253                  ?0        ?1755                ?1232               	;0
1754 993   ECHO/40                   ?0        1233:'                                    <li><a href="archive">Recordings</a></li>
                                    ' ?0                  	;0	<<1752
1755 995   BOOL_NOT/13               #517=     16?9                 ?0                  	;0
1756 995   JMPZ_EX/46                #517=     #517                 ?1762               	;0	>>1762
1757 995   INIT_FCALL_BY_NAME/59     ?0        ?0                   1234:'E589a4bf54A2Dad1'	;2
1758 995   SEND_VAL_EX/116           ?80       1236:'adv'           ?1                  	;0
1759 995   SEND_VAL_EX/116           ?96       1237:'streams'       ?2                  	;0
1760 995   DO_FCALL_BY_NAME/131      $518=     ?0                   ?0                  	;0
1761 995   BOOL/52                   #517=     $518                 ?0                  	;0
1762 995   BOOL_NOT/13               #519=     #517                 ?0                  	;0	<<1756
1763 995   JMPZ/43                   ?0        #519                 ?1765               	;0	>>1765
1764 996   GOTO/253                  ?0        ?2274                ?1238               	;0
1765 998   ECHO/40                   ?0        1239:'                                    <li><a href="epg_view">TV Guide</a></li>
                                    ' ?0                  	;0	<<1763
1766 999   GOTO/253                  ?0        ?2274                ?1240               	;0
1767 1001  FETCH_DIM_R/81            $520=     16?6                 1241:'hue'          	;0
1768 1001  CONCAT/8                  #521=     1242:'-'             $520                	;0
1769 1001  ECHO/40                   ?0        #521                 ?0                  	;0
1770 1003  ECHO/40                   ?0        1243:' btn-xs waves-effect waves-light no-border"><span id="header_streams_up">0</span> <i class="mdi mdi-arrow-up-thick"></i> &nbsp; <span id="header_streams_down">0</span> <i class="mdi mdi-arrow-down-thick"></i></button>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./dashboard" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name text-white ml-1">
                                    <i class="fe-trending-up text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate' ?0                  	;0
1771 1004  INIT_FCALL_BY_NAME/59     ?0        ?0                   1244:'strlen'       	;1
1772 1004  FETCH_DIM_FUNC_ARG/93     $522=     16?6                 1246:'hue'          	;1
1773 1004  SEND_VAR_EX/66            ?80       $522                 ?1                  	;0
1774 1004  DO_FCALL_BY_NAME/131      $523=     ?0                   ?0                  	;0
1775 1004  IS_SMALLER/19             #524=     1247:0               $523                	;0
1776 1004  JMPZ_EX/46                #524=     #524                 ?1786               	;0	>>1786
1777 1004  INIT_FCALL_BY_NAME/59     ?0        ?0                   1248:'in_array'     	;2
1778 1004  FETCH_DIM_FUNC_ARG/93     $525=     16?6                 1250:'hue'          	;1
1779 1004  SEND_VAR_EX/66            ?80       $525                 ?1                  	;0
1780 1004  INIT_FCALL_BY_NAME/59     ?0        ?0                   1251:'array_keys'   	;1
1781 1004  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1782 1004  DO_FCALL_BY_NAME/131      $526=     ?0                   ?0                  	;0
1783 1004  SEND_VAR_NO_REF_EX/50     ?96       $526                 ?2                  	;0
1784 1004  DO_FCALL_BY_NAME/131      $527=     ?0                   ?0                  	;0
1785 1004  BOOL/52                   #524=     $527                 ?0                  	;0
1786 1004  BOOL_NOT/13               #528=     #524                 ?0                  	;0	<<1776
1787 1004  JMPZ/43                   ?0        #528                 ?1789               	;0	>>1789
1788 1005  GOTO/253                  ?0        ?1395                ?1253               	;0
1789 1007  FETCH_DIM_R/81            $529=     16?6                 1254:'hue'          	;0	<<1787
1790 1007  CONCAT/8                  #530=     1255:'-'             $529                	;0
1791 1007  ECHO/40                   ?0        #530                 ?0                  	;0
1792 1008  GOTO/253                  ?0        ?1395                ?1256               	;0
1793 1010  ECHO/40                   ?0        1257:'text-white'    ?0                  	;0
1794 1012  ECHO/40                   ?0        1258:'">
                                <i class="mdi mdi-wifi-strength-off noti-icon"></i>
                            </a>
                        </li>
                        ' ?0                  	;0
1795 1014  BOOL_NOT/13               #531=     16?9                 ?0                  	;0
1796 1014  JMPZ_EX/46                #531=     #531                 ?1801               	;0	>>1801
1797 1014  INIT_FCALL_BY_NAME/59     ?0        ?0                   1259:'is_array'     	;1
1798 1014  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
1799 1014  DO_FCALL_BY_NAME/131      $532=     ?0                   ?0                  	;0
1800 1014  BOOL/52                   #531=     $532                 ?0                  	;0
1801 1014  JMPZ_EX/46                #531=     #531                 ?1804               	;0	>>1804	<<1796
1802 1014  FETCH_DIM_R/81            $533=     16?18                1261:'version'      	;0
1803 1014  BOOL/52                   #531=     $533                 ?0                  	;0
1804 1014  JMPZ_EX/46                #531=     #531                 ?1833               	;0	>>1833	<<1801
1805 1014  INIT_FCALL_BY_NAME/59     ?0        ?0                   1262:'version_compare'	;2
1806 1014  FETCH_DIM_FUNC_ARG/93     $534=     16?18                1264:'version'      	;1
1807 1014  SEND_VAR_EX/66            ?80       $534                 ?1                  	;0
1808 1014  FETCH_CONSTANT/99         #535=     ?0                   1265:'XUI_VERSION'  	;16
1809 1014  SEND_VAL_EX/116           ?96       #535                 ?2                  	;0
1810 1014  DO_FCALL_BY_NAME/131      $536=     ?0                   ?0                  	;0
1811 1014  IS_SMALLER/19             #537=     1268:0               $536                	;0
1812 1014  JMPNZ_EX/47               #537=     #537                 ?1832               	;0	>>1832
1813 1014  INIT_FCALL_BY_NAME/59     ?0        ?0                   1269:'version_compare'	;2
1814 1014  FETCH_DIM_FUNC_ARG/93     $538=     16?18                1271:'version'      	;1
1815 1014  SEND_VAR_EX/66            ?80       $538                 ?1                  	;0
1816 1014  FETCH_CONSTANT/99         #539=     ?0                   1272:'XUI_VERSION'  	;16
1817 1014  SEND_VAL_EX/116           ?96       #539                 ?2                  	;0
1818 1014  DO_FCALL_BY_NAME/131      $540=     ?0                   ?0                  	;0
1819 1014  IS_EQUAL/17               #541=     $540                 1275:0              	;0
1820 1014  JMPZ_EX/46                #541=     #541                 ?1831               	;0	>>1831
1821 1014  INIT_FCALL_BY_NAME/59     ?0        ?0                   1276:'intval'       	;1
1822 1014  FETCH_DIM_FUNC_ARG/93     $542=     16?18                1278:'revision'     	;1
1823 1014  SEND_VAR_EX/66            ?80       $542                 ?1                  	;0
1824 1014  DO_FCALL_BY_NAME/131      $543=     ?0                   ?0                  	;0
1825 1014  INIT_FCALL_BY_NAME/59     ?0        ?0                   1279:'intval'       	;1
1826 1014  FETCH_CONSTANT/99         #544=     ?0                   1281:'XUI_REVISION' 	;16
1827 1014  SEND_VAL_EX/116           ?80       #544                 ?1                  	;0
1828 1014  DO_FCALL_BY_NAME/131      $545=     ?0                   ?0                  	;0
1829 1014  IS_SMALLER/19             #546=     $545                 $543                	;0
1830 1014  BOOL/52                   #541=     #546                 ?0                  	;0
1831 1014  BOOL/52                   #537=     #541                 ?0                  	;0	<<1820
1832 1014  BOOL/52                   #531=     #537                 ?0                  	;0	<<1812
1833 1014  BOOL_NOT/13               #547=     #531                 ?0                  	;0	<<1804
1834 1014  JMPZ/43                   ?0        #547                 ?1836               	;0	>>1836
1835 1015  GOTO/253                  ?0        ?875                 ?1284               	;0
1836 1017  GOTO/253                  ?0        ?237                 ?1285               	;0	<<1834
1837 1019  ECHO/40                   ?0        1286:'</a></li>
									' ?0                  	;0
1838 1021  ECHO/40                   ?0        1287:'                                </ul>
                            </li>
                            ' ?0                  	;0
1839 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1288:'e589a4Bf54A2DAd1'	;2
1840 1023  SEND_VAL_EX/116           ?80       1290:'adv'           ?1                  	;0
1841 1023  SEND_VAL_EX/116           ?96       1291:'streams'       ?2                  	;0
1842 1023  DO_FCALL_BY_NAME/131      $548=     ?0                   ?0                  	;0
1843 1023  JMPNZ_EX/47               #549=     $548                 ?1849               	;0	>>1849
1844 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1292:'E589A4Bf54a2DAd1'	;2
1845 1023  SEND_VAL_EX/116           ?80       1294:'adv'           ?1                  	;0
1846 1023  SEND_VAL_EX/116           ?96       1295:'episodes'      ?2                  	;0
1847 1023  DO_FCALL_BY_NAME/131      $550=     ?0                   ?0                  	;0
1848 1023  BOOL/52                   #549=     $550                 ?0                  	;0
1849 1023  JMPNZ_EX/47               #549=     #549                 ?1855               	;0	>>1855	<<1843
1850 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1296:'e589a4bf54a2daD1'	;2
1851 1023  SEND_VAL_EX/116           ?80       1298:'adv'           ?1                  	;0
1852 1023  SEND_VAL_EX/116           ?96       1299:'series'        ?2                  	;0
1853 1023  DO_FCALL_BY_NAME/131      $551=     ?0                   ?0                  	;0
1854 1023  BOOL/52                   #549=     $551                 ?0                  	;0
1855 1023  JMPNZ_EX/47               #549=     #549                 ?1861               	;0	>>1861	<<1849
1856 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1300:'e589a4bf54A2Dad1'	;2
1857 1023  SEND_VAL_EX/116           ?80       1302:'adv'           ?1                  	;0
1858 1023  SEND_VAL_EX/116           ?96       1303:'categories'    ?2                  	;0
1859 1023  DO_FCALL_BY_NAME/131      $552=     ?0                   ?0                  	;0
1860 1023  BOOL/52                   #549=     $552                 ?0                  	;0
1861 1023  JMPNZ_EX/47               #549=     #549                 ?1867               	;0	>>1867	<<1855
1862 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1304:'e589a4BF54A2Dad1'	;2
1863 1023  SEND_VAL_EX/116           ?80       1306:'adv'           ?1                  	;0
1864 1023  SEND_VAL_EX/116           ?96       1307:'epg'           ?2                  	;0
1865 1023  DO_FCALL_BY_NAME/131      $553=     ?0                   ?0                  	;0
1866 1023  BOOL/52                   #549=     $553                 ?0                  	;0
1867 1023  JMPNZ_EX/47               #549=     #549                 ?1873               	;0	>>1873	<<1861
1868 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1308:'e589a4BF54A2DaD1'	;2
1869 1023  SEND_VAL_EX/116           ?80       1310:'adv'           ?1                  	;0
1870 1023  SEND_VAL_EX/116           ?96       1311:'mng_groups'    ?2                  	;0
1871 1023  DO_FCALL_BY_NAME/131      $554=     ?0                   ?0                  	;0
1872 1023  BOOL/52                   #549=     $554                 ?0                  	;0
1873 1023  JMPNZ_EX/47               #549=     #549                 ?1879               	;0	>>1879	<<1867
1874 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1312:'e589A4Bf54A2Dad1'	;2
1875 1023  SEND_VAL_EX/116           ?80       1314:'adv'           ?1                  	;0
1876 1023  SEND_VAL_EX/116           ?96       1315:'mng_packages'  ?2                  	;0
1877 1023  DO_FCALL_BY_NAME/131      $555=     ?0                   ?0                  	;0
1878 1023  BOOL/52                   #549=     $555                 ?0                  	;0
1879 1023  JMPNZ_EX/47               #549=     #549                 ?1885               	;0	>>1885	<<1873
1880 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1316:'E589a4Bf54a2Dad1'	;2
1881 1023  SEND_VAL_EX/116           ?80       1318:'adv'           ?1                  	;0
1882 1023  SEND_VAL_EX/116           ?96       1319:'tprofiles'     ?2                  	;0
1883 1023  DO_FCALL_BY_NAME/131      $556=     ?0                   ?0                  	;0
1884 1023  BOOL/52                   #549=     $556                 ?0                  	;0
1885 1023  JMPNZ_EX/47               #549=     #549                 ?1891               	;0	>>1891	<<1879
1886 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1320:'E589A4bF54A2dAd1'	;2
1887 1023  SEND_VAL_EX/116           ?80       1322:'adv'           ?1                  	;0
1888 1023  SEND_VAL_EX/116           ?96       1323:'folder_watch'  ?2                  	;0
1889 1023  DO_FCALL_BY_NAME/131      $557=     ?0                   ?0                  	;0
1890 1023  BOOL/52                   #549=     $557                 ?0                  	;0
1891 1023  JMPNZ_EX/47               #549=     #549                 ?1897               	;0	>>1897	<<1885
1892 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1324:'E589a4bf54A2dad1'	;2
1893 1023  SEND_VAL_EX/116           ?80       1326:'adv'           ?1                  	;0
1894 1023  SEND_VAL_EX/116           ?96       1327:'add_code'      ?2                  	;0
1895 1023  DO_FCALL_BY_NAME/131      $558=     ?0                   ?0                  	;0
1896 1023  BOOL/52                   #549=     $558                 ?0                  	;0
1897 1023  JMPNZ_EX/47               #549=     #549                 ?1903               	;0	>>1903	<<1891
1898 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1328:'E589A4bf54a2dAD1'	;2
1899 1023  SEND_VAL_EX/116           ?80       1330:'adv'           ?1                  	;0
1900 1023  SEND_VAL_EX/116           ?96       1331:'block_asns'    ?2                  	;0
1901 1023  DO_FCALL_BY_NAME/131      $559=     ?0                   ?0                  	;0
1902 1023  BOOL/52                   #549=     $559                 ?0                  	;0
1903 1023  JMPNZ_EX/47               #549=     #549                 ?1909               	;0	>>1909	<<1897
1904 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1332:'e589A4bF54a2dAd1'	;2
1905 1023  SEND_VAL_EX/116           ?80       1334:'adv'           ?1                  	;0
1906 1023  SEND_VAL_EX/116           ?96       1335:'block_ips'     ?2                  	;0
1907 1023  DO_FCALL_BY_NAME/131      $560=     ?0                   ?0                  	;0
1908 1023  BOOL/52                   #549=     $560                 ?0                  	;0
1909 1023  JMPNZ_EX/47               #549=     #549                 ?1915               	;0	>>1915	<<1903
1910 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1336:'E589a4BF54a2DAd1'	;2
1911 1023  SEND_VAL_EX/116           ?80       1338:'adv'           ?1                  	;0
1912 1023  SEND_VAL_EX/116           ?96       1339:'block_isps'    ?2                  	;0
1913 1023  DO_FCALL_BY_NAME/131      $561=     ?0                   ?0                  	;0
1914 1023  BOOL/52                   #549=     $561                 ?0                  	;0
1915 1023  JMPNZ_EX/47               #549=     #549                 ?1921               	;0	>>1921	<<1909
1916 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1340:'e589A4BF54A2dAD1'	;2
1917 1023  SEND_VAL_EX/116           ?80       1342:'adv'           ?1                  	;0
1918 1023  SEND_VAL_EX/116           ?96       1343:'block_uas'     ?2                  	;0
1919 1023  DO_FCALL_BY_NAME/131      $562=     ?0                   ?0                  	;0
1920 1023  BOOL/52                   #549=     $562                 ?0                  	;0
1921 1023  JMPNZ_EX/47               #549=     #549                 ?1927               	;0	>>1927	<<1915
1922 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1344:'E589A4bF54a2DAd1'	;2
1923 1023  SEND_VAL_EX/116           ?80       1346:'adv'           ?1                  	;0
1924 1023  SEND_VAL_EX/116           ?96       1347:'rtmp'          ?2                  	;0
1925 1023  DO_FCALL_BY_NAME/131      $563=     ?0                   ?0                  	;0
1926 1023  BOOL/52                   #549=     $563                 ?0                  	;0
1927 1023  JMPNZ_EX/47               #549=     #549                 ?1933               	;0	>>1933	<<1921
1928 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1348:'e589a4bF54a2dad1'	;2
1929 1023  SEND_VAL_EX/116           ?80       1350:'adv'           ?1                  	;0
1930 1023  SEND_VAL_EX/116           ?96       1351:'channel_order' ?2                  	;0
1931 1023  DO_FCALL_BY_NAME/131      $564=     ?0                   ?0                  	;0
1932 1023  BOOL/52                   #549=     $564                 ?0                  	;0
1933 1023  JMPNZ_EX/47               #549=     #549                 ?1939               	;0	>>1939	<<1927
1934 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1352:'E589A4bf54A2Dad1'	;2
1935 1023  SEND_VAL_EX/116           ?80       1354:'adv'           ?1                  	;0
1936 1023  SEND_VAL_EX/116           ?96       1355:'fingerprint'   ?2                  	;0
1937 1023  DO_FCALL_BY_NAME/131      $565=     ?0                   ?0                  	;0
1938 1023  BOOL/52                   #549=     $565                 ?0                  	;0
1939 1023  JMPNZ_EX/47               #549=     #549                 ?1945               	;0	>>1945	<<1933
1940 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1356:'E589A4Bf54a2DaD1'	;2
1941 1023  SEND_VAL_EX/116           ?80       1358:'adv'           ?1                  	;0
1942 1023  SEND_VAL_EX/116           ?96       1359:'mass_delete'   ?2                  	;0
1943 1023  DO_FCALL_BY_NAME/131      $566=     ?0                   ?0                  	;0
1944 1023  BOOL/52                   #549=     $566                 ?0                  	;0
1945 1023  JMPNZ_EX/47               #549=     #549                 ?1951               	;0	>>1951	<<1939
1946 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1360:'E589a4BF54a2DAd1'	;2
1947 1023  SEND_VAL_EX/116           ?80       1362:'adv'           ?1                  	;0
1948 1023  SEND_VAL_EX/116           ?96       1363:'stream_tools'  ?2                  	;0
1949 1023  DO_FCALL_BY_NAME/131      $567=     ?0                   ?0                  	;0
1950 1023  BOOL/52                   #549=     $567                 ?0                  	;0
1951 1023  JMPNZ_EX/47               #549=     #549                 ?1957               	;0	>>1957	<<1945
1952 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1364:'e589A4BF54a2DAD1'	;2
1953 1023  SEND_VAL_EX/116           ?80       1366:'adv'           ?1                  	;0
1954 1023  SEND_VAL_EX/116           ?96       1367:'mass_edit_enigmas' ?2                  	;0
1955 1023  DO_FCALL_BY_NAME/131      $568=     ?0                   ?0                  	;0
1956 1023  BOOL/52                   #549=     $568                 ?0                  	;0
1957 1023  JMPNZ_EX/47               #549=     #549                 ?1963               	;0	>>1963	<<1951
1958 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1368:'E589A4BF54A2daD1'	;2
1959 1023  SEND_VAL_EX/116           ?80       1370:'adv'           ?1                  	;0
1960 1023  SEND_VAL_EX/116           ?96       1371:'mass_edit_lines' ?2                  	;0
1961 1023  DO_FCALL_BY_NAME/131      $569=     ?0                   ?0                  	;0
1962 1023  BOOL/52                   #549=     $569                 ?0                  	;0
1963 1023  JMPNZ_EX/47               #549=     #549                 ?1969               	;0	>>1969	<<1957
1964 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1372:'E589a4Bf54A2Dad1'	;2
1965 1023  SEND_VAL_EX/116           ?80       1374:'adv'           ?1                  	;0
1966 1023  SEND_VAL_EX/116           ?96       1375:'mass_edit_mags' ?2                  	;0
1967 1023  DO_FCALL_BY_NAME/131      $570=     ?0                   ?0                  	;0
1968 1023  BOOL/52                   #549=     $570                 ?0                  	;0
1969 1023  JMPNZ_EX/47               #549=     #549                 ?1975               	;0	>>1975	<<1963
1970 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1376:'E589A4BF54a2DaD1'	;2
1971 1023  SEND_VAL_EX/116           ?80       1378:'adv'           ?1                  	;0
1972 1023  SEND_VAL_EX/116           ?96       1379:'mass_sedits_vod' ?2                  	;0
1973 1023  DO_FCALL_BY_NAME/131      $571=     ?0                   ?0                  	;0
1974 1023  BOOL/52                   #549=     $571                 ?0                  	;0
1975 1023  JMPNZ_EX/47               #549=     #549                 ?1981               	;0	>>1981	<<1969
1976 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1380:'e589A4bF54a2DaD1'	;2
1977 1023  SEND_VAL_EX/116           ?80       1382:'adv'           ?1                  	;0
1978 1023  SEND_VAL_EX/116           ?96       1383:'mass_sedits'   ?2                  	;0
1979 1023  DO_FCALL_BY_NAME/131      $572=     ?0                   ?0                  	;0
1980 1023  BOOL/52                   #549=     $572                 ?0                  	;0
1981 1023  JMPNZ_EX/47               #549=     #549                 ?1987               	;0	>>1987	<<1975
1982 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1384:'E589A4BF54A2Dad1'	;2
1983 1023  SEND_VAL_EX/116           ?80       1386:'adv'           ?1                  	;0
1984 1023  SEND_VAL_EX/116           ?96       1387:'mass_edit_radio' ?2                  	;0
1985 1023  DO_FCALL_BY_NAME/131      $573=     ?0                   ?0                  	;0
1986 1023  BOOL/52                   #549=     $573                 ?0                  	;0
1987 1023  JMPNZ_EX/47               #549=     #549                 ?1993               	;0	>>1993	<<1981
1988 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1388:'E589a4bf54a2daD1'	;2
1989 1023  SEND_VAL_EX/116           ?80       1390:'adv'           ?1                  	;0
1990 1023  SEND_VAL_EX/116           ?96       1391:'mass_edit_streams' ?2                  	;0
1991 1023  DO_FCALL_BY_NAME/131      $574=     ?0                   ?0                  	;0
1992 1023  BOOL/52                   #549=     $574                 ?0                  	;0
1993 1023  JMPNZ_EX/47               #549=     #549                 ?1999               	;0	>>1999	<<1987
1994 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1392:'E589A4bf54A2dAd1'	;2
1995 1023  SEND_VAL_EX/116           ?80       1394:'adv'           ?1                  	;0
1996 1023  SEND_VAL_EX/116           ?96       1395:'mass_edit_users' ?2                  	;0
1997 1023  DO_FCALL_BY_NAME/131      $575=     ?0                   ?0                  	;0
1998 1023  BOOL/52                   #549=     $575                 ?0                  	;0
1999 1023  JMPNZ_EX/47               #549=     #549                 ?2005               	;0	>>2005	<<1993
2000 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1396:'e589a4bf54A2DAd1'	;2
2001 1023  SEND_VAL_EX/116           ?80       1398:'adv'           ?1                  	;0
2002 1023  SEND_VAL_EX/116           ?96       1399:'connection_logs' ?2                  	;0
2003 1023  DO_FCALL_BY_NAME/131      $576=     ?0                   ?0                  	;0
2004 1023  BOOL/52                   #549=     $576                 ?0                  	;0
2005 1023  JMPNZ_EX/47               #549=     #549                 ?2011               	;0	>>2011	<<1999
2006 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1400:'E589a4bF54a2daD1'	;2
2007 1023  SEND_VAL_EX/116           ?80       1402:'adv'           ?1                  	;0
2008 1023  SEND_VAL_EX/116           ?96       1403:'client_request_log' ?2                  	;0
2009 1023  DO_FCALL_BY_NAME/131      $577=     ?0                   ?0                  	;0
2010 1023  BOOL/52                   #549=     $577                 ?0                  	;0
2011 1023  JMPNZ_EX/47               #549=     #549                 ?2017               	;0	>>2017	<<2005
2012 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1404:'E589A4BF54A2daD1'	;2
2013 1023  SEND_VAL_EX/116           ?80       1406:'adv'           ?1                  	;0
2014 1023  SEND_VAL_EX/116           ?96       1407:'login_logs'    ?2                  	;0
2015 1023  DO_FCALL_BY_NAME/131      $578=     ?0                   ?0                  	;0
2016 1023  BOOL/52                   #549=     $578                 ?0                  	;0
2017 1023  JMPNZ_EX/47               #549=     #549                 ?2023               	;0	>>2023	<<2011
2018 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1408:'E589a4bf54A2Dad1'	;2
2019 1023  SEND_VAL_EX/116           ?80       1410:'adv'           ?1                  	;0
2020 1023  SEND_VAL_EX/116           ?96       1411:'panel_logs'    ?2                  	;0
2021 1023  DO_FCALL_BY_NAME/131      $579=     ?0                   ?0                  	;0
2022 1023  BOOL/52                   #549=     $579                 ?0                  	;0
2023 1023  JMPNZ_EX/47               #549=     #549                 ?2029               	;0	>>2029	<<2017
2024 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1412:'e589A4Bf54A2daD1'	;2
2025 1023  SEND_VAL_EX/116           ?80       1414:'adv'           ?1                  	;0
2026 1023  SEND_VAL_EX/116           ?96       1415:'credits_log'   ?2                  	;0
2027 1023  DO_FCALL_BY_NAME/131      $580=     ?0                   ?0                  	;0
2028 1023  BOOL/52                   #549=     $580                 ?0                  	;0
2029 1023  JMPNZ_EX/47               #549=     #549                 ?2035               	;0	>>2035	<<2023
2030 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1416:'e589a4bF54a2dAd1'	;2
2031 1023  SEND_VAL_EX/116           ?80       1418:'adv'           ?1                  	;0
2032 1023  SEND_VAL_EX/116           ?96       1419:'live_connections' ?2                  	;0
2033 1023  DO_FCALL_BY_NAME/131      $581=     ?0                   ?0                  	;0
2034 1023  BOOL/52                   #549=     $581                 ?0                  	;0
2035 1023  JMPNZ_EX/47               #549=     #549                 ?2041               	;0	>>2041	<<2029
2036 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1420:'e589A4bf54a2daD1'	;2
2037 1023  SEND_VAL_EX/116           ?80       1422:'adv'           ?1                  	;0
2038 1023  SEND_VAL_EX/116           ?96       1423:'manage_events' ?2                  	;0
2039 1023  DO_FCALL_BY_NAME/131      $582=     ?0                   ?0                  	;0
2040 1023  BOOL/52                   #549=     $582                 ?0                  	;0
2041 1023  JMPNZ_EX/47               #549=     #549                 ?2047               	;0	>>2047	<<2035
2042 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1424:'E589a4BF54a2DAD1'	;2
2043 1023  SEND_VAL_EX/116           ?80       1426:'adv'           ?1                  	;0
2044 1023  SEND_VAL_EX/116           ?96       1427:'reg_userlog'   ?2                  	;0
2045 1023  DO_FCALL_BY_NAME/131      $583=     ?0                   ?0                  	;0
2046 1023  BOOL/52                   #549=     $583                 ?0                  	;0
2047 1023  JMPNZ_EX/47               #549=     #549                 ?2053               	;0	>>2053	<<2041
2048 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1428:'e589A4bF54A2DAd1'	;2
2049 1023  SEND_VAL_EX/116           ?80       1430:'adv'           ?1                  	;0
2050 1023  SEND_VAL_EX/116           ?96       1431:'stream_errors' ?2                  	;0
2051 1023  DO_FCALL_BY_NAME/131      $584=     ?0                   ?0                  	;0
2052 1023  BOOL/52                   #549=     $584                 ?0                  	;0
2053 1023  JMPNZ_EX/47               #549=     #549                 ?2059               	;0	>>2059	<<2047
2054 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1432:'e589a4BF54A2DaD1'	;2
2055 1023  SEND_VAL_EX/116           ?80       1434:'adv'           ?1                  	;0
2056 1023  SEND_VAL_EX/116           ?96       1435:'folder_watch'  ?2                  	;0
2057 1023  DO_FCALL_BY_NAME/131      $585=     ?0                   ?0                  	;0
2058 1023  BOOL/52                   #549=     $585                 ?0                  	;0
2059 1023  JMPNZ_EX/47               #549=     #549                 ?2065               	;0	>>2065	<<2053
2060 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1436:'e589A4BF54a2DAD1'	;2
2061 1023  SEND_VAL_EX/116           ?80       1438:'adv'           ?1                  	;0
2062 1023  SEND_VAL_EX/116           ?96       1439:'add_hmac'      ?2                  	;0
2063 1023  DO_FCALL_BY_NAME/131      $586=     ?0                   ?0                  	;0
2064 1023  BOOL/52                   #549=     $586                 ?0                  	;0
2065 1023  JMPNZ_EX/47               #549=     #549                 ?2071               	;0	>>2071	<<2059
2066 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1440:'E589A4Bf54A2dad1'	;2
2067 1023  SEND_VAL_EX/116           ?80       1442:'adv'           ?1                  	;0
2068 1023  SEND_VAL_EX/116           ?96       1443:'quick_tools'   ?2                  	;0
2069 1023  DO_FCALL_BY_NAME/131      $587=     ?0                   ?0                  	;0
2070 1023  BOOL/52                   #549=     $587                 ?0                  	;0
2071 1023  JMPNZ_EX/47               #549=     #549                 ?2077               	;0	>>2077	<<2065
2072 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1444:'e589A4bF54A2dAd1'	;2
2073 1023  SEND_VAL_EX/116           ?80       1446:'adv'           ?1                  	;0
2074 1023  SEND_VAL_EX/116           ?96       1447:'manage_tickets' ?2                  	;0
2075 1023  DO_FCALL_BY_NAME/131      $588=     ?0                   ?0                  	;0
2076 1023  BOOL/52                   #549=     $588                 ?0                  	;0
2077 1023  BOOL_NOT/13               #589=     #549                 ?0                  	;0	<<2071
2078 1023  JMPZ/43                   ?0        #589                 ?2080               	;0	>>2080
2079 1024  GOTO/253                  ?0        ?738                 ?1448               	;0
2080 1026  GOTO/253                  ?0        ?1346                ?1449               	;0	<<2078
2081 1028  ECHO/40                   ?0        1450:'                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name text-white ml-1">
                                    ' ?0                  	;0
2082 1029  FETCH_DIM_R/81            $590=     16?6                 1451:'username'     	;0
2083 1029  ECHO/40                   ?0        $590                 ?0                  	;0
2084 1030  ECHO/40                   ?0        1452:' <i class="mdi mdi-chevron-down"></i> 
                                </span>
                                <span class="pro-user-name-mob nav-link text-white waves-effect">
                                    <i class="fe-user noti-icon"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <a href="edit_profile" class="dropdown-item notify-item">
                                    <span>User Profile</span>
                                </a>
                                ' ?0                  	;0
2085 1031  INIT_FCALL_BY_NAME/59     ?0        ?0                   1453:'e589a4bf54a2daD1'	;2
2086 1031  SEND_VAL_EX/116           ?80       1455:'adv'           ?1                  	;0
2087 1031  SEND_VAL_EX/116           ?96       1456:'settings'      ?2                  	;0
2088 1031  DO_FCALL_BY_NAME/131      $591=     ?0                   ?0                  	;0
2089 1031  BOOL_NOT/13               #592=     $591                 ?0                  	;0
2090 1031  JMPZ/43                   ?0        #592                 ?2092               	;0	>>2092
2091 1032  GOTO/253                  ?0        ?1147                ?1457               	;0
2092 1034  ECHO/40                   ?0        1458:'                                <a href="settings" class="dropdown-item notify-item">
                                    <span>General Settings</span>
                                </a>
                                ' ?0                  	;0	<<2090
2093 1035  GOTO/253                  ?0        ?1147                ?1459               	;0
2094 1037  ECHO/40                   ?0        1460:'</a></li>
                                            ' ?0                  	;0
2095 1039  ECHO/40                   ?0        1461:'                                            ' ?0                  	;0
2096 1040  INIT_FCALL_BY_NAME/59     ?0        ?0                   1462:'E589A4bf54A2DAD1'	;2
2097 1040  SEND_VAL_EX/116           ?80       1464:'adv'           ?1                  	;0
2098 1040  SEND_VAL_EX/116           ?96       1465:'mass_edit_mags' ?2                  	;0
2099 1040  DO_FCALL_BY_NAME/131      $593=     ?0                   ?0                  	;0
2100 1040  BOOL_NOT/13               #594=     $593                 ?0                  	;0
2101 1040  JMPZ/43                   ?0        #594                 ?2103               	;0	>>2103
2102 1041  GOTO/253                  ?0        ?1093                ?1466               	;0
2103 1043  ECHO/40                   ?0        1467:'                                            <li><a href="mag_mass">' ?0                  	;0	<<2101
2104 1044  GOTO/253                  ?0        ?1090                ?1468               	;0
2105 1046  ECHO/40                   ?0        1469:'">
                                <i class="mdi mdi-lock noti-icon"></i>
                            </a>
                        </li>
						' ?0                  	;0
2106 1048  JMPZ_EX/46                #595=     16?26                ?2112               	;0	>>2112
2107 1048  INIT_FCALL_BY_NAME/59     ?0        ?0                   1470:'E589a4BF54A2Dad1'	;2
2108 1048  SEND_VAL_EX/116           ?80       1472:'adv'           ?1                  	;0
2109 1048  SEND_VAL_EX/116           ?96       1473:'servers'       ?2                  	;0
2110 1048  DO_FCALL_BY_NAME/131      $596=     ?0                   ?0                  	;0
2111 1048  BOOL/52                   #595=     $596                 ?0                  	;0
2112 1048  JMPZ/43                   ?0        #595                 ?2114               	;0	>>2114	<<2106
2113 1049  GOTO/253                  ?0        ?1613                ?1474               	;0
2114 1051  JMPZ_EX/46                #597=     16?27                ?2120               	;0	>>2120	<<2112
2115 1051  INIT_FCALL_BY_NAME/59     ?0        ?0                   1475:'E589A4bf54A2DaD1'	;2
2116 1051  SEND_VAL_EX/116           ?80       1477:'adv'           ?1                  	;0
2117 1051  SEND_VAL_EX/116           ?96       1478:'servers'       ?2                  	;0
2118 1051  DO_FCALL_BY_NAME/131      $598=     ?0                   ?0                  	;0
2119 1051  BOOL/52                   #597=     $598                 ?0                  	;0
2120 1051  BOOL_NOT/13               #599=     #597                 ?0                  	;0	<<2114
2121 1051  JMPZ/43                   ?0        #599                 ?2123               	;0	>>2123
2122 1052  GOTO/253                  ?0        ?1612                ?1479               	;0
2123 1054  ECHO/40                   ?0        1480:'                        <li class="notification-list">
                            <a href="proxies" class="nav-link right-bar-toggle waves-effect ' ?0                  	;0	<<2121
2124 1055  GOTO/253                  ?0        ?1004                ?1481               	;0
2125 1057  ECHO/40                   ?0        1482:'</a></li>
                                            ' ?0                  	;0
2126 1059  ECHO/40                   ?0        1483:'                                        </ul>
                                    </li>
                                    ' ?0                  	;0
2127 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1484:'E589a4Bf54A2DAd1'	;2
2128 1061  SEND_VAL_EX/116           ?80       1486:'adv'           ?1                  	;0
2129 1061  SEND_VAL_EX/116           ?96       1487:'movies'        ?2                  	;0
2130 1061  DO_FCALL_BY_NAME/131      $600=     ?0                   ?0                  	;0
2131 1061  JMPNZ_EX/47               #601=     $600                 ?2137               	;0	>>2137
2132 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1488:'e589A4bF54a2DAd1'	;2
2133 1061  SEND_VAL_EX/116           ?80       1490:'adv'           ?1                  	;0
2134 1061  SEND_VAL_EX/116           ?96       1491:'streams'       ?2                  	;0
2135 1061  DO_FCALL_BY_NAME/131      $602=     ?0                   ?0                  	;0
2136 1061  BOOL/52                   #601=     $602                 ?0                  	;0
2137 1061  JMPNZ_EX/47               #601=     #601                 ?2143               	;0	>>2143	<<2131
2138 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1492:'E589A4bF54a2dad1'	;2
2139 1061  SEND_VAL_EX/116           ?80       1494:'adv'           ?1                  	;0
2140 1061  SEND_VAL_EX/116           ?96       1495:'connection_logs' ?2                  	;0
2141 1061  DO_FCALL_BY_NAME/131      $603=     ?0                   ?0                  	;0
2142 1061  BOOL/52                   #601=     $603                 ?0                  	;0
2143 1061  JMPNZ_EX/47               #601=     #601                 ?2149               	;0	>>2149	<<2137
2144 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1496:'E589A4BF54a2daD1'	;2
2145 1061  SEND_VAL_EX/116           ?80       1498:'adv'           ?1                  	;0
2146 1061  SEND_VAL_EX/116           ?96       1499:'client_request_log' ?2                  	;0
2147 1061  DO_FCALL_BY_NAME/131      $604=     ?0                   ?0                  	;0
2148 1061  BOOL/52                   #601=     $604                 ?0                  	;0
2149 1061  JMPNZ_EX/47               #601=     #601                 ?2155               	;0	>>2155	<<2143
2150 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1500:'e589a4BF54A2DAd1'	;2
2151 1061  SEND_VAL_EX/116           ?80       1502:'adv'           ?1                  	;0
2152 1061  SEND_VAL_EX/116           ?96       1503:'login_logs'    ?2                  	;0
2153 1061  DO_FCALL_BY_NAME/131      $605=     ?0                   ?0                  	;0
2154 1061  BOOL/52                   #601=     $605                 ?0                  	;0
2155 1061  JMPNZ_EX/47               #601=     #601                 ?2161               	;0	>>2161	<<2149
2156 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1504:'E589a4bF54A2DaD1'	;2
2157 1061  SEND_VAL_EX/116           ?80       1506:'adv'           ?1                  	;0
2158 1061  SEND_VAL_EX/116           ?96       1507:'panel_logs'    ?2                  	;0
2159 1061  DO_FCALL_BY_NAME/131      $606=     ?0                   ?0                  	;0
2160 1061  BOOL/52                   #601=     $606                 ?0                  	;0
2161 1061  JMPNZ_EX/47               #601=     #601                 ?2167               	;0	>>2167	<<2155
2162 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1508:'E589a4BF54A2Dad1'	;2
2163 1061  SEND_VAL_EX/116           ?80       1510:'adv'           ?1                  	;0
2164 1061  SEND_VAL_EX/116           ?96       1511:'credits_log'   ?2                  	;0
2165 1061  DO_FCALL_BY_NAME/131      $607=     ?0                   ?0                  	;0
2166 1061  BOOL/52                   #601=     $607                 ?0                  	;0
2167 1061  JMPNZ_EX/47               #601=     #601                 ?2173               	;0	>>2173	<<2161
2168 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1512:'e589a4Bf54a2dad1'	;2
2169 1061  SEND_VAL_EX/116           ?80       1514:'adv'           ?1                  	;0
2170 1061  SEND_VAL_EX/116           ?96       1515:'live_connections' ?2                  	;0
2171 1061  DO_FCALL_BY_NAME/131      $608=     ?0                   ?0                  	;0
2172 1061  BOOL/52                   #601=     $608                 ?0                  	;0
2173 1061  JMPNZ_EX/47               #601=     #601                 ?2179               	;0	>>2179	<<2167
2174 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1516:'e589A4bf54A2DAd1'	;2
2175 1061  SEND_VAL_EX/116           ?80       1518:'adv'           ?1                  	;0
2176 1061  SEND_VAL_EX/116           ?96       1519:'manage_events' ?2                  	;0
2177 1061  DO_FCALL_BY_NAME/131      $609=     ?0                   ?0                  	;0
2178 1061  BOOL/52                   #601=     $609                 ?0                  	;0
2179 1061  JMPNZ_EX/47               #601=     #601                 ?2185               	;0	>>2185	<<2173
2180 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1520:'e589A4BF54a2dAd1'	;2
2181 1061  SEND_VAL_EX/116           ?80       1522:'adv'           ?1                  	;0
2182 1061  SEND_VAL_EX/116           ?96       1523:'reg_userlog'   ?2                  	;0
2183 1061  DO_FCALL_BY_NAME/131      $610=     ?0                   ?0                  	;0
2184 1061  BOOL/52                   #601=     $610                 ?0                  	;0
2185 1061  JMPNZ_EX/47               #601=     #601                 ?2191               	;0	>>2191	<<2179
2186 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1524:'E589a4BF54a2dAD1'	;2
2187 1061  SEND_VAL_EX/116           ?80       1526:'adv'           ?1                  	;0
2188 1061  SEND_VAL_EX/116           ?96       1527:'streams'       ?2                  	;0
2189 1061  DO_FCALL_BY_NAME/131      $611=     ?0                   ?0                  	;0
2190 1061  BOOL/52                   #601=     $611                 ?0                  	;0
2191 1061  JMPNZ_EX/47               #601=     #601                 ?2197               	;0	>>2197	<<2185
2192 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1528:'E589a4BF54A2dAD1'	;2
2193 1061  SEND_VAL_EX/116           ?80       1530:'adv'           ?1                  	;0
2194 1061  SEND_VAL_EX/116           ?96       1531:'episodes'      ?2                  	;0
2195 1061  DO_FCALL_BY_NAME/131      $612=     ?0                   ?0                  	;0
2196 1061  BOOL/52                   #601=     $612                 ?0                  	;0
2197 1061  JMPNZ_EX/47               #601=     #601                 ?2203               	;0	>>2203	<<2191
2198 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1532:'e589a4BF54A2dad1'	;2
2199 1061  SEND_VAL_EX/116           ?80       1534:'adv'           ?1                  	;0
2200 1061  SEND_VAL_EX/116           ?96       1535:'series'        ?2                  	;0
2201 1061  DO_FCALL_BY_NAME/131      $613=     ?0                   ?0                  	;0
2202 1061  BOOL/52                   #601=     $613                 ?0                  	;0
2203 1061  JMPNZ_EX/47               #601=     #601                 ?2209               	;0	>>2209	<<2197
2204 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1536:'e589A4Bf54a2daD1'	;2
2205 1061  SEND_VAL_EX/116           ?80       1538:'adv'           ?1                  	;0
2206 1061  SEND_VAL_EX/116           ?96       1539:'stream_errors' ?2                  	;0
2207 1061  DO_FCALL_BY_NAME/131      $614=     ?0                   ?0                  	;0
2208 1061  BOOL/52                   #601=     $614                 ?0                  	;0
2209 1061  JMPNZ_EX/47               #601=     #601                 ?2215               	;0	>>2215	<<2203
2210 1061  INIT_FCALL_BY_NAME/59     ?0        ?0                   1540:'E589a4BF54A2dAd1'	;2
2211 1061  SEND_VAL_EX/116           ?80       1542:'adv'           ?1                  	;0
2212 1061  SEND_VAL_EX/116           ?96       1543:'folder_watch'  ?2                  	;0
2213 1061  DO_FCALL_BY_NAME/131      $615=     ?0                   ?0                  	;0
2214 1061  BOOL/52                   #601=     $615                 ?0                  	;0
2215 1061  BOOL_NOT/13               #616=     #601                 ?0                  	;0	<<2209
2216 1061  JMPZ/43                   ?0        #616                 ?2218               	;0	>>2218
2217 1062  GOTO/253                  ?0        ?1638                ?1544               	;0
2218 1064  GOTO/253                  ?0        ?1410                ?1545               	;0	<<2216
2219 1066  ECHO/40                   ?0        1546:'						<li class="dropdown notification-list" id="search-mobile">
                            <a href="javascript:void(0);" class="search-toggle pad-15 nav-link right-bar-toggle waves-effect text-white">
                                <i class="mdi mdi-magnify noti-icon"></i>
                            </a>
                        </li>
						<li class="d-none d-sm-block" id="topnav-search">
                            <div class="app-search" data-theme="bg-animate' ?0                  	;0
2220 1067  INIT_FCALL_BY_NAME/59     ?0        ?0                   1547:'strlen'       	;1
2221 1067  FETCH_DIM_FUNC_ARG/93     $617=     16?6                 1549:'hue'          	;1
2222 1067  SEND_VAR_EX/66            ?80       $617                 ?1                  	;0
2223 1067  DO_FCALL_BY_NAME/131      $618=     ?0                   ?0                  	;0
2224 1067  IS_SMALLER/19             #619=     1550:0               $618                	;0
2225 1067  JMPZ_EX/46                #619=     #619                 ?2235               	;0	>>2235
2226 1067  INIT_FCALL_BY_NAME/59     ?0        ?0                   1551:'in_array'     	;2
2227 1067  FETCH_DIM_FUNC_ARG/93     $620=     16?6                 1553:'hue'          	;1
2228 1067  SEND_VAR_EX/66            ?80       $620                 ?1                  	;0
2229 1067  INIT_FCALL_BY_NAME/59     ?0        ?0                   1554:'array_keys'   	;1
2230 1067  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
2231 1067  DO_FCALL_BY_NAME/131      $621=     ?0                   ?0                  	;0
2232 1067  SEND_VAR_NO_REF_EX/50     ?96       $621                 ?2                  	;0
2233 1067  DO_FCALL_BY_NAME/131      $622=     ?0                   ?0                  	;0
2234 1067  BOOL/52                   #619=     $622                 ?0                  	;0
2235 1067  BOOL_NOT/13               #623=     #619                 ?0                  	;0	<<2225
2236 1067  JMPZ/43                   ?0        #623                 ?2238               	;0	>>2238
2237 1068  GOTO/253                  ?0        ?2241                ?1556               	;0
2238 1070  FETCH_DIM_R/81            $624=     16?6                 1557:'hue'          	;0	<<2236
2239 1070  CONCAT/8                  #625=     1558:'-'             $624                	;0
2240 1070  ECHO/40                   ?0        #625                 ?0                  	;0
2241 1072  ECHO/40                   ?0        1559:'">
                                <div class="app-search-box">
									<select placeholder="Search..." class="quick_search form-control bg-animate' ?0                  	;0
2242 1073  GOTO/253                  ?0        ?1680                ?1560               	;0
2243 1075  ECHO/40                   ?0        1561:'                                </a>
                                ' ?0                  	;0
2244 1076  GOTO/253                  ?0        ?776                 ?1562               	;0
2245 1078  ECHO/40                   ?0        1563:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    ' ?0                  	;0
2246 1079  INIT_FCALL_BY_NAME/59     ?0        ?0                   1564:'E589a4BF54A2DAD1'	;2
2247 1079  SEND_VAL_EX/116           ?80       1566:'adv'           ?1                  	;0
2248 1079  SEND_VAL_EX/116           ?96       1567:'live_connections' ?2                  	;0
2249 1079  DO_FCALL_BY_NAME/131      $626=     ?0                   ?0                  	;0
2250 1079  BOOL_NOT/13               #627=     $626                 ?0                  	;0
2251 1079  JMPZ/43                   ?0        #627                 ?2253               	;0	>>2253
2252 1080  GOTO/253                  ?0        ?1393                ?1568               	;0
2253 1082  GOTO/253                  ?0        ?1389                ?1569               	;0	<<2251
2254 1084  ECHO/40                   ?0        1570:'                                    <li><a href="users">' ?0                  	;0
2255 1085  FETCH_DIM_R/81            $628=     16?0                 1571:'manage_users' 	;0
2256 1085  ECHO/40                   ?0        $628                 ?0                  	;0
2257 1086  ECHO/40                   ?0        1572:'</a></li>
                                    ' ?0                  	;0
2258 1088  ECHO/40                   ?0        1573:'                                </ul>
                            </li>
                            ' ?0                  	;0
2259 1089  GOTO/253                  ?0        ?195                 ?1574               	;0
2260 1091  FETCH_DIM_R/81            $629=     16?0                 1575:'created_channels'	;0
2261 1091  ECHO/40                   ?0        $629                 ?0                  	;0
2262 1092  ECHO/40                   ?0        1576:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0
2263 1093  INIT_FCALL_BY_NAME/59     ?0        ?0                   1577:'E589A4bF54a2DaD1'	;2
2264 1093  SEND_VAL_EX/116           ?80       1579:'adv'           ?1                  	;0
2265 1093  SEND_VAL_EX/116           ?96       1580:'create_channel' ?2                  	;0
2266 1093  DO_FCALL_BY_NAME/131      $630=     ?0                   ?0                  	;0
2267 1093  BOOL_NOT/13               #631=     $630                 ?0                  	;0
2268 1093  JMPZ/43                   ?0        #631                 ?2270               	;0	>>2270
2269 1094  GOTO/253                  ?0        ?1242                ?1581               	;0
2270 1096  ECHO/40                   ?0        1582:'                                            <li><a href="created_channel">' ?0                  	;0	<<2268
2271 1097  FETCH_DIM_R/81            $632=     16?0                 1583:'create_channel'	;0
2272 1097  ECHO/40                   ?0        $632                 ?0                  	;0
2273 1098  GOTO/253                  ?0        ?1241                ?1584               	;0
2274 1101  ECHO/40                   ?0        1585:'                                </ul>
                            </li>
							' ?0                  	;0
2275 1103  INIT_FCALL_BY_NAME/59     ?0        ?0                   1586:'e589a4BF54a2dad1'	;2
2276 1103  SEND_VAL_EX/116           ?80       1588:'adv'           ?1                  	;0
2277 1103  SEND_VAL_EX/116           ?96       1589:'add_bouquet'   ?2                  	;0
2278 1103  DO_FCALL_BY_NAME/131      $633=     ?0                   ?0                  	;0
2279 1103  JMPNZ_EX/47               #634=     $633                 ?2285               	;0	>>2285
2280 1103  INIT_FCALL_BY_NAME/59     ?0        ?0                   1590:'e589A4Bf54A2DaD1'	;2
2281 1103  SEND_VAL_EX/116           ?80       1592:'adv'           ?1                  	;0
2282 1103  SEND_VAL_EX/116           ?96       1593:'bouquets'      ?2                  	;0
2283 1103  DO_FCALL_BY_NAME/131      $635=     ?0                   ?0                  	;0
2284 1103  BOOL/52                   #634=     $635                 ?0                  	;0
2285 1103  JMPNZ_EX/47               #634=     #634                 ?2291               	;0	>>2291	<<2279
2286 1103  INIT_FCALL_BY_NAME/59     ?0        ?0                   1594:'e589a4bF54a2DAd1'	;2
2287 1103  SEND_VAL_EX/116           ?80       1596:'adv'           ?1                  	;0
2288 1103  SEND_VAL_EX/116           ?96       1597:'edit_bouquet'  ?2                  	;0
2289 1103  DO_FCALL_BY_NAME/131      $636=     ?0                   ?0                  	;0
2290 1103  BOOL/52                   #634=     $636                 ?0                  	;0
2291 1103  BOOL_NOT/13               #637=     #634                 ?0                  	;0	<<2285
2292 1103  JMPZ/43                   ?0        #637                 ?2294               	;0	>>2294
2293 1104  GOTO/253                  ?0        ?1839                ?1598               	;0
2294 1106  ECHO/40                   ?0        1599:'                            <li class="has-submenu">
                                <a href="#"> <i class="fas fa-spa"></i>' ?0                  	;0	<<2292
2295 1107  GOTO/253                  ?0        ?1191                ?1600               	;0
2296 1109  INIT_FCALL_BY_NAME/59     ?0        ?0                   1601:'E589a4bF54a2daD1'	;2
2297 1109  SEND_VAL_EX/116           ?80       1603:'adv'           ?1                  	;0
2298 1109  SEND_VAL_EX/116           ?96       1604:'epg'           ?2                  	;0
2299 1109  DO_FCALL_BY_NAME/131      $638=     ?0                   ?0                  	;0
2300 1109  BOOL_NOT/13               #639=     $638                 ?0                  	;0
2301 1109  JMPZ/43                   ?0        #639                 ?2303               	;0	>>2303
2302 1110  GOTO/253                  ?0        ?2307                ?1605               	;0
2303 1112  ECHO/40                   ?0        1606:'                                            <li><a href="epgs">' ?0                  	;0	<<2301
2304 1113  FETCH_DIM_R/81            $640=     16?0                 1607:'epgs'         	;0
2305 1113  ECHO/40                   ?0        $640                 ?0                  	;0
2306 1114  ECHO/40                   ?0        1608:'</a></li>
                                            ' ?0                  	;0
2307 1116  GOTO/253                  ?0        ?752                 ?1609               	;0
2308 1119  ECHO/40                   ?0        1610:'                                            ' ?0                  	;0
2309 1120  INIT_FCALL_BY_NAME/59     ?0        ?0                   1611:'E589a4bF54a2dAd1'	;2
2310 1120  SEND_VAL_EX/116           ?80       1613:'adv'           ?1                  	;0
2311 1120  SEND_VAL_EX/116           ?96       1614:'mass_edit_users' ?2                  	;0
2312 1120  DO_FCALL_BY_NAME/131      $641=     ?0                   ?0                  	;0
2313 1120  BOOL_NOT/13               #642=     $641                 ?0                  	;0
2314 1120  JMPZ/43                   ?0        #642                 ?2316               	;0	>>2316
2315 1121  GOTO/253                  ?0        ?2126                ?1615               	;0
2316 1123  ECHO/40                   ?0        1616:'                                            <li><a href="user_mass">' ?0                  	;0	<<2314
2317 1124  FETCH_DIM_R/81            $643=     16?0                 1617:'users'        	;0
2318 1124  ECHO/40                   ?0        $643                 ?0                  	;0
2319 1125  GOTO/253                  ?0        ?2125                ?1618               	;0
2320 1127  INIT_FCALL_BY_NAME/59     ?0        ?0                   1619:'count'        	;1	<<0
2321 1127  INIT_FCALL_BY_NAME/59     ?0        ?0                   1621:'get_included_files'	;0
2322 1127  DO_FCALL_BY_NAME/131      $644=     ?0                   ?0                  	;0
2323 1127  SEND_VAR_NO_REF_EX/50     ?80       $644                 ?1                  	;0
2324 1127  DO_FCALL_BY_NAME/131      $645=     ?0                   ?0                  	;0
2325 1127  IS_EQUAL/17               #646=     $645                 1623:1              	;0
2326 1127  BOOL_NOT/13               #647=     #646                 ?0                  	;0
2327 1127  JMPZ/43                   ?0        #647                 ?2329               	;0	>>2329
2328 1128  GOTO/253                  ?0        ?2330                ?1624               	;0
2329 1130  EXIT/79                   ?0        ?0                   ?0                  	;0	<<2327
2330 1132  FETCH_STATIC_PROP_IS/176  $648=     1625:'rRequest'      1626:'XUI'          	;0
2331 1132  ISSET_ISEMPTY_DIM_OBJ/115 #649=     $648                 1628:'modal'        	;33554432
2332 1132  ASSIGN/38                 ?622      16?25                #649                	;0
2333 1133  INIT_FCALL_BY_NAME/59     ?0        ?0                   1629:'json_decode'  	;2
2334 1133  FETCH_STATIC_PROP_FUNC_ARG/177 $651=     1631:'rSettings'     1632:'XUI'          	;1
2335 1133  FETCH_DIM_FUNC_ARG/93     $652=     $651                 1634:'update_data'  	;1
2336 1133  SEND_VAR_EX/66            ?80       $652                 ?1                  	;0
2337 1133  SEND_VAL_EX/116           ?96       1635:true            ?2                  	;0
2338 1133  DO_FCALL_BY_NAME/131      $653=     ?0                   ?0                  	;0
2339 1133  JMP_SET/152               #654=     $653                 ?2341               	;0
2340 1133  QM_ASSIGN/22              #654=     1636:array (
)       ?0                  	;0
2341 1133  ASSIGN/38                 ?627      16?18                #654                	;0
2342 1134  GOTO/253                  ?0        ?1667                ?1637               	;0
2343 1136  ECHO/40                   ?0        1638:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0
2344 1137  FETCH_DIM_R/81            $656=     16?0                 1639:'streams'      	;0
2345 1137  ECHO/40                   ?0        $656                 ?0                  	;0
2346 1138  ECHO/40                   ?0        1640:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            ' ?0                  	;0
2347 1139  INIT_FCALL_BY_NAME/59     ?0        ?0                   1641:'E589A4BF54a2dAD1'	;2
2348 1139  SEND_VAL_EX/116           ?80       1643:'adv'           ?1                  	;0
2349 1139  SEND_VAL_EX/116           ?96       1644:'add_stream'    ?2                  	;0
2350 1139  DO_FCALL_BY_NAME/131      $657=     ?0                   ?0                  	;0
2351 1139  BOOL_NOT/13               #658=     $657                 ?0                  	;0
2352 1139  JMPZ/43                   ?0        #658                 ?2354               	;0	>>2354
2353 1140  GOTO/253                  ?0        ?953                 ?1645               	;0
2354 1142  ECHO/40                   ?0        1646:'                                            <li><a href="stream">' ?0                  	;0	<<2352
2355 1143  GOTO/253                  ?0        ?950                 ?1647               	;0
2356 1145  FETCH_DIM_R/81            $659=     16?0                 1648:'folder_watch' 	;0
2357 1145  ECHO/40                   ?0        $659                 ?0                  	;0
2358 1146  ECHO/40                   ?0        1649:'</a></li>
                                            ' ?0                  	;0
2359 1148  ECHO/40                   ?0        1650:'                                        </ul>
                                    </li>
                                    ' ?0                  	;0
2360 1150  GOTO/253                  ?0        ?881                 ?1651               	;0
2361 1152  INIT_FCALL_BY_NAME/59     ?0        ?0                   1652:'E589A4Bf54a2DAD1'	;2
2362 1152  SEND_VAL_EX/116           ?80       1654:'adv'           ?1                  	;0
2363 1152  SEND_VAL_EX/116           ?96       1655:'streams'       ?2                  	;0
2364 1152  DO_FCALL_BY_NAME/131      $660=     ?0                   ?0                  	;0
2365 1152  BOOL_NOT/13               #661=     $660                 ?0                  	;0
2366 1152  JMPZ/43                   ?0        #661                 ?2368               	;0	>>2368
2367 1153  GOTO/253                  ?0        ?2369                ?1656               	;0
2368 1155  ECHO/40                   ?0        1657:'                                            <li><a href="providers">Stream Providers</a></li>
                                            ' ?0                  	;0	<<2366
2369 1157  INIT_FCALL_BY_NAME/59     ?0        ?0                   1658:'e589A4BF54a2DaD1'	;2
2370 1157  SEND_VAL_EX/116           ?80       1660:'adv'           ?1                  	;0
2371 1157  SEND_VAL_EX/116           ?96       1661:'tprofiles'     ?2                  	;0
2372 1157  DO_FCALL_BY_NAME/131      $662=     ?0                   ?0                  	;0
2373 1157  BOOL_NOT/13               #663=     $662                 ?0                  	;0
2374 1157  JMPZ/43                   ?0        #663                 ?2376               	;0	>>2376
2375 1158  GOTO/253                  ?0        ?276                 ?1662               	;0
2376 1160  ECHO/40                   ?0        1663:'                                            <li><a href="profiles">' ?0                  	;0	<<2374
2377 1161  GOTO/253                  ?0        ?273                 ?1664               	;0
2378 1163  FETCH_DIM_R/81            $664=     16?0                 1665:'add_movie'    	;0
2379 1163  ECHO/40                   ?0        $664                 ?0                  	;0
2380 1164  ECHO/40                   ?0        1666:'</a></li>
											' ?0                  	;0
2381 1166  INIT_FCALL_BY_NAME/59     ?0        ?0                   1667:'E589A4bf54a2DAd1'	;2
2382 1166  SEND_VAL_EX/116           ?80       1669:'adv'           ?1                  	;0
2383 1166  SEND_VAL_EX/116           ?96       1670:'import_movies' ?2                  	;0
2384 1166  DO_FCALL_BY_NAME/131      $665=     ?0                   ?0                  	;0
2385 1166  JMPZ_EX/46                #666=     $665                 ?2388               	;0	>>2388
2386 1166  BOOL_NOT/13               #667=     16?9                 ?0                  	;0
2387 1166  BOOL/52                   #666=     #667                 ?0                  	;0
2388 1166  BOOL_NOT/13               #668=     #666                 ?0                  	;0	<<2385
2389 1166  JMPZ/43                   ?0        #668                 ?2391               	;0	>>2391
2390 1167  GOTO/253                  ?0        ?1626                ?1671               	;0
2391 1169  ECHO/40                   ?0        1672:'                                            <li><a href="movie?import=1">Import Multiple</a></li>
                                            <li><a href="review?type=2">Import & Review</a></li>
											' ?0                  	;0	<<2389
2392 1170  GOTO/253                  ?0        ?1626                ?1673               	;0
2393 1173  ECHO/40                   ?0        1674:'        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/listings.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
		' ?0                  	;0
2394 1175  ECHO/40                   ?0        1675:'        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />
		' ?0                  	;0
2395 1176  BOOL_NOT/13               #669=     16?25                ?0                  	;0
2396 1176  JMPZ/43                   ?0        #669                 ?2398               	;0	>>2398
2397 1177  GOTO/253                  ?0        ?1037                ?1676               	;0
2398 1179  GOTO/253                  ?0        ?1036                ?1677               	;0	<<2396
2399 1182  NOP/0                     ?0        1678:1               ?0                  	;4294967295
*/

?>
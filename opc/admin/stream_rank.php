<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?123                 ?0                  	;0	>>123
1   5    INCLUDE_OR_EVAL/73        ?0        1:'header.php'       ?0                  	;2
2   6    ECHO/40                   ?0        2:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
3   7    FETCH_IS/89               $11=      3:'_SERVER'          ?0                  	;0
4   7    ISSET_ISEMPTY_DIM_OBJ/115 #12=      $11                  4:'HTTP_X_REQUESTED_WITH'	;16777216
5   7    BOOL_NOT/13               #13=      #12                  ?0                  	;0
6   7    JMPZ_EX/46                #13=      #13                  ?14                 	;0	>>14
7   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'strtolower'      	;1
8   7    FETCH_FUNC_ARG/92         $14=      7:'_SERVER'          ?0                  	;1
9   7    FETCH_DIM_FUNC_ARG/93     $15=      $14                  8:'HTTP_X_REQUESTED_WITH'	;1
10  7    SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
11  7    DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
12  7    IS_EQUAL/17               #17=      $16                  9:'xmlhttprequest'  	;0
13  7    BOOL/52                   #13=      #17                  ?0                  	;0
14  7    BOOL_NOT/13               #18=      #13                  ?0                  	;0	<<6
15  7    JMPZ/43                   ?0        #18                  ?17                 	;0	>>17
16  8    GOTO/253                  ?0        ?18                  ?10                 	;0
17  10   ECHO/40                   ?0        11:' style="display: none;"' ?0                  	;0	<<15
18  12   GOTO/253                  ?0        ?132                 ?12                 	;0
19  14   ASSIGN/38                 ?9        16?0                 13:array (
  1 => 'Live Stream',
  2 => 'Movie',
  3 => 'Created Channel',
  4 => 'Radio Station',
  5 => 'Episode',
)	;0
20  15   FETCH_STATIC_PROP_R/173   $20=      14:'rRequest'        15:'XUI'            	;0
21  15   FETCH_DIM_R/81            $21=      $20                  17:'period'         	;0
22  15   JMP_SET/152               #22=      $21                  ?24                 	;0
23  15   QM_ASSIGN/22              #22=      18:'all'             ?0                  	;0
24  15   ASSIGN/38                 ?13       16?1                 #22                 	;0
25  16   INIT_METHOD_CALL/112      ?0        16?2                 19:'query'          	;2
26  16   SEND_VAL_EX/116           ?80       21:'SELECT `streams_stats`.*, `streams`.`stream_display_name` FROM `streams_stats` INNER JOIN `streams` ON `streams`.`id` = `streams_stats`.`stream_id` WHERE `streams_stats`.`type` = ? AND `streams`.`type` IN (1,3) GROUP BY `stream_id` ORDER BY `streams_stats`.`rank` ASC LIMIT 500;' ?1                  	;0
27  16   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
28  16   DO_FCALL/60               ?14       ?0                   ?0                  	;0
29  17   INIT_METHOD_CALL/112      ?0        16?2                 22:'get_rows'       	;0
30  17   DO_FCALL/60               $25=      ?0                   ?0                  	;0
31  17   ASSIGN/38                 ?16       16?3                 $25                 	;0
32  18   ASSIGN/38                 ?17       16?4                 24:'Stream Rank'    	;0
33  19   GOTO/253                  ?0        ?1                   ?25                 	;0
34  21   ECHO/40                   ?0        26:'                            </tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
35  22   GOTO/253                  ?0        ?173                 ?27                 	;0
36  25   ECHO/40                   ?0        28:'								</select>
							</div>
						</div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">Rank #</th>
									<th>Stream Name</th>
									<th class="text-center">Time Watched</th>
                                    <th class="text-center">Total Connections</th>
                                    <th class="text-center">Total Users</th>
								</tr>
							</thead>
							<tbody>
                                ' ?0                  	;0
37  26   ASSIGN/38                 ?18       16?5                 29:0                	;0
38  27   FE_RESET_R/77             $29=      16?3                 ?114                	;0
39  27   FE_FETCH_R/78             ?0        $29                  16?6                	;114	>>114	<<113
40  28   NOP/0                     ?0        ?0                   ?0                  	;1
41  28   GOTO/253                  ?0        ?54                  ?30                 	;0
42  30   ECHO/40                   ?0        31:'</td>
                                        <td><a href="stream_view?id=' ?0                  	;0
43  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'intval'         	;1
44  31   FETCH_DIM_FUNC_ARG/93     $30=      16?6                 34:'id'             	;1
45  31   SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
46  31   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
47  31   ECHO/40                   ?0        $31                  ?0                  	;0
48  32   ECHO/40                   ?0        35:'">'              ?0                  	;0
49  33   FETCH_DIM_R/81            $32=      16?6                 36:'stream_display_name'	;0
50  33   ECHO/40                   ?0        $32                  ?0                  	;0
51  34   ECHO/40                   ?0        37:'</a></td>
                                        <td class="text-center"><button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light btn-fixed\'>' ?0                  	;0
52  35   NOP/0                     ?0        ?0                   ?0                  	;1
53  35   GOTO/253                  ?0        ?80                  ?38                 	;0
54  37   POST_INC/36               #33=      16?5                 ?0                  	;0
55  37   FREE/70                   ?0        #33                  ?0                  	;0
56  38   FETCH_DIM_R/81            $34=      16?6                 39:'time'           	;0
57  38   ASSIGN/38                 ?25       16?7                 $34                 	;0
58  39   IS_SMALLER_OR_EQUAL/20    #36=      40:86400             16?7                	;0
59  39   JMPZ/43                   ?0        #36                  ?62                 	;0	>>62
60  40   NOP/0                     ?0        ?0                   ?0                  	;1
61  40   GOTO/253                  ?0        ?97                  ?41                 	;0
62  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'sprintf'        	;4	<<59
63  42   SEND_VAL_EX/116           ?80       44:'%02dh %02dm %02ds' ?1                  	;0
64  42   DIV/4                     #37=      16?7                 45:3600             	;0
65  42   SEND_VAL_EX/116           ?96       #37                  ?2                  	;0
66  42   DIV/4                     #38=      16?7                 46:60               	;0
67  42   MOD/5                     #39=      #38                  47:60               	;0
68  42   SEND_VAL_EX/116           ?112      #39                  ?3                  	;0
69  42   MOD/5                     #40=      16?7                 48:60               	;0
70  42   SEND_VAL_EX/116           ?128      #40                  ?4                  	;0
71  42   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
72  42   ASSIGN/38                 ?32       16?7                 $41                 	;0
73  43   NOP/0                     ?0        ?0                   ?0                  	;1
74  43   GOTO/253                  ?0        ?109                 ?49                 	;0
75  44   NOP/0                     ?0        ?0                   ?0                  	;1
76  44   GOTO/253                  ?0        ?97                  ?50                 	;0
77  46   ECHO/40                   ?0        51:'</button></td>
                                    </tr>
                                ' ?0                  	;0
78  48   NOP/0                     ?0        ?0                   ?0                  	;1
79  48   GOTO/253                  ?0        ?113                 ?52                 	;0
80  50   ECHO/40                   ?0        16?7                 ?0                  	;0
81  51   ECHO/40                   ?0        53:'</button></td>
                                        <td class="text-center"><button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light btn-fixed\'>' ?0                  	;0
82  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'number_format'  	;2
83  52   FETCH_DIM_FUNC_ARG/93     $43=      16?6                 56:'connections'    	;1
84  52   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
85  52   SEND_VAL_EX/116           ?96       57:0                 ?2                  	;0
86  52   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
87  52   ECHO/40                   ?0        $44                  ?0                  	;0
88  53   ECHO/40                   ?0        58:'</button></td>
                                        <td class="text-center"><button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light btn-fixed\'>' ?0                  	;0
89  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'number_format'  	;2
90  54   FETCH_DIM_FUNC_ARG/93     $45=      16?6                 61:'users'          	;1
91  54   SEND_VAR_EX/66            ?80       $45                  ?1                  	;0
92  54   SEND_VAL_EX/116           ?96       62:0                 ?2                  	;0
93  54   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
94  54   ECHO/40                   ?0        $46                  ?0                  	;0
95  55   NOP/0                     ?0        ?0                   ?0                  	;1
96  55   GOTO/253                  ?0        ?77                  ?63                 	;0
97  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'sprintf'        	;4
98  58   SEND_VAL_EX/116           ?80       66:'%02dd %02dh %02dm' ?1                  	;0
99  58   DIV/4                     #47=      16?7                 67:86400            	;0
100 58   SEND_VAL_EX/116           ?96       #47                  ?2                  	;0
101 58   DIV/4                     #48=      16?7                 68:3600             	;0
102 58   MOD/5                     #49=      #48                  69:24               	;0
103 58   SEND_VAL_EX/116           ?112      #49                  ?3                  	;0
104 58   DIV/4                     #50=      16?7                 70:60               	;0
105 58   MOD/5                     #51=      #50                  71:60               	;0
106 58   SEND_VAL_EX/116           ?128      #51                  ?4                  	;0
107 58   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
108 58   ASSIGN/38                 ?43       16?7                 $52                 	;0
109 60   ECHO/40                   ?0        72:'                                    <tr>
                                        <td class="text-center">' ?0                  	;0
110 61   ECHO/40                   ?0        16?5                 ?0                  	;0
111 62   NOP/0                     ?0        ?0                   ?0                  	;1
112 62   GOTO/253                  ?0        ?42                  ?73                 	;0
113 63   JMP/42                    ?0        ?39                  ?0                  	;0	>>39
114 63   FE_FREE/127               ?0        $29                  ?0                  	;0	<<38
115 66   GOTO/253                  ?0        ?34                  ?74                 	;0
116 69   ECHO/40                   ?0        75:'>Today</option>
									<option value="week"' ?0                  	;0
117 70   IS_EQUAL/17               #54=      16?1                 76:'week'           	;0
118 70   BOOL_NOT/13               #55=      #54                  ?0                  	;0
119 70   JMPZ/43                   ?0        #55                  ?121                	;0	>>121
120 71   GOTO/253                  ?0        ?122                 ?77                 	;0
121 73   ECHO/40                   ?0        78:' selected'       ?0                  	;0	<<119
122 75   GOTO/253                  ?0        ?141                 ?79                 	;0
123 77   INCLUDE_OR_EVAL/73        ?46       80:'session.php'     ?0                  	;2	<<0
124 78   INCLUDE_OR_EVAL/73        ?47       81:'functions.php'   ?0                  	;2
125 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'e6D500e19634D513'	;0
126 79   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
127 79   JMPZ/43                   ?0        $58                  ?129                	;0	>>129
128 80   GOTO/253                  ?0        ?131                 ?84                 	;0
129 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'e72f42a93714bA87'	;0	<<127
130 82   DO_FCALL_BY_NAME/131      ?49       ?0                   ?0                  	;0
131 84   GOTO/253                  ?0        ?19                  ?87                 	;0
132 86   ECHO/40                   ?0        88:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
133 87   INCLUDE_OR_EVAL/73        ?50       89:'topbar.php'      ?0                  	;2
134 88   ECHO/40                   ?0        90:'					</div>
					<h4 class="page-title">Stream Rank</h4>
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
								<select id="period" class="form-control" data-toggle="select2">
                                    <option value="today"' ?0                  	;0
135 89   IS_EQUAL/17               #61=      16?1                 91:'today'          	;0
136 89   BOOL_NOT/13               #62=      #61                  ?0                  	;0
137 89   JMPZ/43                   ?0        #62                  ?139                	;0	>>139
138 90   GOTO/253                  ?0        ?116                 ?92                 	;0
139 92   ECHO/40                   ?0        93:' selected'       ?0                  	;0	<<137
140 93   GOTO/253                  ?0        ?116                 ?94                 	;0
141 95   ECHO/40                   ?0        95:'>This Week</option>
									<option value="month"' ?0                  	;0
142 96   IS_EQUAL/17               #63=      16?1                 96:'month'          	;0
143 96   BOOL_NOT/13               #64=      #63                  ?0                  	;0
144 96   JMPZ/43                   ?0        #64                  ?146                	;0	>>146
145 97   GOTO/253                  ?0        ?147                 ?97                 	;0
146 99   ECHO/40                   ?0        98:' selected'       ?0                  	;0	<<144
147 101  ECHO/40                   ?0        99:'>This Month</option>
									<option value="all"' ?0                  	;0
148 102  GOTO/253                  ?0        ?149                 ?100                	;0
149 104  IS_EQUAL/17               #65=      16?1                 101:'all'           	;0
150 104  BOOL_NOT/13               #66=      #65                  ?0                  	;0
151 104  JMPZ/43                   ?0        #66                  ?153                	;0	>>153
152 105  GOTO/253                  ?0        ?154                 ?102                	;0
153 107  ECHO/40                   ?0        103:' selected'      ?0                  	;0	<<151
154 109  ECHO/40                   ?0        104:'>All Time</option>
								</select>
							</div>
							<div class="col-md-2">
								<select id="show_entries" class="form-control" data-toggle="select2">
									' ?0                  	;0
155 110  FE_RESET_R/77             $67=      105:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?171                	;0
156 110  FE_FETCH_R/78             ?0        $67                  16?8                	;171	>>171	<<170
157 111  ECHO/40                   ?0        106:'									<option' ?0                  	;0
158 112  FETCH_DIM_R/81            $68=      16?9                 107:'default_entries'	;0
159 112  IS_EQUAL/17               #69=      $68                  16?8                	;0
160 112  BOOL_NOT/13               #70=      #69                  ?0                  	;0
161 112  JMPZ/43                   ?0        #70                  ?164                	;0	>>164
162 113  NOP/0                     ?0        ?0                   ?0                  	;1
163 113  GOTO/253                  ?0        ?165                 ?108                	;0
164 115  ECHO/40                   ?0        109:' selected'      ?0                  	;0	<<161
165 117  ECHO/40                   ?0        110:' value="'       ?0                  	;0
166 118  ECHO/40                   ?0        16?8                 ?0                  	;0
167 119  ECHO/40                   ?0        111:'">'             ?0                  	;0
168 120  ECHO/40                   ?0        16?8                 ?0                  	;0
169 121  ECHO/40                   ?0        112:'</option>
									' ?0                  	;0
170 122  JMP/42                    ?0        ?156                 ?0                  	;0	>>156
171 122  FE_FREE/127               ?0        $67                  ?0                  	;0	<<155
172 124  GOTO/253                  ?0        ?36                  ?113                	;0
173 126  INCLUDE_OR_EVAL/73        ?61       114:'footer.php'     ?0                  	;2
174 127  NOP/0                     ?0        115:1                ?0                  	;4294967295
*/

?>
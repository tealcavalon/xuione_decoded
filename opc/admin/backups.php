<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?62                  ?0                  	;0	>>62
1   6    ECHO/40                   ?0        1:'>
    <div class="container-fluid">
		<form action="#" method="POST">
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
                        <div class="page-title-right">
                            ' ?0                  	;0
2   7    INCLUDE_OR_EVAL/73        ?0        2:'topbar.php'       ?0                  	;2
3   8    ECHO/40                   ?0        3:'                        </div>
						<h4 class="page-title">Backups</h4>
					</div>
				</div>
			</div>     
			<div class="row">
				<div class="col-xl-12">
					' ?0                  	;0
4   9    ISSET_ISEMPTY_CV/197      #6=       16?0                 ?0                  	;33554432
5   9    JMPZ_EX/46                #6=       #6                   ?9                  	;0	>>9
6   9    FETCH_CONSTANT/99         #7=       ?0                   4:'STATUS_SUCCESS'  	;16
7   9    IS_EQUAL/17               #8=       16?0                 #7                  	;0
8   9    BOOL/52                   #6=       #8                   ?0                  	;0
9   9    JMPZ/43                   ?0        #6                   ?11                 	;0	>>11	<<5
10  10   GOTO/253                  ?0        ?76                  ?7                  	;0
11  12   GOTO/253                  ?0        ?74                  ?8                  	;0	<<9
12  14   ASSIGN/38                 ?4        16?1                 9:'Backups'         	;0
13  15   INCLUDE_OR_EVAL/73        ?5        10:'header.php'      ?0                  	;2
14  16   ECHO/40                   ?0        11:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
15  17   FETCH_IS/89               $11=      12:'_SERVER'         ?0                  	;0
16  17   ISSET_ISEMPTY_DIM_OBJ/115 #12=      $11                  13:'HTTP_X_REQUESTED_WITH'	;16777216
17  17   BOOL_NOT/13               #13=      #12                  ?0                  	;0
18  17   JMPZ_EX/46                #13=      #13                  ?26                 	;0	>>26
19  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'strtolower'     	;1
20  17   FETCH_FUNC_ARG/92         $14=      16:'_SERVER'         ?0                  	;1
21  17   FETCH_DIM_FUNC_ARG/93     $15=      $14                  17:'HTTP_X_REQUESTED_WITH'	;1
22  17   SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
23  17   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
24  17   IS_EQUAL/17               #17=      $16                  18:'xmlhttprequest' 	;0
25  17   BOOL/52                   #13=      #17                  ?0                  	;0
26  17   BOOL_NOT/13               #18=      #13                  ?0                  	;0	<<18
27  17   JMPZ/43                   ?0        #18                  ?29                 	;0	>>29
28  18   GOTO/253                  ?0        ?1                   ?19                 	;0
29  20   ECHO/40                   ?0        20:' style="display: none;"' ?0                  	;0	<<27
30  21   GOTO/253                  ?0        ?1                   ?21                 	;0
31  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'htmlspecialchars'	;1
32  23   FETCH_DIM_R/81            $19=      16?2                 24:'dropbox_keep'   	;0
33  23   JMPZ/43                   ?0        $19                  ?37                 	;0	>>37
34  23   FETCH_DIM_R/81            $20=      16?2                 25:'dropbox_keep'   	;0
35  23   QM_ASSIGN/22              #21=      $20                  ?0                  	;0
36  23   JMP/42                    ?0        ?38                  ?0                  	;0	>>38
37  23   QM_ASSIGN/22              #21=      26:0                 ?0                  	;0	<<33
38  23   SEND_VAL_EX/116           ?80       #21                  ?1                  	;0	<<36
39  23   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
40  23   ECHO/40                   ?0        $22                  ?0                  	;0
41  24   ECHO/40                   ?0        27:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="dropbox_token">Dropbox Token <i title="Create an application in the Dropbox Developer section, set the expiration to never then generate a token." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="dropbox_token" name="dropbox_token" value="' ?0                  	;0
42  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'htmlspecialchars'	;1
43  25   FETCH_DIM_FUNC_ARG/93     $23=      16?2                 30:'dropbox_token'  	;1
44  25   SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
45  25   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
46  25   ECHO/40                   ?0        $24                  ?0                  	;0
47  26   ECHO/40                   ?0        31:'">
													</div>
												</div>
												' ?0                  	;0
48  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'strlen'         	;1
49  27   FETCH_DIM_FUNC_ARG/93     $25=      16?2                 34:'dropbox_token'  	;1
50  27   SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
51  27   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
52  27   IS_SMALLER/19             #27=      35:0                 $26                 	;0
53  27   JMPZ_EX/46                #27=      #27                  ?58                 	;0	>>58
54  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'d40B5c7F5Ac7E326'	;0
55  27   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
56  27   BOOL_NOT/13               #29=      $28                  ?0                  	;0
57  27   BOOL/52                   #27=      #29                  ?0                  	;0
58  27   BOOL_NOT/13               #30=      #27                  ?0                  	;0	<<53
59  27   JMPZ/43                   ?0        #30                  ?61                 	;0	>>61
60  28   GOTO/253                  ?0        ?72                  ?38                 	;0
61  30   GOTO/253                  ?0        ?71                  ?39                 	;0	<<59
62  32   INCLUDE_OR_EVAL/73        ?26       40:'session.php'     ?0                  	;2	<<0
63  33   INCLUDE_OR_EVAL/73        ?27       41:'functions.php'   ?0                  	;2
64  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'e6d500E19634d513'	;0
65  34   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
66  34   JMPZ/43                   ?0        $33                  ?68                 	;0	>>68
67  35   GOTO/253                  ?0        ?70                  ?44                 	;0
68  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'E72f42A93714ba87'	;0	<<66
69  37   DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
70  39   GOTO/253                  ?0        ?12                  ?47                 	;0
71  41   ECHO/40                   ?0        48:'												<div class="alert alert-danger text-center" role="alert">
													Could not access your Dropbox through the API key provided above. Please generate a new one or check that your key is correct.
												</div>
												' ?0                  	;0
72  43   ECHO/40                   ?0        49:'												<table class="table table-striped table-borderless mb-0" id="datatable-backups">
													<thead>
														<tr>
															<th class="text-center">Date</th>
															<th class="text-center">Filename</th>
															<th class="text-center">Filesize</th>
															<th class="text-center">Local</th>
															<th class="text-center">Dropbox</th>
															<th class="text-center">Actions</th>
														</tr>
													</thead>
													<tbody></tbody>
												</table>
											</div>
										</div>
										<ul class="list-inline wizard mb-0" style="margin-top:30px;">
                                            <li class="list-inline-item">
                                                <button id="create_backup" onClick="api(\'\', \'backup\')" class="btn btn-info">Create Backup Now</button>
                                            </li>
											<li class="list-inline-item float-right">
                                                <input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
' ?0                  	;0
73  44   GOTO/253                  ?0        ?118                 ?50                 	;0
74  46   ECHO/40                   ?0        51:'                    <div class="alert alert-info alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						Backups will not contain any logs, restoring a database will therefore clear all of your logs.<br/>If you want to keep your logs you should manually create your own backups.
					</div>
                    ' ?0                  	;0
75  47   GOTO/253                  ?0        ?77                  ?52                 	;0
76  49   ECHO/40                   ?0        53:'					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						Backup settings sucessfully updated!
					</div>
					' ?0                  	;0
77  51   GOTO/253                  ?0        ?78                  ?54                 	;0
78  53   ECHO/40                   ?0        55:'					<div class="card">
						<div class="card-body">
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#backups" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-backup-restore mr-1"></i>
											<span class="d-none d-sm-inline">Backups</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="backups">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="automatic_backups">Automatic Backups <i title="Generate full SQL backups periodically." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="automatic_backups" id="automatic_backups" class="form-control" data-toggle="select2">
															' ?0                  	;0
79  54   FE_RESET_R/77             $35=      56:array (
  'off' => 'Off',
  'hourly' => 'Hourly',
  'daily' => 'Daily',
  'weekly' => 'Weekly',
  'monthly' => 'Monthly',
) ?96                 	;0
80  54   FE_FETCH_R/78             #36=      $35                  16?3                	;96	>>96	<<95
81  54   ASSIGN/38                 ?32       16?4                 #36                 	;0
82  55   ECHO/40                   ?0        57:'															<option' ?0                  	;0
83  56   FETCH_DIM_R/81            $38=      16?2                 58:'automatic_backups'	;0
84  56   IS_EQUAL/17               #39=      $38                  16?4                	;0
85  56   BOOL_NOT/13               #40=      #39                  ?0                  	;0
86  56   JMPZ/43                   ?0        #40                  ?89                 	;0	>>89
87  57   NOP/0                     ?0        ?0                   ?0                  	;1
88  57   GOTO/253                  ?0        ?90                  ?59                 	;0
89  59   ECHO/40                   ?0        60:' selected'       ?0                  	;0	<<86
90  61   ECHO/40                   ?0        61:' value="'        ?0                  	;0
91  62   ECHO/40                   ?0        16?4                 ?0                  	;0
92  63   ECHO/40                   ?0        62:'">'              ?0                  	;0
93  64   ECHO/40                   ?0        16?3                 ?0                  	;0
94  65   ECHO/40                   ?0        63:'</option>
															' ?0                  	;0
95  66   JMP/42                    ?0        ?80                  ?0                  	;0	>>80
96  66   FE_FREE/127               ?0        $35                  ?0                  	;0	<<79
97  69   ECHO/40                   ?0        64:'														</select>
													</div>
													<label class="col-md-4 col-form-label" for="backups_to_keep">Local Backups to Keep <i title="Enter 0 for unlimited. Oldest will be deleted." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="backups_to_keep" name="backups_to_keep" value="' ?0                  	;0
98  70   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'htmlspecialchars'	;1
99  70   FETCH_DIM_R/81            $41=      16?2                 67:'backups_to_keep'	;0
100 70   JMPZ/43                   ?0        $41                  ?104                	;0	>>104
101 70   FETCH_DIM_R/81            $42=      16?2                 68:'backups_to_keep'	;0
102 70   QM_ASSIGN/22              #43=      $42                  ?0                  	;0
103 70   JMP/42                    ?0        ?105                 ?0                  	;0	>>105
104 70   QM_ASSIGN/22              #43=      69:0                 ?0                  	;0	<<100
105 70   SEND_VAL_EX/116           ?80       #43                  ?1                  	;0	<<103
106 70   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
107 70   ECHO/40                   ?0        $44                  ?0                  	;0
108 71   GOTO/253                  ?0        ?109                 ?70                 	;0
109 73   ECHO/40                   ?0        71:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="dropbox_remote">Dropbox Backups <i title="Once a local backup is generated, upload it to Dropbox for safe remote storage." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="dropbox_remote" id="dropbox_remote" type="checkbox"' ?0                  	;0
110 74   FETCH_DIM_R/81            $45=      16?2                 72:'dropbox_remote' 	;0
111 74   IS_EQUAL/17               #46=      $45                  73:1                	;0
112 74   BOOL_NOT/13               #47=      #46                  ?0                  	;0
113 74   JMPZ/43                   ?0        #47                  ?115                	;0	>>115
114 75   GOTO/253                  ?0        ?116                 ?74                 	;0
115 77   ECHO/40                   ?0        75:'checked '        ?0                  	;0	<<113
116 79   ECHO/40                   ?0        76:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="dropbox_keep">Dropbox Backups to Keep <i title="Enter 0 for unlimited. Oldest will be deleted." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="dropbox_keep" name="dropbox_keep" value="' ?0                  	;0
117 80   GOTO/253                  ?0        ?31                  ?77                 	;0
118 82   INCLUDE_OR_EVAL/73        ?43       78:'footer.php'      ?0                  	;2
119 83   NOP/0                     ?0        79:1                 ?0                  	;4294967295
*/

?>
<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

              <div class="row">
                  <div class="col-lg-8">
                      <!--custom chart start-->
                      <div class="border-head">
                          <h3>Earning Graph</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>100</span></li>
                              <li><span>80</span></li>
                              <li><span>60</span></li>
                              <li><span>40</span></li>
                              <li><span>20</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">AUG</div>
                              <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">SEP</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">OCT</div>
                              <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">NOV</div>
                              <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">DEC</div>
                              <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
                  </div>
                  <div class="col-lg-4">
                      <!--new earning start-->
                      <div class="panel terques-chart">
                          <div class="panel-body chart-texture">
                              <div class="chart">
                                  <div class="heading">
                                      <span>Friday</span>
                                      <strong>$ 57,00 | 15%</strong>
                                  </div>
                                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">Earnings of the day</span>
                              <span class="value">
                              </span>
                          </div>
                      </div>
                      <!--new earning end-->

                      <!--total earning start-->
                      <div class="panel green-chart">
                          <div class="panel-body">
                              <div class="chart">
                                  <div class="heading">
                                      <span>June</span>
                                      <strong>23 Days | 65%</strong>
                                  </div>
                                  <div id="barchart"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">Earnings for the Month</span>
                              <span class="value">$, 76,54,678</span>
                          </div>
                      </div>
                      <!--total earning end-->
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <!--work progress start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Work Progress</h1>
                              </div>
                              <div class="task-option">
                              </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>
                                      Target Sell
                                  </td>
                                  <td>
                                      <span class="badge bg-important">75%</span>
                                  </td>
                                  <td>
                                    <div id="work-progress1-ren">Started</div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>
                                      Product Delivery
                                  </td>
                                  <td>
                                      <span class="badge bg-success">43%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress2-ren">Ended</div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>
                                      Payment Collection
                                  </td>
                                  <td>
                                      <span class="badge bg-info">67%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress3-ren">Doing</div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>
                                      Work Progress
                                  </td>
                                  <td>
                                      <span class="badge bg-warning">30%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress4-ren">Doing</div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>
                                      Delivery Pending
                                  </td>
                                  <td>
                                      <span class="badge bg-primary">15%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress5-ren">Ended</div>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--work progress end-->
                  </div>
              </div>
        

#!/usr/bin/env python
# coding: utf-8

# In[1]:


# import module
import streamlit as st

# Title
st.title("FOOD WASTE INSIGHTS")
st.balloons()
import time
my_bar = st.progress(0)
for percent_complete in range(100):
    time.sleep(0.1)
    my_bar.progress(percent_complete + 1)

with st.spinner('Wait for it...'):
    time.sleep(1.5)
st.success('Page Loaded Successfully')

# In[2]:


import pandas as pd
import numpy as np
import seaborn as sns
import matplotlib
import matplotlib.pyplot as plt
import os
import textwrap

for dirname, _, filenames in os.walk('/kaggle/input'):
    for filename in filenames:
        print(os.path.join(dirname, filename))


# In[3]:

st.subheader("THE DATA FROM WHICH THE INSIGHTS WERE OBSERVED")
pd.set_option('display.max_columns', None)
df=pd.read_csv('brooklyn.csv')
st.dataframe(df) 


# In[4]:


df = df[~df['label_date'].astype(str).str.startswith('x')]
df['label_date'] = df['label_date'].str[:10]
df.sort_values(by = ['label_date'], ascending = False)
df = df.dropna(subset=['label_date'])
df['date_collected'] = pd.to_datetime(df['date_collected'],  format = '%Y-%m-%d' )
df['label_date'] = pd.to_datetime(df['label_date'],  format = '%Y-%m-%d' )
df['Date_Diff'] = df['label_date'] - df['date_collected']


# In[5]:


df['Date_Diff'] = pd.to_numeric(df['Date_Diff'].dt.days, downcast='integer')


# In[6]:


def APPLYFUN(i):
    if i >= 0:
        return 'Early Throw Out Time'
    else:
        return 'On Time'
df['Date_Diff_Cat'] = df['Date_Diff'].apply(APPLYFUN)
df.head()


# In[7]:

st.subheader('Total Food Waste according to ***_Retailer_ Type***')
Retailer = df.groupby(by = ['retailer_type','Date_Diff_Cat'])['approximate_dollar_value'].sum().reset_index()
Retailer = Retailer.sort_values(by = 'approximate_dollar_value', ascending = False)
fig, ax = plt.subplots(figsize=(10,10))
sns.barplot(data = Retailer, x = 'retailer_type', y = 'approximate_dollar_value',hue = 'Date_Diff_Cat', ax=ax)
plt.xlabel('Retailer Type', weight = 'bold')
plt.ylabel('Waste(Total Dollar Amount)', weight = 'bold')
st.write(fig)


# In[8]:

st.subheader('Total Food Waste according to **_Food_ Type**')
Type = df.groupby(by = ['food_type','Date_Diff_Cat'])['approximate_dollar_value'].sum().reset_index()
Type = Type.sort_values(by = 'approximate_dollar_value', ascending = False)
fig, ax = plt.subplots(figsize=(10,10))
sns.barplot(data = Type, x = 'food_type', y = 'approximate_dollar_value',hue = 'Date_Diff_Cat', ax=ax)
plt.xlabel('Food Type', weight = 'bold')
plt.ylabel('Waste(Total Dollar Amount)', weight = 'bold')
st.write(fig)


# In[ ]:

st.subheader('Total Food Waste according to **_Food_ Detail**')
Detail = df.groupby(by = ['retailer_detail','Date_Diff_Cat'])['approximate_dollar_value'].sum().reset_index()
Detail = Detail.sort_values(by = 'approximate_dollar_value', ascending = False)
fig, ax = plt.subplots(figsize=(20,10))
sns.barplot(data = Detail, x = 'retailer_detail', y = 'approximate_dollar_value',hue = 'Date_Diff_Cat', ax=ax)
plt.xlabel('Food Detail', weight = 'bold')
plt.ylabel('Waste(Total Dollar Amount)', weight = 'bold')
ax.set_xticklabels([textwrap.fill(e, 30) for e in Detail['retailer_detail'].head()])
st.write(fig)


# In[ ]:

st.subheader('Total Food Waste according to **_Food_**')
Food = df.groupby(by = ['food_detail'])['approximate_dollar_value'].sum().reset_index()
Food = Food.sort_values(by = 'approximate_dollar_value', ascending = False)[:10]
fig, ax = plt.subplots(figsize=(20,10))
sns.barplot(data = Food, x = 'food_detail', y = 'approximate_dollar_value',color = 'blue', ax=ax)
plt.xlabel('Food', weight = 'bold')
plt.ylabel('Waste(Total Dollar Amount)', weight = 'bold')
ax.set_xticklabels([textwrap.fill(e, 15) for e in Food['food_detail']])
st.write(fig)


# In[ ]:





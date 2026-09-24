/* Section title + 3-up feature cards on cream */
function SectionEyebrow({ children }) {
  return (
    <div style={{
      fontFamily: "'Tajawal'", fontSize: 13, fontWeight: 500,
      letterSpacing: '0.32em', color: '#D4A017',
      textTransform: 'uppercase', marginBottom: 14,
    }}>{children}</div>
  );
}
function SectionTitle({ children, align = 'center' }) {
  return (
    <h2 style={{
      fontFamily: "'Cairo', 'Tajawal', sans-serif",
      fontSize: 'clamp(28px, 3.4vw, 40px)',
      fontWeight: 700,
      color: '#1F1B16',
      margin: 0,
      textAlign: align,
      lineHeight: 1.3,
    }}>{children}</h2>
  );
}
window.SectionEyebrow = SectionEyebrow;
window.SectionTitle = SectionTitle;

function FeatureCards() {
  const items = [
    { icon: 'calendar-days', title: 'تأجير يومي أو أسبوعي', desc: 'احجز سيارتك بمرونة كاملة — من يوم واحد إلى أسبوع، مع باقات أسعار تنافسية ومخصصة لاحتياجاتك.' },
    { icon: 'map', title: 'رحلات بين المدن', desc: 'تنقل بين العواصم الأوروبية الكبرى براحة ورفاهية، مع سائق محترف يتحدث العربية ويعرف الطرق.' },
    { icon: 'map-pinned', title: 'باقات سياحية متكاملة', desc: 'باقات مصممة بعناية تشمل التنقل والإرشاد السياحي بين أهم المعالم في أوروبا.' },
  ];
  return (
    <section style={{ background: '#F5F0E8', paddingBlock: 120 }}>
      <div style={{ maxWidth: 1200, margin: '0 auto', padding: '0 40px', textAlign: 'center' }}>
        <SectionEyebrow>خدماتنا</SectionEyebrow>
        <SectionTitle>ماذا نقدم لكم؟</SectionTitle>
        <p style={{
          fontFamily: "'Tajawal'", fontSize: 18, lineHeight: 1.75,
          color: '#4A463E', maxWidth: 680, margin: '20px auto 0',
        }}>
          منذ تأسيسنا، التزمنا بتقديم تجربة تنقل ترقى لتطلعاتكم — راحة وخصوصية وسلامة في كل رحلة.
        </p>
        <div style={{
          marginTop: 64, display: 'grid',
          gridTemplateColumns: 'repeat(3, 1fr)', gap: 24,
        }}>
          {items.map((it, i) => (
            <div key={i} style={{
              background: 'white',
              border: '1px solid #D9D2C4',
              padding: 36,
              textAlign: 'right',
              transition: 'box-shadow 240ms cubic-bezier(.22,.61,.36,1), transform 240ms',
              cursor: 'pointer',
            }}
            onMouseEnter={e => {
              e.currentTarget.style.boxShadow = '0 16px 40px rgba(17,17,17,0.12)';
              e.currentTarget.style.transform = 'translateY(-4px)';
            }}
            onMouseLeave={e => {
              e.currentTarget.style.boxShadow = 'none';
              e.currentTarget.style.transform = 'translateY(0)';
            }}>
              <div style={{
                width: 56, height: 56,
                border: '1px solid #D4A017', color: '#D4A017',
                display: 'flex', alignItems: 'center', justifyContent: 'center',
                marginBottom: 24,
              }}>
                <Icon name={it.icon} size={26} />
              </div>
              <h3 style={{
                fontFamily: "'Cairo', 'Tajawal', sans-serif",
                fontSize: 22, fontWeight: 700, color: '#1F1B16',
                margin: '0 0 12px',
              }}>{it.title}</h3>
              <p style={{
                fontFamily: "'Tajawal'", fontSize: 16, lineHeight: 1.75,
                color: '#4A463E', margin: 0,
              }}>{it.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
window.FeatureCards = FeatureCards;
